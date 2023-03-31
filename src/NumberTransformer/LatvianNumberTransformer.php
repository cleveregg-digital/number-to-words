<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

use CleverEggDigital\NumberToWords\Language\Latvian\LatvianDictionary;
use CleverEggDigital\NumberToWords\Language\Latvian\LatvianExponentInflector;
use CleverEggDigital\NumberToWords\Language\Latvian\LatvianTripletTransformer;
use CleverEggDigital\NumberToWords\Service\NumberToTripletsConverter;

class LatvianNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $dictionary = new LatvianDictionary();
        $numberToTripletsConverter = new NumberToTripletsConverter();
        $tripletTransformer = new LatvianTripletTransformer($dictionary);
        $exponentInflector = new LatvianExponentInflector();

        $numberTransformer = (new NumberTransformerBuilder())
            ->withDictionary($dictionary)
            ->withWordsSeparatedBy(' ')
            ->transformNumbersBySplittingIntoTriplets($numberToTripletsConverter, $tripletTransformer)
            ->inflectExponentByNumbers($exponentInflector)
            ->build();

        return $numberTransformer->toWords($number);
    }
}
