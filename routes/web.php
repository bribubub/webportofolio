<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; // Make sure to import your controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Page
Route::get('/', function () {
    return view('home');
});

// About Me Page
Route::get('/about', function () {
    return view('about');
});

// Skills Page
Route::get('/skills', function () {
    return view('skills');
});

// Portfolio Page
Route::get('/portfolio', function () {
    return view('portfolio');
});

// Resume Page (Optional)
Route::get('/resume', function () {
    return view('resume');
});

// Contact Page (GET request to display the form)
Route::get('/contact', function () {
    return view('contact');
});

// Route to handle POST request from the contact form
// This line connects the form submission to your ContactController.
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
