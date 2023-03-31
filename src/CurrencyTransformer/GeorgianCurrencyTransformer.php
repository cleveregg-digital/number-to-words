<?php

namespace CleverEggDigital\NumberToWords\CurrencyTransformer;

use CleverEggDigital\NumberToWords\Legacy\Numbers\Words;

class GeorgianCurrencyTransformer implements CurrencyTransformer
{

    public function toWords($amount, $currency, $options = null)
    {
        $converter = new Words($options);
        return $converter->transformToCurrency($amount, 'ka', $currency);
    }
}
