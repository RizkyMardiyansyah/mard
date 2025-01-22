<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\paymentController;
use App\Models\template;

// Route::get('/', function () {
//     return view('home');
// });



// Route::get('/', function () {
    
//     $templates = template::paginate(9); // Ambil data dari database
//     return view('home', compact('templates'));
// });

// Rute untuk halaman home
Route::get('/', [DomainController::class, 'index'])->name('home');
Route::get('/website', [DomainController::class, 'index'])->name('website');
Route::post('/website', [DomainController::class, 'index'])->name('website');
Route::get('/subscription', [DomainController::class, 'index'])->name('subscription');
Route::get('/cart', [DomainController::class, 'index'])->name('cart');
Route::get('/payment/{snapKey}', [paymentController::class, 'index'])->name('payment');
Route::get('/finish/{snapKey}', [paymentController::class, 'index'])->name('finish');


// // Rute untuk halaman domain-check
// Route::get('/web', [DomainController::class, 'index'])->name('domain-check');

// // Rute pencarian template
// Route::post('/search', [DomainController::class, 'index'])->name('searchtemplate');

Route::get('/orderEmail', [paymentController::class, 'sendEmail']);


Route::get('/web', [DomainController::class, 'index']);
Route::post('/check-domain', [DomainController::class, 'checkDomain'])->name('check.domain');
Route::post('/search', [DomainController::class, 'index'])->name('searchtemplate');

Route::get('/dev', function () {return view('developmet');});
Route::get('/iot', function () {return view('iot');});
Route::get('/contact', function () {return view('contact');});

Route::post('/orderstore', [DomainController::class, 'store'])->name('orderstore');
Route::get('/update-status', [paymentController::class, 'updateStatus'])->name('updateStatus');
Route::get('/templates', [DomainController::class, 'index'])->name('templates.index');



Route::get('/brand', function () {
    return view('brand');
})->name('brand');


Route::post('/contact', [ContactController::class, 'store'])->name('contactStore');

Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});




