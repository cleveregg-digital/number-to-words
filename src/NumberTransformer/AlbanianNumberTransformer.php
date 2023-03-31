<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

use CleverEggDigital\NumberToWords\Language\Albanian\AlbanianDictionary;
use CleverEggDigital\NumberToWords\Language\Albanian\AlbanianExponentGetter;
use CleverEggDigital\NumberToWords\Language\Albanian\AlbanianTripletTransformer;
use CleverEggDigital\NumberToWords\Service\NumberToTripletsConverter;

class AlbanianNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new AlbanianDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new AlbanianTripletTransformer($dictionary);
        $exponentInflector = new AlbanianExponentGetter();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withExponentsSeparatedBy('e')
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->useRegularExponents($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
