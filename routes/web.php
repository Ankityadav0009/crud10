<?php
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CrudController;

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


Route::get('/login',[CustomAuthController::class,'login']); //->middleware('alreadyLoggedIn');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');

Route::get('/registration',[CustomAuthController::class,'registration']); //->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/register-user1',[CrudController::class,'registerUser1'])->name('register-user1');

Route::get('/dashboard',[CustomAuthController::class,'dashboard']);//->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::get('/crud',[CrudController::class,'crud']);
Route::get('/add',[CrudController::class,'add']);
Route::get('/read',[CrudController::class,'list']);
Route::get('/update/{id}',[CrudController::class,'update'])->name('user.update');
Route::post('/updatedata/{id}',[CrudController::class,'updatedata'])->name('user.updatedata');
Route::get('/delete/{id}',[CrudController::class,'delete'])->name('user.delete');
