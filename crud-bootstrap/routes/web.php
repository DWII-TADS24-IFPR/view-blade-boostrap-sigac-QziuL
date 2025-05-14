<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('layouts.app');
})->name('home');

// Rotas para Aluno
Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index');
Route::get('/aluno/create', [AlunoController::class, 'create'])->name('aluno.create');
Route::post('/aluno/create', [AlunoController::class, 'store'])->name('aluno.store');

// Rotas para Eixo
Route::prefix('/eixo')->group(function(){
    Route::get('/', function () {
        //
    })->name('eixo.index');

    Route::post('/', function (Request $request) {
        //
    });

    Route::get('/{id}', function ($id) {
        //
    });

    Route::put('/{id}', function (Request $request, $id) {
        //
    });

    Route::delete('/{id}', function ($id) {
        //
    });
});


// Rotas para Nivel
Route::prefix('/nivel')->group(function () {
    Route::get('/', function () {
        //
    });

    Route::post('/', function (Request $request) {
        //
    });

    Route::get('/{id}', function ($id) {
        //
    });

    Route::put('/{id}', function (Request $request, $id) {
        //
    });

    Route::delete('/{id}', function ($id) {
        //
    });
});
