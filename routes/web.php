<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;


Route::get('/', function () {
    return view('front.index');
});

Route::middleware(['auth:sanctum', 'verified'])->/*get('/dashboard', function ()*/ group( function() {
    //Route::get('/panel', [App\Http\Controllers\panel\AdminController::class, 'index']);
    //Menu
    Route::group(['prefix' => 'firat'], function () {
        Route::get('/', [App\Http\Controllers\panel\AdminController::class, 'index']);
        Route::get('/panel/menu', [App\Http\Controllers\panel\AdminController::class, 'menu']);
        Route::post('/panel/menu', [App\Http\Controllers\panel\AdminController::class, 'createMenu'])->name('menu');
        Route::get('/panel/menuler', [App\Http\Controllers\panel\AdminController::class, 'listMenu'])->name('menu-list');
        Route::get('/panel/menu/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteMenu']);
        Route::post('/panel/menu/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteMenu'])->name('delete');
        Route::get('/panel/menu/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateShow']);
        Route::post('/panel/menu/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateMenu'])->name('update');

//İletişim (Contact)

        Route::get('/panel/iletisim', [App\Http\Controllers\panel\AdminController::class, 'contact']);
        Route::post('/panel/iletisim', [App\Http\Controllers\panel\AdminController::class, 'createContact'])->name('contact');
        Route::get('/panel/iletisim/bilgi', [App\Http\Controllers\panel\AdminController::class, 'listContact'])->name('contact-list');
        Route::post('panel/iletisim/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateContact'])->name('update-contact');
        Route::get('/panel/iletisim/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateshowContact']);

//Slider Fotoğraf

        Route::get('/panel/slider', [App\Http\Controllers\panel\AdminController::class, 'slider']);
        Route::post('/panel/slider', [App\Http\Controllers\panel\AdminController::class, 'createSlider'])->name('slider');
        Route::get('/panel/slider/bilgi', [App\Http\Controllers\panel\AdminController::class, 'listSlider'])->name('slider-list');
        Route::post('/panel/slider/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateSlider'])->name('slider-update');
        Route::get('/panel/slider/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateshowSlider']);
        Route::get('/panel/slider/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteSlider']);
        Route::post('/panel/slider/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteSlider'])->name('slider-delete');

//Hakkımızda

        Route::get('/panel/hakkimizda', [App\Http\Controllers\panel\AdminController::class, 'about']);
        Route::post('/panel/hakkimizda', [App\Http\Controllers\panel\AdminController::class, 'createAbout'])->name('about');
        Route::get('/panel/hakkimizda/bilgi', [App\Http\Controllers\panel\AdminController::class, 'listAbout'])->name('about-list');
        Route::post('/panel/hakkimizda/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateAbout'])->name('about-update');
        Route::get('/panel/hakkimizda/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateshowAbout']);

//Ürünler

        Route::get('/panel/urun', [App\Http\Controllers\panel\AdminController::class, 'product']);
        Route::post('/panel/urun', [App\Http\Controllers\panel\AdminController::class, 'createProduct'])->name('product');
        Route::get('/panel/urun/bilgi', [App\Http\Controllers\panel\AdminController::class, 'listProduct'])->name('product-list');
        Route::get('/panel/urun/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteProduct']);
        Route::post('/panel/urun/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteProduct'])->name('product-delete');
        Route::post('/panel/urun/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateProduct'])->name('product-update');
        Route::get('/panel/urun/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateshowProduct']);

//minislider

        Route::get('/panel/minislider', [App\Http\Controllers\panel\AdminController::class, 'miniSlider']);
        Route::post('/panel/minislider', [App\Http\Controllers\panel\AdminController::class, 'createMiniSlider'])->name('minislider');
        Route::get('/panel/minislider/bilgi', [App\Http\Controllers\panel\AdminController::class, 'listMiniSlider'])->name('minislider-list');
        Route::post('/panel/minislider/guncelle/{id}', [App\Http\Controllers\panel\AdminController::class, 'updateMiniSlider'])->name('minislider-update');
        Route::get('/panel/minislider/guncelle/{id}', [\App\Http\Controllers\panel\AdminController::class, 'showMiniSlider']);
        Route::get('/panel/minislider/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteMiniSlider']);
        Route::post('/panel/minislider/sil/{id}', [App\Http\Controllers\panel\AdminController::class, 'deleteMiniSlider'])->name('minislider-delete');
    });

});



//Front

Route::get('/urun',[App\Http\Controllers\front\FrontController::class,'products'])->name('urun');
Route::get('/iletisim',[App\Http\Controllers\front\FrontController::class,'contact'])->name('iletisimler');
Route::get('/kurumsal',[App\Http\Controllers\front\FrontController::class,'about'])->name('kurumsal');
Route::get('/detay/{id}',[App\Http\Controllers\front\FrontController::class,'products_detail'])->name('detay');
Route::get('/anasayfa',[App\Http\Controllers\front\FrontController::class,'slider'])->name('sliderdeneme');
