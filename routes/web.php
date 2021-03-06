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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

// =================================================================================================
// NotebooksController

// Route::get('/notebooks', 'NotebooksController@index');
// Route::post('/notebooks', 'NotebooksController@store');
// Route::get('/notebooks/create', 'NotebooksController@create');
// Route::get('/notebooks/{notebooks}/edit', 'NotebooksController@edit')->name('notebooks.edit');
// Route::put('/notebooks/{notebooks}', 'NotebooksController@update')->name('notebooks.update');
// Route::delete('/notebooks/{notebooks}', 'NotebooksController@destroy')->name('notebooks.destroy');
// Route::get('/notebooks/{notebooks}', 'NotebooksController@show')->name('notebooks.show');

Route::resource('notebooks', 'NotebooksController');

// NotesController

Route::resource('notes', 'NotesController');
Route::get('notes/{notebookId}/createNote', 'NotesController@createNote')->name('notes.createNote');

// ImageController

Route::get('/image', 'ImagesController@index');
Route::get('/image/create', 'ImagesController@create');
Route::post('/image', 'ImagesController@store');
Route::get('/image/{image}', 'ImagesController@show')->name('image.show');
Route::delete('/image/{image}', 'ImagesController@destroy')->name('image.destroy');

// =======================================================================================

Route::group(['middleware'=>['is_admin']], function(){
//Admin Panel

//Admin Controller

Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

//Industry Model

Route::get('/admin/view_industry','IndustryController@index');
Route::get('/admin/create_industry','IndustryController@create');
Route::post('/admin/store_industry','IndustryController@store');
Route::get('/admin/edit_industry/{industry}','IndustryController@edit');
Route::post('/admin/update_industry/{industry}','IndustryController@update');
Route::get('/admin/delete_industry/{industry}','IndustryController@destroy');
Route::get('/admin/show_industry/{industry}','IndustryController@show');

//Movie  Type  Model

Route::get('/admin/view_movie_type', 'MovieTypeController@index');
Route::get('/admin/create_movie_type', 'MovieTypeController@create');
Route::post('/admin/store_movie_type', 'MovieTypeController@store');
Route::get('/admin/edit_movie_type/{movietype}', 'MovieTypeController@edit');
Route::post('/admin/update_movie_type/{movietype}', 'MovieTypeController@update');
Route::get('/admin/delete_movie_type/{movietype}', 'MovieTypeController@destroy');
Route::get('/admin/show_movie_type/{movietype}', 'MovieTypeController@show');

//Movies Model

Route::get('/admin/view_movie', 'MovieController@index');
Route::get('/admin/create_movie', 'MovieController@create');
Route::post('/admin/store_movie', 'MovieController@store');
Route::get('/admin/edit_movie/{movie}', 'MovieController@edit');
Route::post('/admin/update_movie/{movie}', 'MovieController@update');
Route::get('/admin/delete_movie/{movie}', 'MovieController@destroy');




});

//User side
Route::get('/admin/show_movie/{movie}', 'MovieController@show')->name('movie.show');
Route::get('/admin/show_recently_add_movies', 'MovieController@showRecentlyAddMovies');
Route::get('/admin/show_bollywood_romance_movies', 'MovieController@showBollywoodRomanceMovies');
Route::get('/admin/show_bollywood_action_movies', 'MovieController@showBollywoodActionMovies');
Route::get('/admin/show_bollywood_comedy_movies', 'MovieController@showBollywoodComedyMovies');
Route::get('/admin/show_hollywood_action_movies', 'MovieController@showHollywoodActionMovies');
Route::get('/admin/show_hollywood_romance_movies', 'MovieController@showHollywoodRomanceMovies');
Route::get('/admin/show_hollywood_comedy_movies', 'MovieController@showHollywoodComedyMovies');


Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::post('/search_movies', 'HomeController@searchMovies');