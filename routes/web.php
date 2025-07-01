<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

// Rute baru untuk halaman detail portofolio BRIN Project
Route::get('/portfolio/brin-project', function () {
    return view('portfolio-detail-brin-project'); // Pastikan nama file Blade ini sesuai
});

// Rute baru untuk halaman detail portofolio Cibarusah Project 1
Route::get('/portfolio/cibarusah-project-1', function () {
    return view('portfolio-detail-cibarusah-1'); // Nama file Blade yang baru dibuat
});

// Rute baru untuk halaman detail portofolio Cibarusah Project 2
Route::get('/portfolio/cibarusah-project-2', function () {
    return view('portfolio-detail-cibarusah-2'); // Nama file Blade yang baru dibuat
});

// Rute baru untuk halaman detail portofolio Internship In Winata
Route::get('/portfolio/internship-winata', function () {
    return view('portfolio-detail-internship-winata'); // Nama file Blade yang baru dibuat
});

// Rute baru untuk halaman detail portofolio RESTful API Service
Route::get('/portfolio/restful-api-service', function () {
    return view('portfolio-detail-restful-api-service'); // Nama file Blade yang baru dibuat
});

// Rute baru untuk halaman detail portofolio Interactive Data Visualization
Route::get('/portfolio/data-visualization', function () {
    return view('portfolio-detail-data-visualization'); // Nama file Blade yang baru dibuat
});

Route::get('/contact', function () {
    return view('contact');
});


Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');