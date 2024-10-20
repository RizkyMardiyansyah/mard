<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;

Route::get('/', function () {
    return view('home');
});
Route::redirect('/admin', '/admin/orders');
Route::get('/web', [DomainController::class, 'index']);
Route::post('/check-domain', [DomainController::class, 'checkDomain'])->name('check.domain');
Route::post('/search', [DomainController::class, 'index'])->name('searchtemplate');
