# Laravel Facade to convert from numbers to human readable text

[![Total Downloads](https://img.shields.io/packagist/dt/oliversarfas/number-to-words.svg?style=flat-square)](https://packagist.org/packages/cleveregg-digital/number-to-words)

PHP 8.x and Laravel Wrapper for [kwn/number-to-words](https://github.com/kwn/number-to-words)
 
## Installation

You can install the package via composer:

```bash
composer require cleveregg-digital/number-to-words
```

## Usage

To convert your number to words, simply call the static function on the `NumberToWords` facade.

```php
\NumberToWords::toWords(5120); // outputs "five thousand one hundred twenty"
```

If you'd like to change the language, add the RFC 3066 language identifier in as a parameter.

```php
\NumberToWords::toWords(5120, 'es'); // outputs "cinco mil ciento veinte"
```

To add currency, supply the ISO 4217 currency identifier


```php
\NumberToWords::toWords(512000, 'en', 'USD'); // outputs "five thousand one hundred twenty dollars"
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email oliver@cleveregg.io instead of using the issue tracker.

## Credits

- [Oliver Sarfas](https://github.com/oliversarfas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
