<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartaController;
use App\Http\Controllers\ProfileController;



Route::get('/', function () {
    return view('welcome');
});

route::get('/carta.index',[CartaController::class,'index'])->name('carta.index');
route::get('/carta.create',[CartaController::class,'create'])->name('carta.create');
route::post('/carta.store',[CartaController::class,'store'])->name('carta.store');
route::get('/carta.edit',[CartaController::class,'edit'])->name('carta.edit');
route::put('/carta.update',[CartaController::class,'update'])->name('carta.update');
route::delete('/carta.destroy',[CartaController::class,'destroy'])->name('carta.destroy');
