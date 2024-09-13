<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/customer' ,[FormController::class , 'view']);
route::get('/',[FormController::class, 'index']);
route::post('/',[FormController::class, 'store']);
route::get('/delete_record/{id}',[FormController::class , 'delete_record']);
route::get('/edit_record/{id}' ,[FormController::class , 'edit']);
route::post('update_data/{id}', [FormController::class , 'update_data']);