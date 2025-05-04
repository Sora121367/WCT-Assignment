<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FeaturesController;
use App\Models\Features;
use App\Http\Controllers\Backends\BackendFeaturesController;

// Route of Integrate theme
Route::get('/', [PagesController::class,'getHome'])->name("pages.home");
Route::get('/contact', [PagesController::class,'getContact'])->name("pages.contact");
Route::get('/about', [FeaturesController::class,'index'])->name("pages.about");
Route::get('/post', [PagesController::class,'getPost'])->name("pages.post");

Route::group([
    'prefix' => 'backends',
], function () {
    Route::get('/admin', [BackendFeaturesController::class, 'index'])->name('backends.admin');
    Route::get('/create', [BackendFeaturesController::class, 'create'])->name('backends.create');
    Route::get('/edit/{id}', [BackendFeaturesController::class, 'edit'])->name('backends.edit');
    Route::put('/update/{id}', [BackendFeaturesController::class, 'update'])->name('backends.update');
    Route::delete('/delete/{id}', [BackendFeaturesController::class, 'delete'])->name('backends.delete');
    Route::post('/store', [BackendFeaturesController::class, 'store'])->name('backends.store');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
