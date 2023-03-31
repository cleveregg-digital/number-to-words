<?php

namespace CleverEggDigital\NumberToWords\Tests;

use CleverEggDigital\NumberToWords\NumberToWords;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    /** @test */
    public function example_code_will_run()
    {
        $this->assertEquals('five thousand one hundred twenty', NumberToWords::toWords(5120, 'en'));
        $this->assertEquals('cinco mil ciento veinte', NumberToWords::toWords(5120, 'es'));
        $this->assertEquals('five thousand one hundred twenty dollars', NumberToWords::toWords(512000, 'en', 'USD')); // outputs "five thousand one hundred twenty dollars"
    }
}
