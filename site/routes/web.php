<?php

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



Route::get('/index','App\Http\Controllers\ArticleController@index')->name('index');


Route::get('/gepostbyid/{id}','App\Http\Controllers\ArticleController@getid')->name('getOne');


Route::get('/detailarticle/{id}','App\Http\Controllers\ArticleController@detail')->name('detail');

Route::get('/article/admin','App\Http\Controllers\ArticleController@admin')->name('admin');

Route::post('/user/create','App\Http\Controllers\UserController@create')->name('user.store');
Route::get('/user/create','App\Http\Controllers\UserController@createUser')->name('user.create');


Route::get('/user/login','App\Http\Controllers\UserController@login')->name('user.login');

Route::get('/user/list','App\Http\Controllers\UserController@listUser')->name('user.list');
Route::get('/categorie/list','App\Http\Controllers\CategorieController@listCat')->name('categorie.list');

Route::get('/user/update/{id}','App\Http\Controllers\UserController@update')->name('user.update');


Route::get('/categorie/update/{id}','App\Http\Controllers\CategorieController@update')->name('categorie.update');
Route::post('/categorie/update/store','App\Http\Controllers\CategorieController@storeUpdate')->name('categorie.update.store');

Route::get('/categorie/create','App\Http\Controllers\CategorieController@create')->name('categorie.create');

Route::get('/categorie/delete/{id}','App\Http\Controllers\CategorieController@delete')->name('categorie.delete');
Route::get('/user/delete/{id}','App\Http\Controllers\UserController@delete')->name('user.delete');


Route::post('/user/login/register','App\Http\Controllers\UserController@register')->name('login.register');

Route::post('/user/update/store','App\Http\Controllers\UserController@storeUpdate')->name('user.update.store');


Route::post('/categorie/store','App\Http\Controllers\CategorieController@store')->name('categorie.store');




Route::get('/admin/post/list/','App\Http\Controllers\ArticleController@listAdmin')->name('article.admin');

Route::get('/admin/post/create/','App\Http\Controllers\ArticleController@create')->name('article.admin.create');
Route::post('/admin/post/store/','App\Http\Controllers\ArticleController@store')->name('article.admin.store');

Route::get('/admin/post/show/{id}','App\Http\Controllers\ArticleController@show')->name('article.admin.show');

Route::post('/admin/post/update/','App\Http\Controllers\ArticleController@updateStore')->name('article.admin.update');


Route::get('/admin/post/delete/{id}','App\Http\Controllers\ArticleController@delete')->name('article.admin.delete');



Route::get('/', function () {
    return view('welcome');
});
