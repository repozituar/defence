<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FikraController;
use App\Http\Controllers\MaddeController;
use App\Http\Controllers\SayfaController;
use App\Models\Sayfa;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace'=>'En'], function(){
    Route::get('/', [App\Http\Controllers\En\SayfaController::class, 'index'])->name('index_en');
    Route::get('/about', [App\Http\Controllers\En\SayfaController::class, 'about'])->name('about_en');
    Route::get('/kalekol', [App\Http\Controllers\En\SayfaController::class, 'kalekol'])->name('kalekol_en');
    Route::get('/capabilities', [App\Http\Controllers\En\SayfaController::class, 'capabilities'])->name('capabilities_en');
    Route::get('/capabilities/{slug_en}', [App\Http\Controllers\En\SayfaController::class, 'capability'])->name('capability_en');
    Route::get('/references', [App\Http\Controllers\En\SayfaController::class, 'references'])->name('references_en');
    Route::get('/news/{slug_en}', [App\Http\Controllers\En\SayfaController::class, 'news_detail'])->name('news_detail_en');
    Route::get('/contact', [App\Http\Controllers\En\SayfaController::class, 'contact'])->name('contact_en');
});

Route::group(['namespace'=>'Tr'], function(){
    Route::get('/tr', [App\Http\Controllers\Tr\SayfaController::class, 'index'])->name('index_tr');
    Route::get('/hakkimizda', [App\Http\Controllers\En\SayfaController::class, 'about'])->name('about_tr');
    Route::get('/tr/kalekol', [App\Http\Controllers\En\SayfaController::class, 'kalekol'])->name('kalekol_tr');
    Route::get('/kabiliyetlerimiz', [App\Http\Controllers\En\SayfaController::class, 'capabilities'])->name('capabilities_tr');
    Route::get('/kabiliyetlerimiz/{slug_tr}', [App\Http\Controllers\En\SayfaController::class, 'capability'])->name('capability_tr');
    Route::get('/referanslarimiz', [App\Http\Controllers\En\SayfaController::class, 'references'])->name('references_tr');
    Route::get('/haberler', [App\Http\Controllers\En\SayfaController::class, 'news'])->name('news_tr');
    Route::get('/haberler/{slug_tr}', [App\Http\Controllers\En\SayfaController::class, 'news_detail'])->name('news_detail_tr');
    Route::get('/irtibat', [App\Http\Controllers\En\SayfaController::class, 'contact'])->name('contact_tr');
});

Route::group(['namespace'=>'Ar'], function(){
    Route::get('/ar', [App\Http\Controllers\Ar\SayfaController::class, 'index'])->name('index_ar');
    Route::get('/حولنا', [App\Http\Controllers\En\SayfaController::class, 'about'])->name('about_ar');
    Route::get('/ru/kalekol', [App\Http\Controllers\En\SayfaController::class, 'kalekol'])->name('kalekol_ar');
    Route::get('/قدرات', [App\Http\Controllers\En\SayfaController::class, 'capabilities'])->name('capabilities_ar');
    Route::get('/قدرات/{slug_ar}', [App\Http\Controllers\En\SayfaController::class, 'capability'])->name('capability_ar');
    Route::get('/مراجع', [App\Http\Controllers\En\SayfaController::class, 'references'])->name('references_ar');
    Route::get('/أخبار', [App\Http\Controllers\En\SayfaController::class, 'news'])->name('news_ar');
    Route::get('/أخبار/{slug_ar}', [App\Http\Controllers\En\SayfaController::class, 'news_detail'])->name('news_detail_ar');
    Route::get('/اتصل بنا', [App\Http\Controllers\En\SayfaController::class, 'contact'])->name('contact_ar');
});

Route::group(['namespace'=>'Fr'], function(){
    Route::get('/fr', [App\Http\Controllers\Fr\SayfaController::class, 'index'])->name('index_fr');
    Route::get('/à-propos-de-nous', [App\Http\Controllers\En\SayfaController::class, 'about'])->name('about_fr');
    Route::get('/ru/kalekol', [App\Http\Controllers\En\SayfaController::class, 'kalekol'])->name('kalekol_fr');
    Route::get('/capacités', [App\Http\Controllers\En\SayfaController::class, 'capabilities'])->name('capabilities_fr');
    Route::get('/capacités/{slug_fr}', [App\Http\Controllers\En\SayfaController::class, 'capability'])->name('capability_fr');
    Route::get('/références', [App\Http\Controllers\En\SayfaController::class, 'references'])->name('references_fr');
    Route::get('/nouvelles', [App\Http\Controllers\En\SayfaController::class, 'news'])->name('news_fr');
    Route::get('/nouvelles/{slug_fr}', [App\Http\Controllers\En\SayfaController::class, 'news_detail'])->name('news_detail_fr');
    Route::get('/contactez', [App\Http\Controllers\En\SayfaController::class, 'contact'])->name('contact_fr');
});

Route::group(['namespace'=>'Ru'], function(){
    Route::get('/ru', [App\Http\Controllers\Ru\SayfaController::class, 'index'])->name('index_ru');
    Route::get('/о-нас', [App\Http\Controllers\En\SayfaController::class, 'about'])->name('about_ru');
    Route::get('/ru/kalekol', [App\Http\Controllers\En\SayfaController::class, 'kalekol'])->name('kalekol_ru');
    Route::get('/возможности', [App\Http\Controllers\En\SayfaController::class, 'capabilities'])->name('capabilities_ru');
    Route::get('/возможности/{slug_ru}', [App\Http\Controllers\En\SayfaController::class, 'capability'])->name('capability_ru');
    Route::get('/использованная-литература', [App\Http\Controllers\En\SayfaController::class, 'references'])->name('references_ru');
    Route::get('/новости', [App\Http\Controllers\En\SayfaController::class, 'news'])->name('news_ru');
    Route::get('/новости/{slug_ru}', [App\Http\Controllers\En\SayfaController::class, 'news_detail'])->name('news_detail_ru');
    Route::get('/контакт', [App\Http\Controllers\En\SayfaController::class, 'contact'])->name('contact_ru');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'idex'])->name('dashboard');
    Route::resource('/dashboard/pages', SayfaController::class);
    Route::resource('/dashboard/sections', MaddeController::class);
    Route::resource('/dashboard/snippets', FikraController::class);
});
