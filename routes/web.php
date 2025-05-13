<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

// Route::get('/', [Controller::class,'index'])->name('index');
// Route::get('/aboutus', [Controller::class,'aboutus'])->name('aboutus');
// Route::get('/contactus', [Controller::class,'contactus'])->name('contactus');
// Route::get('/blog', [Controller::class,'blogPost'])->name('blog');
// Route::get('/response', [Controller::class,'data'])->name('data');
Route::get('/admin-panel', [Controller::class,'adminPanel'])->name('adminPanel');
Route::post('/save/settings', [Controller::class,'saveSetting'])->name('save.settings');
Route::post('/save/blog', [Controller::class,'saveBlog'])->name('save.blog');
Route::post('/save/service', [Controller::class,'saveService'])->name('save.service');
Route::get('/api/our/images',[Controller::class,'getImages']);
Route::get('/api/blogs',[Controller::class,'getBlogs']);

Route::get('/{vue_capture?}', [Controller::class,'vueIndex'])->where('vue_capture', '[\/\w\.-]*');