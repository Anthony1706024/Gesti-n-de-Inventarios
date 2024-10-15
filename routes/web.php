<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/productos', function () {
    return view('productos'); // Asegúrate de que 'productos' coincide con el nombre del archivo sin la extensión
});

Route::get('/insumos', function () {
    return view('insumos'); // Asegúrate de que 'insumos' coincide con el nombre del archivo sin la extensión
});

require __DIR__.'/auth.php';
