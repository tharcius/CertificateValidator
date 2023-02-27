<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Certificates\CreateController as CertificateCreate;
use App\Http\Controllers\Certificates\DestroyController as CertificateDestroy;
use App\Http\Controllers\Certificates\IndexController as CertificateIndex;
use App\Http\Controllers\Certificates\UpdateController as CertificateUpdate;
use App\Http\Controllers\Certificates\ShowController as CertificateShow;

Route::get('/', CertificateIndex::class);
Route::post('/', CertificateCreate::class);
Route::get('/{certificateId}', CertificateShow::class);
Route::patch('/{certificateId}', CertificateUpdate::class);
Route::delete('/{certificateId}', CertificateDestroy::class);
