<?php

namespace CleverEggDigital\NumberToWords\Tests;

use CleverEggDigital\NumberToWords\BaseClass;
use CleverEggDigital\NumberToWords\CurrencyTransformer\CurrencyTransformer;
use CleverEggDigital\NumberToWords\NumberToWords;
use CleverEggDigital\NumberToWords\NumberTransformer\NumberTransformer;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class NumberToWordsTest extends TestCase
{
    public function testItThrowsExceptionIfNumberTransformerDoesNotExist()
    {
        $this->expectException(\InvalidArgumentException::class);

        $numberToWords = new NumberToWords();
        $numberToWords->getNumberTransformer('xx');
    }

    public function testItThrowsExceptionIfCurrencyTransformerDoesNotExist()
    {
        $this->expectException(\InvalidArgumentException::class);

        $numberToWords = new NumberToWords();
        $numberToWords->getCurrencyTransformer('xx');
    }

    public function testItReturnsNumberTransformer()
    {
        $numberToWords = new BaseClass();
        $numberToWordsTransformer = $numberToWords->getNumberTransformer('en');

        Assert::assertInstanceOf(NumberTransformer::class, $numberToWordsTransformer);
    }

    public function testItReturnsCurrencyTransformer()
    {
        $numberToWords = new BaseClass();
        $numberToWordsTransformer = $numberToWords->getCurrencyTransformer('en');

        Assert::assertInstanceOf(CurrencyTransformer::class, $numberToWordsTransformer);
    }
}
