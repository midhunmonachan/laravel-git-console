# Laravel Git Console

A Laravel package providing a terminal UI for Git and Git Flow commands. It simplifies branch, release, and hotfix management, adhering to the Git Flow workflow. Ideal for both Git beginners and seasoned users.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/midhun/laravel-git-console.svg?style=flat-square)](https://packagist.org/packages/midhun/laravel-git-console)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/midhunmonachan/laravel-git-console/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/midhunmonachan/laravel-git-console/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/midhunmonachan/laravel-git-console/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/midhunmonachan/laravel-git-console/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/midhun/laravel-git-console.svg?style=flat-square)](https://packagist.org/packages/midhun/laravel-git-console)

## Installation

> [!CAUTION]
> This package is under early stages of development. Using this package is not recommended

You can install the package via composer:

```bash
composer require midhun/laravel-git-console
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="git-console-config"
```

This is the contents of the published config file:

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Console Command Signature
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default console command signature used by
    | midhun/laravel-git-console package. The default is "git".
    |
    */

    'signature' => 'git',
];
```

## Usage

```php

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

- [Midhun Monachan](https://github.com/midhunmonachan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
