<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;




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

Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai');

Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::get('/insertdata', [EmployeeController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::get('/updatedata/{id}', [EmployeeController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');



Route::get('/posts', function(){
    $result = Post::all();
    return $result;
});

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "My Name is Anton Every morning. I usually get up at 7:00 and brush my teeth. Zen. I have breakfast and go to school by bus.",
        "email" => "om_anton@gmail.com",
        "image" => "anton.jpg"
    ]); 
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}',[PostController::class, 'show']);