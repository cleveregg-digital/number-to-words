<?php

namespace Oliversarfas\NumberToWords;

class NumberToWords
{
    public static function __callStatic($name, $arguments)
    {
        $ntw = new \NumberToWords\NumberToWords();
        // Currency
        if(count($arguments) == 3) {
            return $ntw->getCurrencyTransformer($arguments[1])->$name($arguments[0], $arguments[2]);
        }

        // Just numbers
        if(count($arguments) == 2) {
            return $ntw->getNumberTransformer($arguments[1])->$name($arguments[0]);
        }

        throw new \Exception("Minimum of 2 parameters required to convert numbers to words.");
    }

    public function __call($name, $arguments)
    {
        return $this->__callStatic($name, $arguments);
    }
}
