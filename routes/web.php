<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PdfController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Rutas para toda la funcionalidad de productos
Route::resource('productos', ProductosController::class)->except(['show'])->middleware('auth');
Route::post('/productos', [ProductosController::class, 'store'])->name('productos.store');
Route::get('productos/{producto}/edit', 'ProductosController@edit')->name('productos.edit');
Route::delete('/productos/{id}', 'ProductoController@destroy')->name('productos.destroy');


//Rutas de generar pdf
Route::get('/productos/generate-pdf/{id}', [PdfController::class, 'generatePdf'])->name('productos.generate-pdf');
