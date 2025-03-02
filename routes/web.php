<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('welcome');
});


Route::get('/Biochar', function () {
    return view('biochar');
});


Route::get('/SoilImprovement', function () {
    return view('soil');
});


Route::get('/CompostMates', function () {
    return view('compost');
});

Route::get('/AboutUs', function () {
    return view('story');
});

Route::get('/Partner', function () {
    return view('partner');
});

Route::get("/CompostMates/BusinessService",[\App\Http\Controllers\EmailController::class,'business']);
Route::post('/CompostMates/BusinessService',[\App\Http\Controllers\EmailController::class,'sendBusiness'])->name('business.send');

Route::get('/test', function () {
    return view('soil');
});

Route::get("/contact",[\App\Http\Controllers\EmailController::class,'contact']);
Route::post('/contact',[\App\Http\Controllers\EmailController::class,'sendContact'])->name('contact.send');


Route::get('/testing', function () {
    return view('testing');
});



Route::get('/CrewMates', function () {
    return view('crewmates');
});
