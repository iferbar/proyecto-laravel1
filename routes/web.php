<?php


use App\Http\Controllers\CrudController;
use App\Http\Controllers\MainController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/', [MainController::class, 'index'])->name('main');


//Route::view("/","main" )->name("main");
Route::view("noticias","noticias" )->name("noticias");
Route::view("about","about" )->name("about");



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

Route::middleware('auth')->group(function () {

//Route::resource("projects",ProjectController::class)->middleware('auth');
//Route::resource("teachers",TeacherController::class)->middleware('auth');
//Route::resource("students",StudentController::class)->middleware('auth');
//Route::resource("users",UsersController::class)->middleware('auth');
//Route::resource("{resource}",CrudController::class)->middleware('auth');

    Route::get("{resource}", [CrudController::class, "index"])->name("crud.index");//Listado
//Crear un recurso
    Route::get("{resource}/create", [CrudController::class, "create"])->name("crud.create");
    Route::post("{resource}", [CrudController::class, "store"])->name("crud.store");
//Borrado
    Route::delete("{resource}/{id}", [CrudController::class, "destroy"])->name("crud.destroy");
//Actualizacion
    Route::get("{resource}/{id}/edit", [CrudController::class, "edit"])->name("crud.edit");
    Route::put("{resource}/{id}", [CrudController::class, "update"])->name("crud.update");
});
