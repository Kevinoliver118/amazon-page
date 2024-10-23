<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//rutas
Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/destinos', function () {return view('page.destinos'); })->name('destinos');
Route::get('/paquetes', function () {return view('page.paquetes'); })->name('paquetes');
Route::get('/que-hacer', function () {return view('page.que-hacer'); })->name('que-hacer');
Route::get('/sobre-nosotros', function () {return view('page.sobre-nosotros'); })->name('sobre-nosotros');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
