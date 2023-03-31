<?php

namespace CleverEggDigital\NumberToWords;

use CleverEggDigital\NumberToWords\CurrencyTransformer\CurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\GeorgianCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\GermanCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\HungarianCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\DanishCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\EnglishCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\LatvianCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\LithuanianCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\PolishCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\PortugueseBrazilianCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\RomanianCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\RussianCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\SlovakCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\SpanishCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\TurkmenCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\TurkishCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\UkrainianCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\FrenchCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\YorubaCurrencyTransformer;
use CleverEggDigital\NumberToWords\CurrencyTransformer\AlbanianCurrencyTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\BulgarianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\CzechNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\DanishNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\DutchNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\EnglishNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\EstonianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\FrenchBelgianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\FrenchNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\GeorgianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\GermanNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\HungarianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\IndonesianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\ItalianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\LatvianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\LithuanianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\MalayNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\PersianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\PolishNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\NumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\PortugueseBrazilianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\RomanianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\RussianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\SlovakNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\SpanishNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\SwedishNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\TurkishNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\TurkmenNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\UkrainianNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\YorubaNumberTransformer;
use CleverEggDigital\NumberToWords\NumberTransformer\AlbanianNumberTransformer;

class BaseClass
{
    private array $numberTransformers = [
        'al' => AlbanianNumberTransformer::class,
        'bg' => BulgarianNumberTransformer::class,
        'cs' => CzechNumberTransformer::class,
        'de' => GermanNumberTransformer::class,
        'dk' => DanishNumberTransformer::class,
        'en' => EnglishNumberTransformer::class,
        'es' => SpanishNumberTransformer::class,
        'et' => EstonianNumberTransformer::class,
        'fa' => PersianNumberTransformer::class,
        'fr' => FrenchNumberTransformer::class,
        'fr_BE' => FrenchBelgianNumberTransformer::class,
        'hu' => HungarianNumberTransformer::class,
        'id' => IndonesianNumberTransformer::class,
        'it' => ItalianNumberTransformer::class,
        'ka' => GeorgianNumberTransformer::class,
        'lt' => LithuanianNumberTransformer::class,
        'lv' => LatvianNumberTransformer::class,
        'ms' => MalayNumberTransformer::class,
        'nl' => DutchNumberTransformer::class,
        'pl' => PolishNumberTransformer::class,
        'pt_BR' => PortugueseBrazilianNumberTransformer::class,
        'ro' => RomanianNumberTransformer::class,
        'ru' => RussianNumberTransformer::class,
        'sk' => SlovakNumberTransformer::class,
        'sv' => SwedishNumberTransformer::class,
        'tk' => TurkmenNumberTransformer::class,
        'tr' => TurkishNumberTransformer::class,
        'ua' => UkrainianNumberTransformer::class,
        'yo' => YorubaNumberTransformer::class,
    ];

    private array $currencyTransformers = [
        'al' => AlbanianCurrencyTransformer::class,
        'de' => GermanCurrencyTransformer::class,
        'dk' => DanishCurrencyTransformer::class,
        'en' => EnglishCurrencyTransformer::class,
        'es' => SpanishCurrencyTransformer::class,
        'fr' => FrenchCurrencyTransformer::class,
        'hu' => HungarianCurrencyTransformer::class,
        'ka' => GeorgianCurrencyTransformer::class,
        'lt' => LithuanianCurrencyTransformer::class,
        'lv' => LatvianCurrencyTransformer::class,
        'pl' => PolishCurrencyTransformer::class,
        'pt_BR' => PortugueseBrazilianCurrencyTransformer::class,
        'ro' => RomanianCurrencyTransformer::class,
        'ru' => RussianCurrencyTransformer::class,
        'sk' => SlovakCurrencyTransformer::class,
        'tk' => TurkmenCurrencyTransformer::class,
        'tr' => TurkishCurrencyTransformer::class,
        'ua' => UkrainianCurrencyTransformer::class,
        'yo' => YorubaCurrencyTransformer::class
    ];

    public function getNumberTransformer(string $language): NumberTransformer
    {
        if (!array_key_exists($language, $this->numberTransformers)) {
            throw new \InvalidArgumentException(sprintf(
                'Number transformer for "%s" language is not implemented.',
                $language
            ));
        }

        return new $this->numberTransformers[$language];
    }

    public function getCurrencyTransformer(string $language): CurrencyTransformer
    {
        if (!array_key_exists($language, $this->currencyTransformers)) {
            throw new \InvalidArgumentException(sprintf(
                'Currency transformer for "%s" language is not implemented.',
                $language
            ));
        }

        return new $this->currencyTransformers[$language];
    }
}
