<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class, 'home'])->name('home');
Route::get('/about',[PageController::class, 'about'])->name('about');
Route::get('/Projects',[PageController::class, 'projectsPage'])->name('projects');
Route::get('/contactme',[PageController::class, 'contactMe'])->name('contactMe');
Route::get('/Certificates',[PageController::class, 'certificatePage'])->name('Certificates');
Route::get('/admin',[PageController::class,'admin'])->name('admin');
Route::get('/Blogs',[PageController::class,'blogs'])->name('Blogs');
