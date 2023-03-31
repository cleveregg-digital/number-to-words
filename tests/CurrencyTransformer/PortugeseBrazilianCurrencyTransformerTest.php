<?php

namespace CleverEggDigital\NumberToWords\Tests\CurrencyTransformer;

use CleverEggDigital\NumberToWords\CurrencyTransformer\PortugueseBrazilianCurrencyTransformer;

class PortugeseBrazilianCurrencyTransformerTest extends CurrencyTransformerTest
{
    public function setUp(): void
    {
        $this->currencyTransformer = new PortugueseBrazilianCurrencyTransformer();
    }

    public function providerItConvertsMoneyAmountToWords()
    {
        return [
            [100, 'BRL', 'um real'],
            [200, 'USD', 'dois dólares'],
            [500, 'EUR', 'cinco euros']
        ];
    }
}
