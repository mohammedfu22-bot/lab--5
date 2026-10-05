<?php

use App\Http\Controllers\HelloController;
use App\Models\Organization;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'أهلا بك في إبرام';
});

Route::get('/welcome', [HelloController::class, 'index']);
Route::get('/organizations', [HelloController::class, 'organizations']);
Route::get('/organizations/{slug}', [HelloController::class, 'show']);

Route::get('/whoami', function () {
    return Organization::where('domain', request()->getHost())->firstOrFail();
});