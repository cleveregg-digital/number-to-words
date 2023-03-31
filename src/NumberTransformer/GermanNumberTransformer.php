<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

use ClevereggDigital\NumberToWords\Language\German\GermanDictionary;
use ClevereggDigital\NumberToWords\Language\German\GermanExponentInflector;
use ClevereggDigital\NumberToWords\Language\German\GermanTripletTransformer;
use ClevereggDigital\NumberToWords\Service\NumberToTripletsConverter;

class GermanNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new GermanDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new GermanTripletTransformer($dictionary);
        $exponentInflector = new GermanExponentInflector();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy('')
            ->transformNumbersBySplittingIntoPowerAwareTriplets($numberToTripletsConverter, $tripletTransformer)
            ->inflectExponentByNumbers($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
