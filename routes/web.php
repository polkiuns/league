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


//Ruta para vista principal
Route::get('' , 'StaticPagesController@index')->name('home');
//Rutas para el contactenos
Route::get('contact' , 'StaticPagesController@contact')->name('contact');
Route::post('contact' , 'ContactsController@store')->name('messages.mod');
//Ruta para quienes somos
Route::get('about' , 'StaticPagesController@about')->name('about');
//Ruta para blogs
Route::get('blogs' , 'StaticPagesController@blogs')->name('blogs');
Route::get('blogs/{blog}' , 'BlogsController@show')->name('blogs.show');
Route::get('blog/create' , 'BlogsController@create')->name('blogs.create');
Route::post('blogs' , 'BlogsController@store')->name('blogs.store');
Route::get('MyBlogs' , 'BlogsController@index')->name('blogs.index');
Route::get('MyBlogs/edit/{blog}' , 'BlogsController@edit')->name('blogs.edit');
Route::put('MyBlogs/update/{blog}' , 'BlogsController@update')->name('blogs.update');
Route::delete('MyBlogs/{blog}' , 'BlogsController@delete')->name('blogs.delete');
//Ruta para perfi
Route::get('MyProfile' , 'ProfilesController@index')->name('profiles.index');
//Ruta summoner
Route::get('MySummoner' , 'SummonersController@index')->name('summoner.index');
Route::post('MySummoner' , 'SummonersController@create')->name('summoner.create');



Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['role:root']], function() {

	//Ruta para el index de administracion
	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('contact' , 'AdminController@contact')->name('admin.contact');
	Route::delete('contact/{contact}' , 'AdminController@contactDelete')->name('admin.contact.delete');
	//Ruta para los blogs
	Route::get('blogs' , 'BlogsController@index')->name('admin.blogs');
	Route::get('blogs/create' , 'BlogsController@create')->name('admin.blogs.create');
	Route::post('blogs' , 'BlogsController@store')->name('admin.blogs.store');
	Route::get('blogs/edit/{blog}', 'BlogsController@edit')->name('admin.blogs.edit');
	Route::put('blogs/{blog}' , 'BlogsController@update')->name('admin.blogs.update');
	Route::delete('blogs/{blog}' , 'BlogsController@delete')->name('admin.blogs.delete');


	//Ruta para las categorias
	Route::get('categories' , 'CategoriesController@index')->name('admin.categories');
	Route::get('categories/create' , 'CategoriesController@create')->name('admin.categories.create');
	Route::post('categories' , 'CategoriesController@store')->name('admin.categories.store');
	Route::get('categories/edit/{category}', 'CategoriesController@edit')->name('admin.categories.edit');
	Route::put('categories/{category}' , 'CategoriesController@update')->name('admin.categories.update');
	Route::delete('categories/{category}' , 'CategoriesController@delete')->name('admin.categories.delete');

});




Auth::routes();
