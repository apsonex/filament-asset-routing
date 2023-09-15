# Filament asset routing

[![Latest Version on Packagist](https://img.shields.io/packagist/v/apsonex/filament-asset-routing.svg?style=flat-square)](https://packagist.org/packages/apsonex/filament-asset-routing)
[![Total Downloads](https://img.shields.io/packagist/dt/apsonex/filament-asset-routing.svg?style=flat-square)](https://packagist.org/packages/apsonex/filament-asset-routing)

Filament has built in system to [manage assets](https://filamentphp.com/docs/3.x/support/assets#the-filamentasset-facade). But for some reason i want to create a package which helps me in development also. 

## Purpose
```php
<!-- component.blade.php -->
@php
    use \Apsonex\FilamentSimpleFile\FilamentSimpleFileServiceProvider;
@endphp
<div
    ax-load
    x-load-css="[
        @js(filament_asset_route('resources/dist/plugin.css', FilamentSimpleFileServiceProvider::class)),
    ]"
    ax-load-src="{{ filament_asset_route('resources/dist/plugin.js', FilamentSimpleFileServiceProvider::class) }}"
/>
```
Above code will create links and package will serve the file as requested with updated timestamp to purge the file cache by browser.

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
