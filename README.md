# Laravel Thumbor url helper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/datomatic/laravel-thumbor.svg?style=flat-square)](https://packagist.org/packages/datomatic/laravel-thumbor)
[![Total Downloads](https://img.shields.io/packagist/dt/datomatic/laravel-thumbor.svg?style=flat-square)](https://packagist.org/packages/datomatic/laravel-thumbor)

This [Laravel](https://laravel.com) package is a wrapper around [99designs/phumbor](https://github.com/99designs/phumbor) package which generates [Thumbor](https://thumbor.readthedocs.io/) URLs.

## Requirements

- PHP 8.2+
- Laravel 10+

## Features

- Generates Thumbor URLs

## Usage

```
echo \Thumbor::url('https://example.com/photo.jpg)->resize(160, 90)->build();
```

## Installation

Install the package in a Laravel project via Composer:

```
composer require datomatic/laravel-thumbor
```

(Optional) Publish the configuration file and edit it to your preference:

```
php artisan vendor:publish --provider="Datomatic\LaravelThumbor\ServiceProvider" --tag="config"
```

## Credits

- Based on [datomatic/laravel-thumbor](https://github.com/datomatic/laravel-thumbor)

## License

Laravel Thumbor is open-sourced software licensed under the [MIT license](LICENSE.md).
