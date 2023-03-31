<?php

namespace CleverEggDigital\NumberToWords\Tests\NumberTransformer;

use CleverEggDigital\NumberToWords\NumberTransformer\SwedishNumberTransformer;

class SwedishNumberTransformerTest extends NumberTransformerTest
{
    public function setUp(): void
    {
        $this->numberTransformer = new SwedishNumberTransformer();
    }

    public function providerItConvertsNumbersToWords()
    {
        return [
            [0, 'noll'],
            [1, 'en'],
            [9, 'nio'],
            [10, 'tio'],
            [11, 'elva'],
            [19, 'nitton'],
            [20, 'tjugo'],
            [21, 'tjugo en'],
            [80, 'åttio'],
            [90, 'nittio'],
            [99, 'nittio nio'],
            [100, 'en hundra'],
            [101, 'en hundra en'],
            [111, 'en hundra elva'],
            [120, 'en hundra tjugo'],
            [121, 'en hundra tjugo en'],
            [900, 'nio hundra'],
            [909, 'nio hundra nio'],
            [919, 'nio hundra nitton'],
            [990, 'nio hundra nittio'],
            [999, 'nio hundra nittio nio'],
            [1000, 'en tusen'],
            [2000, 'två tusen'],
            [4000, 'fyra tusen'],
            [5000, 'fem tusen'],
            [11000, 'elva tusen'],
            [21000, 'tjugo en tusen'],
            [999000, 'nio hundra nittio nio tusen'],
            [999999, 'nio hundra nittio nio tusen nio hundra nittio nio'],
            [1000000, 'en miljon'],
            [2000000, 'två miljon'],
            [4000000, 'fyra miljon'],
            [5000000, 'fem miljon'],
            [999000000, 'nio hundra nittio nio miljon'],
            [999000999, 'nio hundra nittio nio miljon nio hundra nittio nio'],
            [999999000, 'nio hundra nittio nio miljon nio hundra nittio nio tusen'],
            [999999999, 'nio hundra nittio nio miljon nio hundra nittio nio tusen nio hundra nittio nio'],
            [1174315110, 'en miljard en hundra sjutio fyra miljon tre hundra femton tusen en hundra tio'],
            [1174315119, 'en miljard en hundra sjutio fyra miljon tre hundra femton tusen en hundra nitton'],
            [15174315119, 'femton miljard en hundra sjutio fyra miljon tre hundra femton tusen en hundra nitton'],
            [35174315119, 'trettio fem miljard en hundra sjutio fyra miljon tre hundra femton tusen en hundra nitton'],
            [935174315119, 'nio hundra trettio fem miljard en hundra sjutio fyra miljon tre hundra femton tusen en hundra nitton'],
            [2935174315119, 'två biljon nio hundra trettio fem miljard en hundra sjutio fyra miljon tre hundra femton tusen en hundra nitton'],
        ];
    }
}
