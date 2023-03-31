<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

use CleverEggDigital\NumberToWords\Legacy\Numbers\Words;

class SpanishNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $converter = new Words();

        return $converter->transformToWords($number, 'es');
    }
}
