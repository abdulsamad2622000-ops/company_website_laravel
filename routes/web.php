<?php

use App\Http\Controllers\IndustryController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes — NovaStackHub company website
|--------------------------------------------------------------------------
*/

Route::get('/admin', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/leads', [AdminController::class, 'leads'])->name('admin.leads');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
// Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');

// Services — server-rendered from app/Data/services.php
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Industries demo platform — server-rendered from app/Data/industries.php
// Route::get('/industries/{slug}', [IndustryController::class, 'website'])->name('industries.website');
Route::get('/industries/{slug}/erp', [IndustryController::class, 'erp'])->name('industries.erp');

// Lead / contact form submissions (contact | cta | enquiry)
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');
