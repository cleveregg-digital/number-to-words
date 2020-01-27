<?php

namespace Oliversarfas\NumberToWords;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Oliversarfas\NumberToWords\Skeleton\SkeletonClass
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
