<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
| Please make BLOG & COMMENT CRUD ROUTES
*/
Route::get('/getBlogs',[blogController::class, 'getBlogs']);
Route::get('/getBlog/{id}',[blogController::class, 'getBlog']);
Route::post('/postComment',[blogController::class, 'postComment']);
Route::put('/updateComment',[blogController::class, 'putComment']);
Route::delete('/deleteComment',[blogController::class, 'deleteComment']);