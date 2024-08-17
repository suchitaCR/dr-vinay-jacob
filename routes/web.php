<?php

use App\Http\Controllers\ContactController;
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

 Route::get('/clear',function(){
        //\Artisan::call('key:generate');
        \Artisan::call('route:clear');
        \Artisan::call('cache:clear');
    });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-dr-vinay-jacob', function () {
    return view('about');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery/result-gallery', function () {
    return view('result-gallery');
})->name('result-gallery');

Route::get('/gallery/clinic-images', function () {
    return view('clinic-images');
})->name('clinic-images');

Route::get('/services-we-offer', function () {
    return view('services');
})->name('services');

Route::get('/treatments/face/rhinoplasty', function () {
    return view('rhinoplasty');
})->name('rhinoplasty');

Route::get('/treatments/breast/gynecomastia', function () {
    return view('gynecomastia');
})->name('gynecomastia');

Route::get('/treatments/body/tummy-tuck', function () {
    return view('tummy-tuck');
})->name('tummy-tuck');

Route::get('/treatments/body/liposuction', function () {
    return view('liposuction');
})->name('liposuction');

Route::get('/treatments/face/face-lift', function () {
    return view('face-lift');
})->name('face-lift');

Route::get('/treatments/breast/breast-lift', function () {
    return view('breast-lift');
})->name('breast-lift');

Route::get('/treatments/breast/breast-reduction', function () {
    return view('breast-reduction');
})->name('breast-reduction');

Route::get('/treatments/breast/breast-implant', function () {
    return view('breast-implant');
})->name('breast-implant');

Route::get('/treatments/face/jaw-line-correction', function () {
    return view('jaw-line-correction');
})->name('jaw-line-correction');