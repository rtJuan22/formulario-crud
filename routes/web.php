<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('cursos/store',[CursoController::class,'store'])->name('cursos.store');
Route::get('cursos/create',[CursoController::class,'create']);
Route::get('cursos/listar',[CursoController::class,'index'])->name('cursos.index');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('cursos.show');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');

Route::resource('/clientes',ClienteController::class);