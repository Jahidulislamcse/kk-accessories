<?php

use App\Http\Controllers\SettingController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])
    ->middleware(['auth', 'role:admin'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/all-branches', [BranchController::class, 'userBranches'])->name('branches.user');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::patch('/', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::post('/messages/{id}/mark-read', [ContactController::class, 'markAsRead'])->name('messages.markRead');


    Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
        Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('settings/update', [SettingController::class, 'update'])->name('settings.update');

        Route::prefix('branches')->name('branches.')->controller(BranchController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{branch}/edit', 'edit')->name('edit');
            Route::put('/{branch}', 'update')->name('update');
            Route::delete('/{branch}', 'destroy')->name('destroy');

            Route::get('/{branch}/autologin', 'autologin')->name('autologin');
        });

        Route::prefix('sliders')->name('sliders.')->controller(SliderController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::put('/{slider}', 'update')->name('update');
            Route::delete('/{slider}', 'destroy')->name('destroy');
        });

        Route::get('messages', [MessageController::class, 'messages'])->name('messages');
        Route::delete('messages/{id}', [ContactController::class, 'destroy'])->name('messages.destroy');

        Route::prefix('services')->name('services.')->controller(ServiceController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::post('/{service}', 'update')->name('update');
            Route::delete('/{service}', 'destroy')->name('destroy');
        });
    });
});


require __DIR__ . '/auth.php';
