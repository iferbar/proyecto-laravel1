<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\LangController;

Route::get('/', [MainController::class, 'index'])->name('main');


//Route::view("/","main" )->name("main");
Route::view("noticias","noticias" )->name("noticias");
Route::view("alumnos","alumnos" )->name("alumnos");
Route::view("about","about" )->name("about");

Route::get("/alumno/{numero}",fn($numero)=>view("alumno" , ["numero"=>$numero]));
Route::get("/profesor/{id}",fn($id)=>view("profesor" , ["id"=>$id]));

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::fallback(function () {
    $url = request()->path();
    return ("<h1>Esta página $url no existe</h1>");
});

Route::post("language",LangController::class)->name('lang');

Route::resource("projects",ProjectController::class)->middleware('auth');
Route::resource("teachers",TeacherController::class);
Route::resource("students",StudentController::class);
