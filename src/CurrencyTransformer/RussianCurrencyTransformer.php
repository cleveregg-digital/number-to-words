<?php

namespace CleverEggDigital\NumberToWords\CurrencyTransformer;

use ClevereggDigital\NumberToWords\Legacy\Numbers\Words;

class RussianCurrencyTransformer implements CurrencyTransformer
{
    /**
     * {@inheritdoc}
     */
    public function toWords($amount, $currency, $options = null)
    {
        $converter = new Words($options);

        return $converter->transformToCurrency($amount, 'ru', $currency);
    }
}
