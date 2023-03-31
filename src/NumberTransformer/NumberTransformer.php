<?php

namespace CleverEggDigital\NumberToWords\NumberTransformer;

interface NumberTransformer
{
    /**
     * @param int $number
     *
     * @return string
     */
    public function toWords($number);
}
