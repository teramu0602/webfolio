<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebfolioController;

// 1. トップページ（/）を main ビューに変更
Route::get('/', function () {
    return view('main');
});

// 2. 各ページを /xxx の形で定義（prefixを外す）
Route::get('/introduction', [WebfolioController::class, 'introduction'])->name('webfolio.introduction');
Route::get('/company', [WebfolioController::class, 'company'])->name('webfolio.company');
Route::get('/contact', [WebfolioController::class, 'contact'])->name('webfolio.contact');
Route::get('/recruit', [WebfolioController::class, 'recruit'])->name('webfolio.recruit');
Route::get('/news', [WebfolioController::class, 'news'])->name('webfolio.news');
Route::get('/about', [WebfolioController::class, 'about'])->name('webfolio.about');
Route::get('/insight', [WebfolioController::class, 'insight'])->name('webfolio.insight');
Route::get('/expert', [WebfolioController::class, 'expert'])->name('webfolio.expert');
Route::get('/privacy', [WebfolioController::class, 'privacy'])->name('webfolio.privacy');
Route::get('/security', [WebfolioController::class, 'security'])->name('webfolio.security');
Route::get('/compliance', [WebfolioController::class, 'compliance'])->name('webfolio.compliance');

// ※ もし以前の /webfolio というURLを残しておきたい場合は、リダイレクトを設定することも可能です。