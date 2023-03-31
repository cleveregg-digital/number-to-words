<?php

namespace CleverEggDigital\NumberToWords\CurrencyTransformer;

use ClevereggDigital\NumberToWords\TransformerOptions\CurrencyTransformerOptions;

interface CurrencyTransformer
{
    /**
     * @param int                             $amount
     * @param string                          $currency
     * @param CurrencyTransformerOptions|null $options
     *
     * @return string
     */
    public function toWords($amount, $currency, $options = null);
}
