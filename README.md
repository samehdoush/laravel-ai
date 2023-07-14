# Compilation of several AI tools such as: openAi + google

[![Latest Version on Packagist](https://img.shields.io/packagist/v/samehdoush/laravel-ai.svg?style=flat-square)](https://packagist.org/packages/samehdoush/laravel-ai)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/samehdoush/laravel-ai/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/samehdoush/laravel-ai/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/samehdoush/laravel-ai/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/samehdoush/laravel-ai/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/samehdoush/laravel-ai.svg?style=flat-square)](https://packagist.org/packages/samehdoush/laravel-ai)

Still under development, we will build a useful system to facilitate the handling of artificial intelligence through laravel

## Support us



## Installation

You can install the package via composer:

```bash
composer require samehdoush/laravel-ai
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-ai-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-ai-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-ai-views"
```

## Usage

```php
$laravelAi = new LaravelAi\LaravelAi();
echo $laravelAi->echoPhrase('Hello, LaravelAi!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [sameh doush](https://github.com/samehdoush)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
