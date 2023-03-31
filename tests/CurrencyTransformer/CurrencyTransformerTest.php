<?php

namespace CleverEggDigital\NumberToWords\Tests\CurrencyTransformer;

use CleverEggDigital\NumberToWords\CurrencyTransformer\CurrencyTransformer;
use PHPUnit\Framework\TestCase;

abstract class CurrencyTransformerTest extends TestCase
{
    protected CurrencyTransformer $currencyTransformer;

    /**
     * @dataProvider providerItConvertsMoneyAmountToWords
     *
     * @param float $amount
     * @param string $currency
     * @param string $expectedString
     */
    public function testItConvertsMoneyAmountToWords(float $amount, string $currency, string $expectedString)
    {
        self::assertEquals($expectedString, $this->currencyTransformer->toWords($amount, $currency));
    }

    abstract public function providerItConvertsMoneyAmountToWords();
}
