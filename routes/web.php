<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/welcome php', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/all/items', [ItemController::class,'view_all_data']);

Route::get('/item/create form', [ItemController::class,'insertform']);

Route::post('/item/create form/new', [ItemController::class,'insert_data']);
