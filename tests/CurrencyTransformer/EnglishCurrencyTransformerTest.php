<?php

namespace CleverEggDigital\NumberToWords\Tests\CurrencyTransformer;

use CleverEggDigital\NumberToWords\CurrencyTransformer\EnglishCurrencyTransformer;

class EnglishCurrencyTransformerTest extends CurrencyTransformerTest
{
    public function setUp(): void
    {
        $this->currencyTransformer = new EnglishCurrencyTransformer();
    }

    public function providerItConvertsMoneyAmountToWords()
    {
        return [
            [72900, 'USD', 'seven hundred twenty-nine dollars'],
            [89400, 'USD', 'eight hundred ninety-four dollars'],
            [99900, 'USD', 'nine hundred ninety-nine dollars'],
            [100000, 'USD', 'one thousand dollars'],
            [100100, 'USD', 'one thousand one dollars'],
            [109725, 'USD', 'one thousand ninety-seven dollars twenty-five cents'],
            [110400, 'USD', 'one thousand one hundred four dollars'],
            [124380, 'EUR', 'one thousand two hundred forty-three euros eighty euro-cents'],
            [238500, 'USD', 'two thousand three hundred eighty-five dollars'],
            [376600, 'USD', 'three thousand seven hundred sixty-six dollars'],
            [419645, 'PLN', 'four thousand one hundred ninety-six zlotys forty-five groszs'],
            [584600, 'USD', 'five thousand eight hundred forty-six dollars'],
            [645900, 'USD', 'six thousand four hundred fifty-nine dollars'],
            [723200, 'USD', 'seven thousand two hundred thirty-two dollars'],
            [123456789, 'XPF', 'one million two hundred thirty-four thousand five hundred sixty-seven CFP francs eighty-nine centimes'],

            [-72925, 'USD', 'minus seven hundred twenty-nine dollars twenty-five cents'],
            [-89425, 'USD', 'minus eight hundred ninety-four dollars twenty-five cents'],
            [-99925, 'USD', 'minus nine hundred ninety-nine dollars twenty-five cents'],
        ];
    }
}
