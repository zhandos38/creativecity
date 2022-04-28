<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlockController;
use App\Http\Controllers\Admin\CallRequestController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeeContactController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PointController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// LOCALIZATION PREFIX
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/get-points', [HomeController::class, 'getPoints'])->name('points');
    Route::post('save-request', [HomeController::class, 'saveRequest'])->name('save.request');


    Auth::routes([
        'register' => false, 'reset' => false
    ]);
// ADMIN
    Route::prefix('/admin')->name('admin.')->middleware(['auth'])->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::group(['prefix' => '/account', 'as' => 'account.'], function () {
            Route::get('/', [AccountController::class, 'index'])->name('index');
            Route::put('/update', [AccountController::class, 'update'])->name('update');
        });

        Route::resource('/blocks', BlockController::class);
        Route::resource('/banners', BannerController::class);
        Route::resource('/partners', PartnerController::class);
        Route::resource('/prices', PriceController::class);
        Route::resource('/employee-contacts', EmployeeContactController::class);
        Route::resource('/call-requests', CallRequestController::class)->except(['create', 'store']);
        Route::resource('/contacts', ContactController::class);
        Route::resource('/points', PointController::class);
    });

// USER
    Route::group(['middleware' => ['auth']], function () {

        // ACCOUNT
        Route::group(['prefix' => '/account', 'as' => 'accounts.'], function () {
            Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
        });


    });
});
