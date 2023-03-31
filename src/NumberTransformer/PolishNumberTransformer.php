<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

use ClevereggDigital\NumberToWords\Language\Polish\PolishDictionary;
use ClevereggDigital\NumberToWords\Language\Polish\PolishNounGenderInflector;
use ClevereggDigital\NumberToWords\Language\Polish\PolishExponentInflector;
use ClevereggDigital\NumberToWords\Language\Polish\PolishTripletTransformer;
use ClevereggDigital\NumberToWords\Service\NumberToTripletsConverter;

class PolishNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new PolishDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new PolishTripletTransformer($dictionary);
        $exponentInflector = new PolishExponentInflector(new PolishNounGenderInflector());

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->inflectExponentByNumbers($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
