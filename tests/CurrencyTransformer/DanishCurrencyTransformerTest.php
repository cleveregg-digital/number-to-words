<?php

namespace CleverEggDigital\NumberToWords\Tests\CurrencyTransformer;

use CleverEggDigital\NumberToWords\CurrencyTransformer\DanishCurrencyTransformer;

class DanishCurrencyTransformerTest extends CurrencyTransformerTest
{
    public function setUp(): void
    {
        $this->currencyTransformer = new DanishCurrencyTransformer();
    }

    public function providerItConvertsMoneyAmountToWords()
    {
        return [
            [100, 'DKK', 'en krone'],
            [200, 'USD', 'to dollars'],
            [600, 'EUR', 'seks euro'],
            [1300, 'CHF', 'tretten schweitzer franc'],
        ];
    }
}
