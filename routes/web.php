<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'form'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->middleware('throttle:6,1');

    Route::middleware('auth')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::redirect('/', '/admin/settings');

        Route::get('settings', [SettingsController::class, 'edit'])->name('admin.settings');
        Route::post('settings', [SettingsController::class, 'update']);
        Route::post('account', [SettingsController::class, 'account'])->name('admin.account');

        Route::get('sections', [SectionController::class, 'edit'])->name('admin.sections');
        Route::post('sections', [SectionController::class, 'update']);

        Route::get('images', [ImageController::class, 'edit'])->name('admin.images');
        Route::post('images', [ImageController::class, 'update']);

        Route::get('gallery', [GalleryController::class, 'index'])->name('admin.gallery');
        Route::post('gallery', [GalleryController::class, 'store']);
        Route::get('gallery/{category}', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
        Route::post('gallery/{category}', [GalleryController::class, 'update']);
        Route::post('gallery/{category}/photos', [GalleryController::class, 'addPhotos'])->name('admin.gallery.photos');
        Route::delete('gallery/{category}/photos/{photo}', [GalleryController::class, 'deletePhoto'])->name('admin.gallery.photo.delete');
        Route::delete('gallery/{category}', [GalleryController::class, 'destroy'])->name('admin.gallery.delete');
    });
});
