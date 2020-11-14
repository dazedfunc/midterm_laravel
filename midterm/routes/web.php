<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;

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

Route::get("/", [ApplicantController::class, "list"]);
Route::get("/hire/{id}", [ApplicantController::class, "hireEmployee"]);
Route::post("/edit/{id}", [ApplicantController::class, "edit"]);
Route::get("/edit/{id}", [ApplicantController::class, "editEmployee"]);