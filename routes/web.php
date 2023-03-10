<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\SiteController::class, 'site'])->name('site-index');

Route::get('case-study/{id}', [App\Http\Controllers\SiteController::class, 'caseStudy'])->name('case-study');

Route::get('service/{id}', [App\Http\Controllers\SiteController::class, 'service'])->name('service');
