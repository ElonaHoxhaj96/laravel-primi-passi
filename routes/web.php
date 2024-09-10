<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $title = 'Questa è la mia prima pagina con Laravel';
    $subtitle = 'Speriamo bene';

    // $data = [
    //     'title' => $title,
    //     'subtitle' => $subtitle
    // ];

    return view('home', compact('title', 'subtitle'));
})->name('home');

//ABOUT US
Route::get('/about', function(){
    return view('about');
})->name('about');

//CONTACT US
Route::get('/contact', function(){
    return view('contact');
})->name('contact');

