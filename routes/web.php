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

Route::get('/', function () {
    // $post = Sayfa::create([
    //     'slug_en'=>'about',
    //     'slug_tr'=>'hakkimizda',
    //     'slug_ar'=>'حولنا',
    //     'slug_fr'=>'À propos de nous',
    //     'slug_ru'=>'О нас',
    //     'image'=>'hero.jpg',
    //     'en'=>[
    //         'title'=>'English title',
    //         'content'=>'English content',
    //     ],
    //     'tr'=>[
    //         'title'=>'Türkçe title',
    //         'content'=>'Türkçe content',
    //     ],
    //     'ar'=>[
    //         'title'=>'Arabi title',
    //         'content'=>'Arabi content',
    //     ],
    //     'fr'=>[
    //         'title'=>'French title',
    //         'content'=>'French content',
    //     ],
    //     'ru'=>[
    //         'title'=>'Rus title',
    //         'content'=>'Ruski content',
    //     ]
    // ]);
    
    $post = Sayfa::first();
    return $post->slug_ar;
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
