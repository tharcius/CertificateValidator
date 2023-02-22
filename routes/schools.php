<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Schools\CreateController as SchoolCreate;
use App\Http\Controllers\Schools\DestroyController as SchoolDestroy;
use App\Http\Controllers\Schools\IndexController as SchoolIndex;
use App\Http\Controllers\Schools\UpdateController as SchoolUpdate;
use App\Http\Controllers\Schools\ShowController as SchoolShow;

Route::get('/', SchoolIndex::class);
Route::post('/', SchoolCreate::class);
Route::get('/{school}', SchoolShow::class);
Route::patch('/{school}', SchoolUpdate::class);
Route::delete('/{school}', SchoolDestroy::class);
