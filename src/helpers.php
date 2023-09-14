<?php

use Apsonex\FilamentAssetRouting\Facades\FilamentAssetRouting;

if (! function_exists('filament_asset_route')) {
    function filament_asset_route(string $filePath, string $serviceProviderClass): string
    {
        return FilamentAssetRouting::url($filePath, $serviceProviderClass);
    }
}

if (! function_exists('filament_asset_route_auth')) {
    function filament_asset_route_auth(string $filePath, string $serviceProviderClass): string
    {
        return FilamentAssetRouting::authUrl($filePath, $serviceProviderClass);
    }
}
