# Laravel Spanish Language Pack

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thelimonazo/laravel-spanish-lang.svg?style=flat-square)](https://packagist.org/packages/thelimonazo/laravel-spanish-lang)
[![Total Downloads](https://img.shields.io/packagist/dt/thelimonazo/laravel-spanish-lang.svg?style=flat-square)](https://packagist.org/packages/thelimonazo/laravel-spanish-lang)
[![License](https://img.shields.io/packagist/l/thelimonazo/laravel-spanish-lang.svg?style=flat-square)](https://packagist.org/packages/thelimonazo/laravel-spanish-lang)

A Spanish language pack for Laravel applications.

## Installation

You can install the package via Composer:

```bash
composer require thelimonazo/laravel-spanish-lang
```

## Usage

After installation, run the following command to publish the language files. 

```bash
php artisan vendor:publish --tag=laravel-lang-spanish
```

The language files will be available in the `lang/es` directory. To use the Spanish language in your Laravel application, update the `locale` setting in your `config/app.php` file:

```php
'locale' => 'es',
```

or `.env` file:

```bash
APP_LOCALE=es
```

## Contributing

Contributions are welcome! Please submit a pull request or open an issue if you find any errors or have suggestions for improvement.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).

## Credits

- [Limón 🍋](https://github.com/thelimonazo)

---
Made with ❤️ for Laravel developers.