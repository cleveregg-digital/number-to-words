<?php

namespace CleverEggDigital\NumberToWords\Tests;

use CleverEggDigital\NumberToWords\NumberToWords;
use Orchestra\Testbench\TestCase;
use CleverEggDigital\NumberToWords\NumberToWordsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [NumberToWordsServiceProvider::class];
    }

    /** @test */
    public function example_code_will_run()
    {
        $this->assertEquals('five thousand one hundred twenty', NumberToWords::toWords(5120, 'en'));
        $this->assertEquals('cinco mil ciento veinte', NumberToWords::toWords(5120, 'es'));
        $this->assertEquals('five thousand one hundred twenty dollars', NumberToWords::toWords(512000, 'en', 'USD')); // outputs "five thousand one hundred twenty dollars"
    }
}
