<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


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

Route::get("/", function () {
    return view("home", [
        "title" => "Home",
        "link" => "home"
    ]);
});

Route::get("/about", function () {
    return view("about", [
        "title" => "About",  
        "link" => "about",
        "name" => "Andi Hartono, S.Kom",
        "email" => "andihartono21@gmail.com",
        "image" => "bg.jpeg"
    ]);
});

Route::get("/posts", [PostController::class, "index"]);

Route::get("/posts/{post:slug}", [PostController::class, "show"]);

Route::get("categories", function () {
    return view("categories", [
        "title" => "Post Categories",    
        "link" => "categories",
        "categories" => Category::all()
    ]);
});

Route::get("/login", [LoginController::class, "index"])->name("login")->middleware("guest");
Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, "logout"]);

Route::get("/register", [RegisterController::class, "index"])->middleware("guest") ;
Route::post("/register", [RegisterController::class, "store"]);

Route::get("/dashboard", [DashboardController::class, "index"])->middleware("auth");