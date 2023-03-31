<?php

namespace CleverEggDigital\NumberToWords\Grammar;

use ClevereggDigital\NumberToWords\Language\Dictionary;
use ClevereggDigital\NumberToWords\NumberTransformer\NumberTransformerBuilder;

class CurrencyTransformerBuilder
{
    /**
     * @var NumberTransformerBuilder
     */
    private $numberTransformer;

    /**
     * @var Dictionary
     */
    private $dictionary;

    /**
     * @param NumberTransformerBuilder $numberTransformer
     *
     * @return $this
     */
    public function withNumberTransformer(NumberTransformerBuilder $numberTransformer)
    {
        $this->numberTransformer = $numberTransformer;

        return $this;
    }

    /**
     * @param Dictionary $dictionary
     *
     * @return $this
     */
    public function withDictionary(Dictionary $dictionary)
    {
        $this->dictionary = $dictionary;

        return $this;
    }

    public function toWords($currency, $decimal, $fraction)
    {
    }
}
