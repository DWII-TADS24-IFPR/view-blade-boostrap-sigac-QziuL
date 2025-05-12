<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('layouts.app');
});

// Rotas para Eixo
Route::prefix('/eixo')->group(function(){
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
