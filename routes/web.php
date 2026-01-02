<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebfolioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webfolio', function () {
    return view('main');
});

// Route::get('/introduction', function () {
//     return view('introduction');
// });

Route::prefix('webfolio')->group(function () {
    Route::get('/introduction', [WebfolioController::class, 'introduction'])
    ->name('webfolio.introduction');
    Route::get('/company', [WebfolioController::class, 'company'])
    ->name('webfolio.company');
    Route::get('/contact', [WebfolioController::class, 'contact'])
    ->name('webfolio.contact');
    Route::get('/recruit', [WebfolioController::class, 'recruit'])
    ->name('webfolio.recruit');
    Route::get('/news', [WebfolioController::class, 'news'])
    ->name('webfolio.news');
    Route::get('/about', [WebfolioController::class, 'about'])
    ->name('webfolio.about');
    Route::get('/insight', [WebfolioController::class, 'insight'])
    ->name('webfolio.insight');
    Route::get('/expert', [WebfolioController::class, 'expert'])
    ->name('webfolio.expert');
    Route::get('/privacy', [WebfolioController::class, 'privacy'])
    ->name('webfolio.privacy');
    Route::get('/security', [WebfolioController::class, 'security'])
    ->name('webfolio.security');
    Route::get('/compliance', [WebfolioController::class, 'compliance'])
    ->name('webfolio.compliance');
});