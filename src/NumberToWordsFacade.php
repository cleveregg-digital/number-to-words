<?php

namespace CleverEggDigital\NumberToWords;

use Illuminate\Support\Facades\Facade;

class NumberToWordsFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'number-to-words';
    }
}
