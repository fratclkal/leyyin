<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Menu

Route::get('/panel',[App\Http\Controllers\panel\AdminController::class,'index']);
Route::get('/panel/menu',[App\Http\Controllers\panel\AdminController::class,'menu']);
Route::post('/panel/menu',[App\Http\Controllers\panel\AdminController::class,'createMenu'])->name('menu');
Route::get('/panel/menuler',[App\Http\Controllers\panel\AdminController::class,'listMenu'])->name('menu-list');
Route::get('/panel/menu/sil/{id}',[App\Http\Controllers\panel\AdminController::class,'deleteMenu']);
Route::post('/panel/menu/sil/{id}',[App\Http\Controllers\panel\AdminController::class,'deleteMenu'])->name('delete');
Route::get('/panel/menu/guncelle/{id}',[App\Http\Controllers\panel\AdminController::class,'updateShow']);
Route::post('/panel/menu/guncelle/{id}',[App\Http\Controllers\panel\AdminController::class,'updateMenu'])->name('update');

//İletişim (Contact)

Route::get('/panel/iletisim',[App\Http\Controllers\panel\AdminController::class,'contact']);
Route::post('/panel/iletisim',[App\Http\Controllers\panel\AdminController::class,'createContact'])->name('contact');
Route::get('/panel/iletisim/bilgi',[App\Http\Controllers\panel\AdminController::class,'listContact'])->name('contact-list');
Route::post('panel/iletisim/guncelle/{id}',[App\Http\Controllers\panel\AdminController::class,'updateContact'])->name('update-contact');
Route::get('/panel/iletisim/guncelle/{id}',[App\Http\Controllers\panel\AdminController::class,'updateshowContact']);

//Slider Fotoğraf

Route::get('/panel/slider',[App\Http\Controllers\panel\AdminController::class,'slider']);
Route::post('/panel/slider',[App\Http\Controllers\panel\AdminController::class,'createSlider'])->name('slider');
Route::get('/panel/slider/bilgi',[App\Http\Controllers\panel\AdminController::class,'listSlider'])->name('slider-list');
Route::post('/panel/slider/guncelle/{id}',[App\Http\Controllers\panel\AdminController::class,'updateSlider'])->name('slider-update');
Route::get('/panel/slider/guncelle/{id}',[App\Http\Controllers\panel\AdminController::class,'updateshowSlider']);
Route::get('/panel/slider/sil/{id}',[App\Http\Controllers\panel\AdminController::class,'deleteSlider']);
Route::post('/panel/slider/sil/{id}',[App\Http\Controllers\panel\AdminController::class,'deleteSlider'])->name('slider-delete');

//Hakkımızda

Route::get('/panel/hakkimizda',[App\Http\Controllers\panel\AdminController::class,'about']);
Route::post('/panel/hakkimizda',[App\Http\Controllers\panel\AdminController::class,'createAbout'])->name('about');
Route::get('/panel/hakkimizda/bilgi',[App\Http\Controllers\panel\AdminController::class,'listAbout'])->name('about-list');
Route::post('/panel/hakkimizda/guncelle/{id}',[App\Http\Controllers\panel\AdminController::class,'updateAbout'])->name('about-update');
Route::get('/panel/hakkimizda/guncelle/{id}',[App\Http\Controllers\panel\AdminController::class,'updateshowAbout']);

//Ürünler

Route::get('/panel/urun',[App\Http\Controllers\panel\AdminController::class,'product']);
Route::post('/panel/urun',[App\Http\Controllers\panel\AdminController::class,'createProduct'])->name('product');
Route::get('/panel/urun/bilgi',[App\Http\Controllers\panel\AdminController::class,'listProduct'])->name('product-list');
Route::get('/panel/urun/sil/{id}',[App\Http\Controllers\panel\AdminController::class,'deleteProduct']);
Route::post('/panel/urun/sil/{id}',[App\Http\Controllers\panel\AdminController::class,'deleteProduct'])->name('product-delete');
Route::post('/panel/urun/guncelle/{id}',[App\Http\Controllers\panel\AdminController::class,'updateProduct'])->name('product-update');
Route::get('/panel/urun/guncelle/{id}',[App\Http\Controllers\panel\AdminController::class,'updateshowProduct']);

//Front

Route::get('/leyyin/anasayfa',[App\Http\Controllers\front\ProductController::class,'index'])->name('index');
Route::get('leyyin/iletisim',[App\Http\Controllers\front\ProductController::class,'contact']);
Route::get('/leyyin/anasayfa/{id}',[App\Http\Controllers\front\ProductController::class,'deneme'])->name('deneme');
Route::get('/leyyin/menu',[App\Http\Controllers\front\ProductController::class,'menublade'])->name('menu-blade');



Route::get('/anasayfa',[App\Http\Controllers\front\FrontController::class,'index']);
