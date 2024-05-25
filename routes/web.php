<?php

use App\Http\Controllers\API\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['controller' => TasksController::class], function () {
//     Route::get('/task', 'index');
// });
