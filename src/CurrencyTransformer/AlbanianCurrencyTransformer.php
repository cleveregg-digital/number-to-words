<?php

namespace CleverEggDigital\NumberToWords\CurrencyTransformer;

use ClevereggDigital\NumberToWords\Exception\NumberToWordsException;
use ClevereggDigital\NumberToWords\Language\Albanian\AlbanianDictionary;
use ClevereggDigital\NumberToWords\Language\Albanian\AlbanianExponentGetter;
use ClevereggDigital\NumberToWords\Language\Albanian\AlbanianTripletTransformer;
use ClevereggDigital\NumberToWords\NumberTransformer\NumberTransformerBuilder;
use ClevereggDigital\NumberToWords\Service\NumberToTripletsConverter;

class AlbanianCurrencyTransformer implements CurrencyTransformer
{
    /**
     * {@inheritdoc}
     *
     * @throws NumberToWordsException
     * @return string
     */
    public function toWords($amount, $currency, $options = null)
    {
        $dictionary = new AlbanianDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new AlbanianTripletTransformer($dictionary);
        $exponentInflector = new AlbanianExponentGetter();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->useRegularExponents($exponentInflector)
            ->build();

        $decimal = (int) ($amount / 100);
        $fraction = abs($amount % 100);

        if ($fraction === 0) {
            $fraction = null;
        }

        $currency = strtoupper($currency);

        if (!array_key_exists($currency, AlbanianDictionary::$currencyNames)) {
            throw new NumberToWordsException(
                sprintf('Paraja "%s" për gjuhën "%s" nuk është në dispozicion', $currency, get_class($this))
            );
        }

        $currencyNames = AlbanianDictionary::$currencyNames[$currency];

        $return = trim($numberTransformer->toWords($decimal));
        $level = ($decimal === 1) ? 0 : 1;

        if ($level > 0) {
            if (count($currencyNames[0]) > 1) {
                $return .= ' ' . $currencyNames[0][$level];
            } else {
                $return .= ' ' . $currencyNames[0][0] . 's';
            }
        } else {
            $return .= ' ' . $currencyNames[0][0];
        }

        if (null !== $fraction) {
            $return .= ' ' . trim($numberTransformer->toWords($fraction));

            $level = $fraction === 1 ? 0 : 1;

            if ($level > 0) {
                if (count($currencyNames[1]) > 1) {
                    $return .= ' ' . $currencyNames[1][$level];
                } else {
                    $return .= ' ' . $currencyNames[1][0] . 's';
                }
            } else {
                $return .= ' ' . $currencyNames[1][0];
            }
        }

        return $return;
    }
}
