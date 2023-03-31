<?php

namespace CleverEggDigital\NumberToWords\CurrencyTransformer;

use ClevereggDigital\NumberToWords\Exception\NumberToWordsException;
use ClevereggDigital\NumberToWords\Language\Slovak\SlovakDictionary;
use ClevereggDigital\NumberToWords\Language\Slovak\SlovakExponentInflector;
use ClevereggDigital\NumberToWords\Language\Slovak\SlovakNounGenderInflector;
use ClevereggDigital\NumberToWords\Language\Slovak\SlovakTripletTransformer;
use ClevereggDigital\NumberToWords\NumberTransformer\NumberTransformerBuilder;
use ClevereggDigital\NumberToWords\Service\NumberToTripletsConverter;

class SlovakCurrencyTransformer implements CurrencyTransformer
{
    /**
     * {@inheritdoc}
     *
     * @throws NumberToWordsException
     * @return string
     */
    public function toWords($amount, $currency, $options = null)
    {
        $dictionary = new SlovakDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new SlovakTripletTransformer($dictionary);
        $nounGenderInflector = new SlovakNounGenderInflector();
        $exponentInflector = new SlovakExponentInflector($nounGenderInflector);

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->inflectExponentByNumbers($exponentInflector)
            ->build();

        $decimal = (int) ($amount / 100);
        $fraction = $amount % 100;

        if ($fraction === 0) {
            $fraction = null;
        }

        $currency = strtoupper($currency);

        if (!array_key_exists($currency, SlovakDictionary::$currencyNames)) {
            throw new NumberToWordsException(
                sprintf('Currency "%s" is not available for "%s" language', $currency, get_class($this))
            );
        }

        $currencyNames = SlovakDictionary::$currencyNames[$currency];

        $words = [];

        $words[] = $numberTransformer->toWords($decimal);
        $words[] = $nounGenderInflector->inflectNounByNumber(
            $decimal,
            $currencyNames[0][0],
            $currencyNames[0][1],
            $currencyNames[0][2]
        );

        if (null !== $fraction) {
            $words[] = $numberTransformer->toWords($fraction);
            $words[] = $nounGenderInflector->inflectNounByNumber(
                $fraction,
                $currencyNames[1][0],
                $currencyNames[1][1],
                $currencyNames[1][2]
            );
        }

        return implode(' ', $words);
    }
}
