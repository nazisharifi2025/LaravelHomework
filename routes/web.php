<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustumerController;
use App\Http\Controllers\ProductsController;
// use App\Models\Student;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', HomeController::class);
Route::resource('posts', PostController::class);
// Route::get("student", function(){
//     return student::all();
// });

Route::get('student', [StudentController::class, 'index']);
Route::get('studentadd',[StudentController::class, 'add']);
Route::get('adde',[CustumerController::class, 'added']);
Route::get('show',[CustumerController::class, 'show']);
// product routing
Route::get("product",[ProductsController::class , "add"]);
Route::get("read" , [ProductsController::class , "read"]);
Route::get("show/{id}" , [ProductsController::class , "show"]);
Route::get("update/{id}" , [ProductsController::class , "Update"]);
Route::get("delete/{id}" , [ProductsController::class , "delete"]);