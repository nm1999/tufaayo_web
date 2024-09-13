<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class,'index'])->name('index');
Route::get('/aboutus', [Controller::class,'aboutus'])->name('aboutus');
Route::get('/contactus', [Controller::class,'contactus'])->name('contactus');
Route::get('/blogs', [Controller::class,'blog'])->name('blog');
