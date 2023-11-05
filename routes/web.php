<?php

use Illuminate\Http\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/api', function () {
    return [
        'data' => [
            'array' => [1, 2, 3, 4, 5],
        ],
    ];
});

Route::get('{any?}', function () {
    $file = new File(public_path() . '/index.html');
    return $file->getContent();
});
