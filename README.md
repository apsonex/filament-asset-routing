# This is my package filament-asset-routing

[![Latest Version on Packagist](https://img.shields.io/packagist/v/apsonex/filament-asset-routing.svg?style=flat-square)](https://packagist.org/packages/apsonex/filament-asset-routing)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/apsonex/filament-asset-routing/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/apsonex/filament-asset-routing/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/apsonex/filament-asset-routing/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/apsonex/filament-asset-routing/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/apsonex/filament-asset-routing.svg?style=flat-square)](https://packagist.org/packages/apsonex/filament-asset-routing)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require apsonex/filament-asset-routing
```

## Usage

```php
use \Apsonex\FilamentAssetRouting\FilamentAssetRouting;
use \Apsonex\FilamentImage\FilamentImageServiceProvider;

FilamentAssetRouting::url('resources/dist/plugin.css', FilamentImageServiceProvider::class) 
// OUTOUT: https://example.com/package/filename.ext?id=file_timestamp

// Authentication will be required to access the file
FilamentAssetRouting::authUrl('resources/dist/plugin.css', FilamentImageServiceProvider::class) 
// OUTPUT: https://example.com/package/filename.ext?id=file_timestamp // authentication required

```

### Helpers functions

```php
filament_asset_route(string $filePath, string $serviceProviderClass)

// Auth will be required to access the file
filament_asset_route_auth(string $filePath, string $serviceProviderClass)
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Gurinder Chauhan](https://github.com/apsonex)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
