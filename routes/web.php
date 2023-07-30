<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatematicaController;
use App\Http\Controllers\QuimicaController;
use App\Http\Controllers\FisicaController;

Route::get('/', function () {
    return view('auth.login');
});

// Rotas das páginas dos cursos com o middleware 'auth'
Route::middleware('auth')->group(function () {
    Route::get('nav/matematica', [MatematicaController::class, 'index']);
    Route::get('nav/quimica', [QuimicaController::class, 'index']);
    Route::get('nav/fisica', [FisicaController::class, 'index']);

    Route::get('/painelControle', function () {
        return view('painelControle');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Auth::routes();





