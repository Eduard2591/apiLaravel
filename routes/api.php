<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//CRUD categories
Route::get('hello', [CategoryController::class, 'hello']);
Route::get('category', [CategoryController::class, 'firstCategory']);
Route::post('category/store', [CategoryController::class, 'store']);
Route::put('category/{id}/update', [CategoryController::class, 'update']);
Route::delete('category/{id}/destroy', [CategoryController::class, 'destroy']);

//CRUD posts
Route::get('hello1', [PostController::class, 'hello1']);
Route::get('post', [PostController::class, 'firstPost']);
Route::post('post/store1', [PostController::class, 'store1']);

Route::put('post/{id}/update1', [PostController::class, 'update1']);
Route::delete('post/{id}/destroy1', [PostController::class, 'destroy1']);