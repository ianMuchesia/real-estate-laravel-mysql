<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('pages.index');
})->name('home');
Route::view("services", 'pages.services')->name("services");
Route::view('about', 'pages.about')->name('about');
Route::view('contact', 'pages.contact')->name('contact');
Route::view('properties', 'pages.properties')->name('properties');
Route::view('property', 'pages.property')->name('property');
Route::view('inquire', 'pages.inquire')->name('inquire');
Auth::routes();

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
