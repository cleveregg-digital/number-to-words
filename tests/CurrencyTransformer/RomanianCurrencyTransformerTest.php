<?php

namespace CleverEggDigital\NumberToWords\Tests\CurrencyTransformer;

use CleverEggDigital\NumberToWords\CurrencyTransformer\RomanianCurrencyTransformer;

class RomanianCurrencyTransformerTest extends CurrencyTransformerTest
{
    public function setUp(): void
    {
        $this->currencyTransformer = new RomanianCurrencyTransformer();
    }

    public function providerItConvertsMoneyAmountToWords()
    {
        return [
            [100, 'ROL', 'un leu'],
            [200, 'ROL', 'doi lei'],
            [140, 'ROL', 'un leu și patruzeci de bani'],
            [145, 'ROL', 'un leu și patruzeci și cinci de bani'],
            [200000, 'ROL', 'două mii de lei'],
        ];
    }
}
