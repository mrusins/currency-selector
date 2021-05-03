<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\Vue;
use Illuminate\Support\Facades\Route;



Route::get('/', [Vue::class, 'index']);

