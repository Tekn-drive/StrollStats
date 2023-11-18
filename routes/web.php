<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StepController;

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
    return redirect('/home');
});

Route::get('/help', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/tracker', [StepController::class, 'index'])->name('steps.allSteps');

Route::post('/processForm', [StepController::class, 'processForm']);

Route::get('/improvedlogin', function(){
    return view('improvedlogin');
});

#This is for the blade template in the template folder
Route::get('/blade_template', function () {
    return view('template\template');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
