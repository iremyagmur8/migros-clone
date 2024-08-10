<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('');
});
Route::get('/', [WebController::class, 'index']);
Route::get('/search-mobile', [WebController::class, 'searchMobile']);
Route::get('/products-list', [WebController::class, 'productsList']);
Route::get('/coklu-indirimler', [WebController::class, 'discount']);
Route::get('/money-indirimli', [WebController::class, 'money']);
Route::get('/campaigns', [WebController::class, 'campaigns']);
