<?php

namespace Apsonex\FilamentAssetRouting;

use Illuminate\Support\Facades\File;
use ReflectionClass;

class FilamentAssetRouting
{
    public static function packageRootPath($serviceProviderClass): string
    {
        $path = (new ReflectionClass($serviceProviderClass))->getFileName();

        return explode('src', $path)[0];
    }

    public function authUrl(string $filePath, string $serviceProviderClass): string
    {
        return static::url($filePath, $serviceProviderClass, true);
    }

    public static function url(string $filePath, string $serviceProviderClass, $auth = false): string
    {
        $location = static::packageRootPath($serviceProviderClass) . ltrim($filePath, '/');

        if (!File::exists($location)) return '/404';

        return route(
            $auth ? 'apsonex-filament-asset.auth.get-file' : 'apsonex-filament-asset.get-file',
            [
                'fileName' => static::makeUrlSafe($filePath),
                'packageName' => static::makeUrlSafe($serviceProviderClass),
            ]
        ) . '?id=' . File::lastModified($location);
    }

    public static function fileResponse(string $packageName, string $fileName): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $serviceProvider = static::makeFilesystemSafe($packageName, true);

        if (!class_exists($serviceProvider)) abort(404);

        $rootPath = static::packageRootPath($serviceProvider);

        $file = $rootPath . static::makeFilesystemSafe($fileName);

        if (!file_exists($file)) abort(404);

        if (str_contains($file, '.js')) {
            return response()->file($file, [
                'Content-Type' => 'application/javascript'
            ]);
        }

        return response()->file($file);
    }

    public static function makeUrlSafe($string): string
    {
        return str(ltrim(ltrim($string, '\\'), '/'))->replace('\\', '+')->replace('/', '+')->toString();
    }

    public static function makeFilesystemSafe($string, $phpClass = false): string
    {
        return $phpClass
            ? str($string)->replace('+', '\\')->prepend('\\')->toString()
            : str($string)->replace('+', '/')->toString();
    }
}
