<?php

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
use App\Post;
use App\User;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','SessionsController@destroy');

Route::prefix('admin') -> group(function() {
    Route::get('/', function () {
        $postsNumber = Post::all()->count();
        $usersNumber = User::all()->count();

        return view('admin.index',compact(['postsNumber','usersNumber']));
    })->middleware('auth');
    // Users
    Route::get('users','UsersController@index')->name('admin')->middleware('auth');

    //Posts
    Route::get('posts','PostController@index')->middleware('auth');


});
// Users
Route::delete('/users/{user}','UsersController@destroy');
Route::patch('/users/{user}','UsersController@update')->middleware('auth');
Route::post('/users','UsersController@store');


// Posts
Route::post('/posts','PostController@store')->middleware('auth','authorized');
Route::get('/posts/add','PostController@create')->middleware('auth');
Route::get('/posts','PostController@showAll');
Route::get('/posts/{post}','PostController@show');
Route::post('/posts/{post}/comments','CommentController@store')->middleware('auth');

//Contact
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@send');

