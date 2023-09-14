<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/apsonex-filament-assets/{packageName}/{fileName}',
    fn (string $packageName, string $fileName) => \Apsonex\FilamentAssetRouting\FilamentAssetRouting::fileResponse($packageName, $fileName)
)->name('apsonex-filament-asset.get-file');

Route::get(
    '/apsonex-filament-assets-auth/{packageName}/{fileName}',
    fn (string $packageName, string $fileName) => \Apsonex\FilamentAssetRouting\FilamentAssetRouting::fileResponse($packageName, $fileName)
)->name('apsonex-filament-asset.auth.get-file')->middleware(['auth']);
