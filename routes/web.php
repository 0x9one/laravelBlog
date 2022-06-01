<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

/*
|--------------------------------------------------------------------------
| Brainstorming about all endpoints
|--------------------------------------------------------------------------
|
| Create
|   --> /blog/create
|
| Read
|   --> /blog
|
| Update - PUT or PATCH
|   --> /blog/{slug}
|
| Delete - DELETE
|   --> /blog/{id}
|
| Show - GET
|   --> /blog/{id}
|
| Edit - GET
|   --> /blog/{id}/edit
|
*/

Route::get('/', [PagesController::class, 'index']);
Route::resource('/blog', PostsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
