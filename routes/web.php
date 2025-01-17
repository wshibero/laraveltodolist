<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


Route::get('/welcome php', function () {
    return view('pages.welcome');
});

Route::get('/', function(){
    return view('pages.home');
});

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/all/items', [ItemController::class,'view_all_data']);

Route::get('/item/create form', [ItemController::class,'insertform']);

Route::post('/item/create form/new', [ItemController::class,'insert_data']);

Route::get('/item/update form/{id}', [ItemController::class,'update_data_form']);

Route::post('/item/update form/{id}/edit', [ItemController::class,'update_data']);

Route::get('/item/completed/{id}', [ItemController::class,'completed_task']);

Route::get('/item/delete/{id}', [ItemController::class,'delete_record']);
