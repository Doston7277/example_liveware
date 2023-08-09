<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
use App\Livewire\CreateCategory;
use App\Livewire\ViewCategory;

Route::get('/counter', Counter::class);
Route::get('/create-category', CreateCategory::class);
Route::get('/categories', ViewCategory::class);
