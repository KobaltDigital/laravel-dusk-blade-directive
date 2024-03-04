# Adds a blade directive to easily add dusk attributes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kobaltdigital/laravel-dusk-blade-directive.svg?style=flat-square)](https://packagist.org/packages/kobaltdigital/laravel-dusk-blade-directive)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kobaltdigital/laravel-dusk-blade-directive/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kobaltdigital/laravel-dusk-blade-directive/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kobaltdigital/laravel-dusk-blade-directive/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kobaltdigital/laravel-dusk-blade-directive/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kobaltdigital/laravel-dusk-blade-directive.svg?style=flat-square)](https://packagist.org/packages/kobaltdigital/laravel-dusk-blade-directive)

Easily add dusk atributes with a Blade directive. You can specify on wehich environments the attribute is rendered.

## Installation

You can install the package via composer:

```bash
composer require kobaltdigital/laravel-dusk-blade-directive
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-dusk-blade-directive-config"
```

## Usage

```html
<button type="submit" @dusk('save-button') />
```
Results in:
```html
 <button type="submit" dusk="save-button" />
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

- [Arne van Hoorn](https://github.com/KobaltDigital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
