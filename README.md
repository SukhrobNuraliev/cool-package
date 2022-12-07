# This is my cool-package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sukhrobnuraliev/cool-package.svg?style=flat-square)](https://packagist.org/packages/sukhrobnuraliev/cool-package)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sukhrobnuraliev/cool-package/run-tests?label=tests)](https://github.com/sukhrobnuraliev/cool-package/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sukhrobnuraliev/cool-package/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/sukhrobnuraliev/cool-package/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sukhrobnuraliev/cool-package.svg?style=flat-square)](https://packagist.org/packages/sukhrobnuraliev/cool-package)

My cool example package

## Installation

You can install the package via composer:

```bash
composer require sukhrobnuraliev/cool-package
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="cool-package-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="cool-package-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="cool-package-views"
```

## Usage

```php
$coolPackage = new Sukhrob\CoolPackage();
echo $coolPackage->echoPhrase('Hello, Sukhrob!');
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

- [Sukhrob Nuraliev](https://github.com/sukhrobnuraliev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
