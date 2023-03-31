<?php

namespace CleverEggDigital\NumberToWords\Tests\CurrencyTransformer;

use CleverEggDigital\NumberToWords\CurrencyTransformer\GermanCurrencyTransformer;

class GermanCurrencyTransformerTest extends CurrencyTransformerTest
{
    public function setUp(): void
    {
        $this->currencyTransformer = new GermanCurrencyTransformer();
    }

    public function providerItConvertsMoneyAmountToWords()
    {
        return [
            [600, 'EUR', 'sechs Euro']
        ];
    }
}
