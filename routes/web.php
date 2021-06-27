<?php


use App\Http\Livewire\Post;
use App\Http\Livewire\User;
use App\Http\Livewire\Home;
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


Route::get('/post',Post::class);
Route::get('/user',User::class);
Route::get('/home/{name?}',Home::class);
