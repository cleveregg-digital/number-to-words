<?php

namespace CleverEggDigital\NumberToWords\Tests\CurrencyTransformer;

use CleverEggDigital\NumberToWords\CurrencyTransformer\LatvianCurrencyTransformer;

class LatvianCurrencyTransformerTest extends CurrencyTransformerTest
{
    public function setUp(): void
    {
        $this->currencyTransformer = new LatvianCurrencyTransformer();
    }

    public function providerItConvertsMoneyAmountToWords()
    {
        return array_merge([

            [0, 'EUR', 'nulle eiro un nulle eiro centi'],
            [1, 'EUR', 'nulle eiro un viens eiro cents'],
            [9, 'EUR', 'nulle eiro un deviņi eiro centi'],
            [10, 'EUR', 'nulle eiro un desmit eiro centi'],
            [11, 'EUR', 'nulle eiro un vienpadsmit eiro centi'],
            [19, 'EUR', 'nulle eiro un deviņpadsmit eiro centi'],
            [20, 'EUR', 'nulle eiro un divdesmit eiro centi'],
            [21, 'EUR', 'nulle eiro un divdesmit viens eiro cents'],
            [25, 'EUR', 'nulle eiro un divdesmit pieci eiro centi'],
            [30, 'EUR', 'nulle eiro un trīsdesmit eiro centi'],
            [99, 'EUR', 'nulle eiro un deviņdesmit deviņi eiro centi'],
            [100, 'EUR', 'viens eiro un nulle eiro centi'],
            [101, 'EUR', 'viens eiro un viens eiro cents'],
            [103, 'EUR', 'viens eiro un trīs eiro centi'],
            [111, 'EUR', 'viens eiro un vienpadsmit eiro centi'],
            [120, 'EUR', 'viens eiro un divdesmit eiro centi'],
            [121, 'EUR', 'viens eiro un divdesmit viens eiro cents'],
            [726, 'EUR', 'septiņi eiro un divdesmit seši eiro centi'],
            [850, 'EUR', 'astoņi eiro un piecdesmit eiro centi'],
            [900, 'EUR', 'deviņi eiro un nulle eiro centi'],
            [919, 'EUR', 'deviņi eiro un deviņpadsmit eiro centi'],
            [930, 'EUR', 'deviņi eiro un trīsdesmit eiro centi'],
            [990, 'EUR', 'deviņi eiro un deviņdesmit eiro centi'],
            [999, 'EUR', 'deviņi eiro un deviņdesmit deviņi eiro centi'],
            [1000, 'EUR', 'desmit eiro un nulle eiro centi'],
            [1001, 'EUR', 'desmit eiro un viens eiro cents'],
            [2000, 'EUR', 'divdesmit eiro un nulle eiro centi'],
            [3000, 'EUR', 'trīsdesmit eiro un nulle eiro centi'],
            [3210, 'EUR', 'trīsdesmit divi eiro un desmit eiro centi'],
            [4000, 'EUR', 'četrdesmit eiro un nulle eiro centi'],
            [4011, 'EUR', 'četrdesmit eiro un vienpadsmit eiro centi'],
            [7000, 'EUR', 'septiņdesmit eiro un nulle eiro centi'],
            [11000, 'EUR', 'simts desmit eiro un nulle eiro centi'],
            [21000, 'EUR', 'divi simti desmit eiro un nulle eiro centi'],
            [999000, 'EUR', 'deviņi tūkstoši deviņi simti deviņdesmit eiro un nulle eiro centi'],
            [999999, 'EUR', 'deviņi tūkstoši deviņi simti deviņdesmit deviņi eiro un deviņdesmit deviņi eiro centi'],
            [1000000, 'EUR', 'desmit tūkstoši eiro un nulle eiro centi'],
            [2500001, 'EUR', 'divdesmit pieci tūkstoši eiro un viens eiro cents'],
            [1174315110, 'EUR', 'vienpadsmit miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens eiro un desmit eiro centi'],
            [1174315119, 'EUR', 'vienpadsmit miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens eiro un deviņpadsmit eiro centi'],
            [15174315110, 'EUR', 'simts piecdesmit viens miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens eiro un desmit eiro centi'],
            [35174315119, 'EUR', 'trīs simti piecdesmit viens miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens eiro un deviņpadsmit eiro centi'],
            [935174315119, 'EUR', 'deviņi miljardi trīs simti piecdesmit viens miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens eiro un deviņpadsmit eiro centi'],
            [222935174315119, 'EUR', 'divi triljoni divi simti divdesmit deviņi miljardi trīs simti piecdesmit viens miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens eiro un deviņpadsmit eiro centi'],
        ], [
            [0, 'USD', 'nulle dolāri un nulle centi'],
            [1, 'USD', 'nulle dolāri un viens cents'],
            [9, 'USD', 'nulle dolāri un deviņi centi'],
            [10, 'USD', 'nulle dolāri un desmit centi'],
            [11, 'USD', 'nulle dolāri un vienpadsmit centi'],
            [19, 'USD', 'nulle dolāri un deviņpadsmit centi'],
            [20, 'USD', 'nulle dolāri un divdesmit centi'],
            [21, 'USD', 'nulle dolāri un divdesmit viens cents'],
            [25, 'USD', 'nulle dolāri un divdesmit pieci centi'],
            [30, 'USD', 'nulle dolāri un trīsdesmit centi'],
            [99, 'USD', 'nulle dolāri un deviņdesmit deviņi centi'],
            [100, 'USD', 'viens dolārs un nulle centi'],
            [101, 'USD', 'viens dolārs un viens cents'],
            [103, 'USD', 'viens dolārs un trīs centi'],
            [111, 'USD', 'viens dolārs un vienpadsmit centi'],
            [120, 'USD', 'viens dolārs un divdesmit centi'],
            [121, 'USD', 'viens dolārs un divdesmit viens cents'],
            [726, 'USD', 'septiņi dolāri un divdesmit seši centi'],
            [850, 'USD', 'astoņi dolāri un piecdesmit centi'],
            [900, 'USD', 'deviņi dolāri un nulle centi'],
            [919, 'USD', 'deviņi dolāri un deviņpadsmit centi'],
            [930, 'USD', 'deviņi dolāri un trīsdesmit centi'],
            [990, 'USD', 'deviņi dolāri un deviņdesmit centi'],
            [999, 'USD', 'deviņi dolāri un deviņdesmit deviņi centi'],
            [1000, 'USD', 'desmit dolāri un nulle centi'],
            [1001, 'USD', 'desmit dolāri un viens cents'],
            [2000, 'USD', 'divdesmit dolāri un nulle centi'],
            [3000, 'USD', 'trīsdesmit dolāri un nulle centi'],
            [3210, 'USD', 'trīsdesmit divi dolāri un desmit centi'],
            [4000, 'USD', 'četrdesmit dolāri un nulle centi'],
            [4011, 'USD', 'četrdesmit dolāri un vienpadsmit centi'],
            [7000, 'USD', 'septiņdesmit dolāri un nulle centi'],
            [11000, 'USD', 'simts desmit dolāri un nulle centi'],
            [21000, 'USD', 'divi simti desmit dolāri un nulle centi'],
            [999000, 'USD', 'deviņi tūkstoši deviņi simti deviņdesmit dolāri un nulle centi'],
            [999999, 'USD', 'deviņi tūkstoši deviņi simti deviņdesmit deviņi dolāri un deviņdesmit deviņi centi'],
            [1000000, 'USD', 'desmit tūkstoši dolāri un nulle centi'],
            [2500001, 'USD', 'divdesmit pieci tūkstoši dolāri un viens cents'],
            [1174315110, 'USD', 'vienpadsmit miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens dolārs un desmit centi'],
            [1174315119, 'USD', 'vienpadsmit miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens dolārs un deviņpadsmit centi'],
            [15174315110, 'USD', 'simts piecdesmit viens miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens dolārs un desmit centi'],
            [35174315119, 'USD', 'trīs simti piecdesmit viens miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens dolārs un deviņpadsmit centi'],
            [935174315119, 'USD', 'deviņi miljardi trīs simti piecdesmit viens miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens dolārs un deviņpadsmit centi'],
            [222935174315119, 'USD', 'divi triljoni divi simti divdesmit deviņi miljardi trīs simti piecdesmit viens miljons septiņi simti četrdesmit trīs tūkstoši simts piecdesmit viens dolārs un deviņpadsmit centi'],
        ]);
    }
}
