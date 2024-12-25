<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});
Route::get('/web', [DomainController::class, 'index']);
Route::post('/check-domain', [DomainController::class, 'checkDomain'])->name('check.domain');
Route::post('/search', [DomainController::class, 'index'])->name('searchtemplate');

Route::post('/orderstore', [DomainController::class, 'store'])->name('orderstore');
Route::get('/templates', [DomainController::class, 'index'])->name('templates.index');



Route::get('/brand', function () {
    return view('brand');
})->name('brand');


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');






