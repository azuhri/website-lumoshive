<?php

use App\Http\Controllers\LandingPageController;
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
    return view('welcome');
});

Route::controller(LandingPageController::class)->name("landing.")->group(function() {
    Route::get("home", "viewHome")->name("home");
    Route::get("corporate-site", "viewHome")->name("corporate-site");
    Route::get("developer-site", "viewHome")->name("developer-site");
    Route::get("product-services", "viewHome")->name("product-services");
}); 
