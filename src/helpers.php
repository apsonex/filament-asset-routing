<?php

if (!function_exists('filament_asset_route')) {
    function filament_asset_route(string $filePath, string $serviceProviderClass): string
    {
        return \Apsonex\FilamentAssetRouting\FilamentAssetRouting::url($filePath, $serviceProviderClass);
    }
}


if (!function_exists('filament_asset_route_auth')) {
    function filament_asset_route_auth(string $filePath, string $serviceProviderClass): string
    {
        return \Apsonex\FilamentAssetRouting\FilamentAssetRouting::authUrl($filePath, $serviceProviderClass);
    }
}
