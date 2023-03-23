<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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


Route::get("/article", [PostController::class, "index"])->name("article.all");
Route::get("article/preview", [PostController::class, "preview"])->name("article.preview");
Route::get("/article/create", [PostController::class, "create"])->name("article.create");
Route::post("/article", [PostController::class, "store"])->name("article.store");
Route::get("/article/{post}/edit", [PostController::class, "edit"])->name("article.edit");
Route::put("/article/{post}", [PostController::class, "update"])->name("article.update");
Route::delete("/article/{post}", [PostController::class, "destroy"])->name("article.delete");
// Route::delete('/article/{post}', [PostController::class , "destroy"])->name('article.delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
