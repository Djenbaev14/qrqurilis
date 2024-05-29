<?php

use App\Http\Controllers\admin\AppealController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\FileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ItemController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\frontend\VirtualController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;



// login
Route::get('/login', [AuthController::class, 'index'])->name('auth.index')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');

Route::get('/virtual', [VirtualController::class,'virtual'])->name('virtual');
Route::post('/send-sms', [VirtualController::class,'sendSms'])->name('send-sms');


Route::get('/', function () {
    return view('welcome');
});




// lang
Route::get('/lang/{lang}',[LocalizationController::class,'setlang'])->name('local');

Route::group(['prefix' => 'dashboard','middleware' => 'auth'], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/', [HomeController::class,'index'])->name('dashboard.index');
    
    Route::get('/category', [CategoryController::class,'index'])->name('dashboard.category.index');

    Route::controller(MenuController::class)->prefix('menu')->group(function () {
        // index
        Route::get('/', 'index')->name('dashboard.menu.index');

        // create
        Route::get('/create', 'create')->name('dashboard.menu.create');
        Route::post('/store','store')->name('dashboard.menu.store');
        // // edit
        Route::post('/item_add', 'item_add')->name('dashboard.menu.item_add');

        // // update
        Route::post('/update/{menu}', 'update')->name('dashboard.menu.update');

        // // delete
    });

    
    
    Route::controller(ItemController::class)->prefix('page')->group(function () {
        // index
        Route::get('/', 'index')->name('dashboard.pages.index');

        // create
        Route::get('/create', 'create')->name('dashboard.pages.create');
        Route::post('/store','store')->name('dashboard.pages.store');
        // // edit
        Route::get('/edit/{page}', 'edit')->name('dashboard.pages.edit');

        // // update
        Route::post('/update/{page}', 'update')->name('dashboard.pages.update');

        // // delete
        Route::post('/post-delete/{page}', 'destroy')->name('dashboard.pages.destroy');
    });
    
    Route::controller(PostController::class)->prefix('post')->group(function () {
        // index
        Route::get('/', 'index')->name('dashboard.post.index');

        // create
        Route::get('create', 'create')->name('dashboard.post.create');
        Route::post('store','store')->name('dashboard.post.store');
        // // edit
        Route::get('/edit/{post}', 'edit')->name('dashboard.post.edit');

        // // update
        Route::post('/update/post/{post}', 'update')->name('dashboard.post.update');

        // // delete
        Route::post('/delete/{post}', 'destroy')->name('dashboard.post.destroy');
    });
    
    Route::controller(AppealController::class)->prefix('appeal')->group(function () {
        // index
        Route::get('/', 'index')->name('dashboard.appeal.index');

        // Route::get('create', 'create')->name('dashboard.post.create'
    });
    Route::controller(FileController::class)->prefix('file')->group(function () {
        // index
        Route::get('/', 'index')->name('dashboard.file.index');
        Route::post('store','store')->name('dashboard.file.store');
    });

});

Route::get('/', [\App\Http\Controllers\frontend\HomeController::class,'home'])->name('home');
Route::get('/{m}/{i}', [\App\Http\Controllers\frontend\HomeController::class,'page1'])->name('page-1');
Route::get('/{m}', [\App\Http\Controllers\frontend\HomeController::class,'page2'])->name('page-2');

Route::get('/view/news/{i}', [\App\Http\Controllers\frontend\HomeController::class,'new'])->name('new-new');
