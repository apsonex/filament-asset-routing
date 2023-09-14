<?php

namespace Apsonex\FilamentAssetRouting;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentAssetRoutingServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-asset-routing';

    public static string $viewNamespace = 'filament-asset-routing';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)->hasRoute('web');
    }

    protected function getAssetPackageName(): ?string
    {
        return 'apsonex/filament-asset-routing';
    }
}
