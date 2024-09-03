<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\UserController;


Route::post('/endereco',[EnderecoController::class,'insert']);
//Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'FindOne']);
Route::post('/Users_insere',[UserController::class,'insert_user']);
Route::post('/pedido/')
