<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Students\CreateController as StudentCreate;
use App\Http\Controllers\Students\DestroyController as StudentDestroy;
use App\Http\Controllers\Students\IndexController as StudentIndex;
use App\Http\Controllers\Students\UpdateController as StudentUpdate;
use App\Http\Controllers\Students\ShowController as StudentShow;

Route::get('/', StudentIndex::class);
Route::post('/', StudentCreate::class);
Route::get('/{studentId}', StudentShow::class);
Route::patch('/{studentId}', StudentUpdate::class);
Route::delete('/{studentId}', StudentDestroy::class);
