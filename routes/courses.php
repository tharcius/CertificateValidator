<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Course\CreateController as CourseCreate;
use App\Http\Controllers\Course\DestroyController as CourseDestroy;
use App\Http\Controllers\Course\IndexController as CourseIndex;
use App\Http\Controllers\Course\ShowController as CourseShow;
use App\Http\Controllers\Course\UpdateController as CourseUpdate;

Route::get('/', CourseIndex::class);
Route::post('/', CourseCreate::class);
Route::get('/{courseId}', CourseShow::class);
Route::patch('/{courseId}', CourseUpdate::class);
Route::delete('/{courseId}', CourseDestroy::class);
