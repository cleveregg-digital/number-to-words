<?php

namespace CleverEggDigital\NumberToWords\Tests\NumberTransformer;

use CleverEggDigital\NumberToWords\NumberTransformer\GermanNumberTransformer;

class GermanNumberTransformerTest extends NumberTransformerTest
{
    public function setUp(): void
    {
        $this->numberTransformer = new GermanNumberTransformer();
    }

    public function providerItConvertsNumbersToWords()
    {
        return [
            [0, 'null'],
            [1, 'eins'],
            [2, 'zwei'],
            [3, 'drei'],
            [4, 'vier'],
            [5, 'fünf'],
            [6, 'sechs'],
            [7, 'sieben'],
            [8, 'acht'],
            [9, 'neun'],
            [10, 'zehn'],
            [11, 'elf'],
            [11, 'elf'],
            [12, 'zwölf'],
            [16, 'sechzehn'],
            [19, 'neunzehn'],
            [20, 'zwanzig'],
            [21, 'einundzwanzig'],
            [26, 'sechsundzwanzig'],
            [30, 'dreißig'],
            [31, 'einunddreißig'],
            [40, 'vierzig'],
            [43, 'dreiundvierzig'],
            [50, 'fünfzig'],
            [55, 'fünfundfünfzig'],
            [60, 'sechzig'],
            [67, 'siebenundsechzig'],
            [70, 'siebzig'],
            [79, 'neunundsiebzig'],
            [80, 'achtzig'],
            [90, 'neunzig'],
            [99, 'neunundneunzig'],
            [100, 'einhundert'],
            [101, 'einhunderteins'],
            [111, 'einhundertelf'],
            [120, 'einhundertzwanzig'],
            [121, 'einhunderteinundzwanzig'],
            [199, 'einhundertneunundneunzig'],
            [203, 'zweihundertdrei'],
            [287, 'zweihundertsiebenundachtzig'],
            [300, 'dreihundert'],
            [356, 'dreihundertsechsundfünfzig'],
            [410, 'vierhundertzehn'],
            [434, 'vierhundertvierunddreißig'],
            [578, 'fünfhundertachtundsiebzig'],
            [689, 'sechshundertneunundachtzig'],
            [729, 'siebenhundertneunundzwanzig'],
            [894, 'achthundertvierundneunzig'],
            [900, 'neunhundert'],
            [909, 'neunhundertneun'],
            [919, 'neunhundertneunzehn'],
            [990, 'neunhundertneunzig'],
            [999, 'neunhundertneunundneunzig'],
            [1000, 'eintausend'],
            [1001, 'eintausendeins'],
            [1097, 'eintausendsiebenundneunzig'],
            [1104, 'eintausendeinhundertvier'],
            [1243, 'eintausendzweihundertdreiundvierzig'],
            [2000, 'zweitausend'],
            [2385, 'zweitausenddreihundertfünfundachtzig'],
            [3766, 'dreitausendsiebenhundertsechsundsechzig'],
            [4000, 'viertausend'],
            [4196, 'viertausendeinhundertsechsundneunzig'],
            [5000, 'fünftausend'],
            [5846, 'fünftausendachthundertsechsundvierzig'],
            [6459, 'sechstausendvierhundertneunundfünfzig'],
            [7232, 'siebentausendzweihundertzweiunddreißig'],
            [8569, 'achttausendfünfhundertneunundsechzig'],
            [9539, 'neuntausendfünfhundertneununddreißig'],
            [11000, 'elftausend'],
            [21000, 'einundzwanzigtausend'],
            [999000, 'neunhundertneunundneunzigtausend'],
            [999999, 'neunhundertneunundneunzigtausendneunhundertneunundneunzig'],
            [1000000, 'eine Million'],
            [2000000, 'zwei Millionen'],
            [4000000, 'vier Millionen'],
            [5000000, 'fünf Millionen'],
            [999000000, 'neunhundertneunundneunzig Millionen'],
            [999000999, 'neunhundertneunundneunzig Millionen neunhundertneunundneunzig'],
            [999999000, 'neunhundertneunundneunzig Millionen neunhundertneunundneunzigtausend'],
            [999999999, 'neunhundertneunundneunzig Millionen neunhundertneunundneunzigtausendneunhundertneunundneunzig'],
            [1174315110, 'eine Milliarde einhundertvierundsiebzig Millionen dreihundertfünfzehntausendeinhundertzehn'],
            [1174315119, 'eine Milliarde einhundertvierundsiebzig Millionen dreihundertfünfzehntausendeinhundertneunzehn'],
            [15174315119, 'fünfzehn Milliarden einhundertvierundsiebzig Millionen dreihundertfünfzehntausendeinhundertneunzehn'],
            [35174315119, 'fünfunddreißig Milliarden einhundertvierundsiebzig Millionen dreihundertfünfzehntausendeinhundertneunzehn'],
            [935174315119, 'neunhundertfünfunddreißig Milliarden einhundertvierundsiebzig Millionen dreihundertfünfzehntausendeinhundertneunzehn'],
            [2935174315119, 'zwei Billionen neunhundertfünfunddreißig Milliarden einhundertvierundsiebzig Millionen dreihundertfünfzehntausendeinhundertneunzehn'],
        ];
    }
}
