<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ChildcategorieController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SmtpController;
use App\Http\Controllers\Admin\SubcategorieController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\IsAdmin;
// use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'adminLogin'])->name('login');
    Route::middleware(['auth', IsAdmin::class])->group(function(){
        Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
        Route::get('/logout', [AdminHomeController::class, 'logout'])->name('logout');
        Route::get('/password/change', [AdminHomeController::class, 'passwordChange'])->name('password.change');
        Route::post('/password/update', [AdminHomeController::class, 'passwordUpdate'])->name('password.update');
    });
});

Route::middleware(['auth', IsAdmin::class])->group(function() {
    Route::resource('category', CategorieController::class)->except(['show', 'create']);
    Route::resource('subcategory', SubcategorieController::class)->except(['show', 'create']);
    Route::resource('childcategory', ChildcategorieController::class)->except(['show', 'create']);
    Route::resource('contacts', ContactController::class);
    // Route::resource('articles', ArticleController::class);
    Route::resource('article', ArticleController::class)->except(['show', 'create']);
    Route::resource('brand', BrandController::class)->except(['show', 'create']);
    // Route::resource('warehouse', WarehouseController::class)->except(['show', 'create']);
    Route::resource('coupon', CouponController::class)->except(['show', 'create']);
    //Setting Route
    Route::prefix('setting')->group(function () {
        Route::resource('seo', SeoController::class)->only(['index', 'update']);
        Route::resource('smtp', SmtpController::class)->only(['index', 'update']);
        Route::resource('website', SettingController::class)->only(['index', 'update']);  
        Route::resource('page', PageController::class);  
    });

    
});