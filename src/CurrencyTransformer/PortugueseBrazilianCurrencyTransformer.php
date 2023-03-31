<?php

namespace CleverEggDigital\NumberToWords\CurrencyTransformer;

use ClevereggDigital\NumberToWords\Legacy\Numbers\Words;

class PortugueseBrazilianCurrencyTransformer implements CurrencyTransformer
{
    /**
     * {@inheritdoc}
     */
    public function toWords($amount, $currency, $options = null)
    {
        $converter = new Words($options);

        return $converter->transformToCurrency($amount, 'pt_BR', $currency);
    }
}
