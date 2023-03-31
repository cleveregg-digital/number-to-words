<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

use CleverEggDigital\NumberToWords\Legacy\Numbers\Words;

class LithuanianNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $converter = new Words();

        return $converter->transformToWords($number, 'lt');
    }
}
