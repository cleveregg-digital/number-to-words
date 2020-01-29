<?php

namespace CleverEggDigital\NumberToWords;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CleverEggDigital\NumberToWords\Skeleton\SkeletonClass
 */
class NumberToWordsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'number-to-words';
    }
}
