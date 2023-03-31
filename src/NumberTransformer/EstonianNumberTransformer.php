<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

use ClevereggDigital\NumberToWords\Legacy\Numbers\Words;

class EstonianNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $converter = new Words();

        return $converter->transformToWords($number, 'et');
    }
}
