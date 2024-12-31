<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ContactController;
use App\Models\template;

// Route::get('/', function () {
//     return view('home');
// });



Route::get('/', function () {
    
    $templates = template::paginate(9); // Ambil data dari database
    return view('home', compact('templates'));
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






