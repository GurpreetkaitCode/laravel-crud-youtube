<?php

use App\Http\Controllers\UserController;
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

Route::view('/users/create', 'create')->name('createusers');
Route::get('/users/edit/{id?}/{name?}/{email?}/{age?}', function($id,$name=null,$email=null,$age=null){
    return view('update',['id' => $id,'name'=>$name,'email'=>$email,'age'=>$age]);
})->name('editusers');
Route::get('/users', [UserController::class, 'show'])->name('showusers');
Route::post('/users/store', [UserController::class, 'store'])->name('storeusers');
Route::post('/users/update', [UserController::class, 'update'])->name('updateusers');
Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('deleteusers');
