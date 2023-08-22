<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/addpost', [PostController::class, 'index'])->middleware(['auth'])->name('post.index');
Route::get('/addpost/create', [PostController::class, 'create'])->middleware(['auth']);
Route::post('/addpost', [PostController::class, 'store'])->middleware(['auth']);
Route::get('/addpost/{id}/edit', [PostController::class, 'edit'])->middleware(['auth']);
Route::put('/addpost/{id}', [PostController::class, 'update'])->middleware(['auth']);
Route::delete('/addpost/{id}', [PostController::class, 'destroy'])->middleware(['auth']);
require __DIR__ . '/auth.php';
