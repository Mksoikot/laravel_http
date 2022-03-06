<?php

use App\Http\Controllers\DemoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts','ClientController@getAllpost');
Route::get('/posts/{id}','ClientController@getpostById');

Route::get('/add-post','ClientController@addPost');

Route::get('/update-post','ClientController@UpdatePost');

Route::get('/delete-post/{id}','ClientController@DeletePost');


//DemoController//

Route::get('/demo','DemoController@simplePostHttpRequest');
