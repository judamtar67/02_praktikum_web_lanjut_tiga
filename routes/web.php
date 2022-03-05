<?php

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

Route::redirect('/', 'https://www.educastudio.com/');

Route::prefix('category')->group(function () {
    Route::redirect('/edu-games', 'https://www.educastudio.com/category/marbel-edu-games');
    Route::redirect('/kids-games', 'https://www.educastudio.com/category/marbel-and-friends-kids-games');
    Route::redirect('/story-books', 'https://www.educastudio.com/category/riri-story-books');
    Route::redirect('/kids-songs', 'https://www.educastudio.com/category/kolak-kids-songs');
});

Route::get('/news/{id}', function () {
    return redirect()->route('News');
});
Route::get('/newscovid/{id}', function ($id) {
    return redirect()->route('News2');
});

Route::redirect('/redirect-1', 'https://www.educastudio.com/news')->name('News');
Route::redirect('/redirect-2', 'https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19')
->name('News2');

Route::prefix('program')->group(function () {
    Route::redirect('/karir', 'https://www.educastudio.com/program/karir');
    Route::redirect('/magang', 'https://www.educastudio.com/program/magang');
    Route::redirect('/kunjungan', 'https://www.educastudio.com/program/kunjungan-industri');
});

Route::redirect('about-us', 'https://www.educastudio.com/about-us');

Route::resource('contact', App\Http\Controllers\ContactController::class)->only([
    'index'
]);
Route::redirect('/redirect-3', 'https://www.educastudio.com/contact-us')->name('Contact');