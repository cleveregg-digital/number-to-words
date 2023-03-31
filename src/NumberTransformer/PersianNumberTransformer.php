<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

use ClevereggDigital\NumberToWords\Service\NumberToTripletsConverter;
use ClevereggDigital\NumberToWords\Language\Persian\PersianDictionary;
use ClevereggDigital\NumberToWords\Language\Persian\PersianExponentGetter;
use ClevereggDigital\NumberToWords\Language\Persian\PersianTripletTransformer;

class PersianNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new PersianDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new PersianTripletTransformer($dictionary);
        $exponentInflector = new PersianExponentGetter();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->useRegularExponents($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
