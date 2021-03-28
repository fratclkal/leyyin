<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;


Route::get('/', function () {
    return view('front.index');
});

Route::middleware(['auth:sanctum', 'verified'])->/*get('/dashboard', function ()*/ group( function() {
    Route::get('/dashboard', [App\Http\Controllers\panel\AdminController::class, 'index'])->name('firat.index');

    Route::group(['prefix' => 'dashboard'], function () {
/*
        Route::get('/panel/menu', [App\Http\Controllers\panel\AdminController::class, 'menu']);
        Route::post('/panel/menu', [App\Http\Controllers\panel\AdminController::class, 'createMenu'])->name('menu');
        Route::get('/panel/menuler', [App\Http\Controllers\panel\AdminController::class, 'listMenu'])->name('menu-list');
        Route::get('/panel/menu/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteMenu']);
        Route::post('/panel/menu/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteMenu'])->name('delete');
        Route::get('/panel/menu/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateShow']);
        Route::post('/panel/menu/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateMenu'])->name('update');
*/
//İletişim (Contact)

        Route::get('/iletisim', [App\Http\Controllers\panel\AdminController::class, 'contact']);
        Route::post('/iletisim', [App\Http\Controllers\panel\AdminController::class, 'createContact'])->name('contact');
        Route::get('/iletisim/bilgi', [App\Http\Controllers\panel\AdminController::class, 'listContact'])->name('contact-list');
        Route::post('/iletisim/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateContact'])->name('update-contact');
        Route::get('/iletisim/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateshowContact']);

//Slider Fotoğraf

        Route::get('/slider', [App\Http\Controllers\panel\AdminController::class, 'slider']);
        Route::post('/slider', [App\Http\Controllers\panel\AdminController::class, 'createSlider'])->name('slider');
        Route::get('/slider/bilgi', [App\Http\Controllers\panel\AdminController::class, 'listSlider'])->name('slider-list');
        Route::post('/slider/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateSlider'])->name('slider-update');
        Route::get('/slider/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateshowSlider']);
        Route::get('/slider/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteSlider']);
        Route::post('/slider/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteSlider'])->name('slider-delete');

//Hakkımızda

        Route::get('/hakkimizda', [App\Http\Controllers\panel\AdminController::class, 'about']);
        Route::post('/hakkimizda', [App\Http\Controllers\panel\AdminController::class, 'createAbout'])->name('about');
        Route::get('/hakkimizda/bilgi', [App\Http\Controllers\panel\AdminController::class, 'listAbout'])->name('about-list');
        Route::post('/hakkimizda/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateAbout'])->name('about-update');
        Route::get('/hakkimizda/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateshowAbout']);

//Ürünler

        Route::get('/urun', [App\Http\Controllers\panel\AdminController::class, 'product']);
        Route::post('/urun', [App\Http\Controllers\panel\AdminController::class, 'createProduct'])->name('product');
        Route::get('/urun/bilgi', [App\Http\Controllers\panel\AdminController::class, 'listProduct'])->name('product-list');
        Route::get('/urun/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteProduct']);
        Route::post('/urun/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteProduct'])->name('product-delete');
        Route::post('/urun/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateProduct'])->name('product-update');
        Route::get('/urun/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateshowProduct']);
/*
//minislider

        Route::get('/minislider', [App\Http\Controllers\panel\AdminController::class, 'miniSlider']);
        Route::post('/minislider', [App\Http\Controllers\panel\AdminController::class, 'createMiniSlider'])->name('minislider');
        Route::get('/minislider/bilgi', [App\Http\Controllers\panel\AdminController::class, 'listMiniSlider'])->name('minislider-list');
        Route::post('/minislider/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateMiniSlider'])->name('minislider-update');
        Route::get('/minislider/guncelle/{id}', [\App\Http\Controllers\panel\AdminController::class, 'showMiniSlider']);
        Route::get('/minislider/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteMiniSlider']);
        Route::post('/minislider/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteMiniSlider'])->name('minislider-delete');
*/
    });

});



//Front

Route::get('/urun',[App\Http\Controllers\front\FrontController::class,'products'])->name('urun');
Route::get('/iletisim',[App\Http\Controllers\front\FrontController::class,'contact'])->name('iletisimler');
Route::get('/kurumsal',[App\Http\Controllers\front\FrontController::class,'about'])->name('kurumsal');
Route::get('/detay/{id}',[App\Http\Controllers\front\FrontController::class,'products_detail'])->name('detay');
Route::get('/',[App\Http\Controllers\front\FrontController::class,'slider'])->name('sliderdeneme');
