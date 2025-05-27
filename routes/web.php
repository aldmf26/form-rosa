<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PermissionRoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail/{nomor}', [PendaftaranController::class, 'detail'])->name('detail');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::group(['prefix' => 'components', 'as' => 'components.'], function () {
        Route::get('/alert', function () {
            return view('admin.component.alert');
        })->name('alert');
        Route::get('/accordion', function () {
            return view('admin.component.accordion');
        })->name('accordion');
    });

    Route::group(['middleware' => ['role:presiden']], function () {
        Route::controller(UserController::class)
            ->prefix('user')
            ->name('user.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/', 'store')->name('store');
                Route::get('/absen', 'absen')->name('absen');
                Route::post('/update', 'update')->name('update');
                Route::get('/hapus/{id}', 'destroy')->name('hapus');

            });
        Route::controller(PermissionRoleController::class)
            ->prefix('permission')
            ->name('permission.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/', 'store')->name('store');
                Route::post('/update', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
            });
    });

    Route::group(['middleware' => ['role:presiden|admin']], function () {

        Route::controller(PendaftaranController::class)
            ->prefix('pendaftaran')
            ->name('pendaftaran.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/', 'store')->name('store');
                Route::delete('/destroy/{id}', 'destroy')->name('destroy');
                Route::get('/export', 'export')->name('export');

            });
    });
});

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest'])
    ->name('register_baru');
