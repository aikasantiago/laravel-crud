<?php
use App\Http\Controllers\MovelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


// Route::get('/movels', [MovelController::class, 'index'])->name('movels.index');
// Route::get('/movels/create', [MovelController::class,'create'])->name('movels.create');
// Route::post('/movels', [MovelController::class, 'store'])->name('movels.store');
// Route::get('/movels/{movel}', [MovelController::class,'show'])->name('movels.show');
// Route::get('/movels/{movel}/edit', [MovelController::class,'edit'])->name('movels.edit');
// Route::put('/movels/{movel}', [MovelController::class,'update'])->name('movels.update');
// Route::delete('/movels/{movel}', [MovelController::class,'destroy'])->name('movels.destroy');
Route::resource('movels', MovelController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
