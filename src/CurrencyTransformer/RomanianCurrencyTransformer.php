<?php

namespace CleverEggDigital\NumberToWords\CurrencyTransformer;

use CleverEggDigital\NumberToWords\Legacy\Numbers\Words;

class RomanianCurrencyTransformer implements CurrencyTransformer
{
    /**
     * {@inheritdoc}
     */
    public function toWords($amount, $currency, $options = null)
    {
        $converter = new Words($options);

        return $converter->transformToCurrency($amount, 'ro', $currency);
    }
}
