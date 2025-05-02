<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\policy;

Route::get('/Privcy-Policy',[policy::class, 'privcypolicy'])->name('privcypolicy');
Route::get('/Terms-And-Condition',[policy::class, 'termsandcondition'])->name('termsandcondition');
Route::get('/Cookie-Policy',[policy::class, 'cookiepolicy'])->name('cookiepolicy');
Route::get('/GDPR',[policy::class, 'gdpr'])->name('gdpr');
Route::get('/DNSMS',[policy::class, 'dnsmd'])->name('dnsmd');
