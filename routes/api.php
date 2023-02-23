<?php

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/courses')->group(function () {
    require __DIR__.'/courses.php';
});

Route::prefix('/schools')->group(function () {
    require __DIR__.'/schools.php';
});

Route::prefix('/students')->group(function () {
    require __DIR__.'/students.php';
});

Route::prefix('/auth')->group(function () {
    require __DIR__.'/auth.php';
});
