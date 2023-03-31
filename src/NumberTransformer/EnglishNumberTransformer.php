<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

use ClevereggDigital\NumberToWords\Language\English\EnglishDictionary;
use ClevereggDigital\NumberToWords\Language\English\EnglishExponentGetter;
use ClevereggDigital\NumberToWords\Language\English\EnglishTripletTransformer;
use ClevereggDigital\NumberToWords\Service\NumberToTripletsConverter;

class EnglishNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new EnglishDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new EnglishTripletTransformer($dictionary);
        $exponentInflector = new EnglishExponentGetter();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->useRegularExponents($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
