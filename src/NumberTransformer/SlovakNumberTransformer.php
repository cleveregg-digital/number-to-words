<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

use CleverEggDigital\NumberToWords\Language\Slovak\SlovakDictionary;
use CleverEggDigital\NumberToWords\Language\Slovak\SlovakExponentInflector;
use CleverEggDigital\NumberToWords\Language\Slovak\SlovakNounGenderInflector;
use CleverEggDigital\NumberToWords\Language\Slovak\SlovakTripletTransformer;
use CleverEggDigital\NumberToWords\Service\NumberToTripletsConverter;

class SlovakNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new SlovakDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new SlovakTripletTransformer($dictionary);
        $exponentInflector = new SlovakExponentInflector(new SlovakNounGenderInflector());

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->inflectExponentByNumbers($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
