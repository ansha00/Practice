<?php

use App\Http\Controllers\StudentController;
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

Route::get("/",[StudentController::class, "index"]);
Route::post("/save",[StudentController::class, "save"]);
Route::get("/delete/{id}",[StudentController::class, "delete"]);
Route::get("/edit/{id}",[StudentController::class, "edit"]);
Route::post("/update/{id}",[StudentController::class, "update"]);