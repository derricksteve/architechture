<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getarticle','App\Http\Controllers\ArticleController@getAll');

Route::get('/getcategorie','App\Http\Controllers\ArticleController@getCategorie');

Route::get('/getcategoriebycatego/{id}','App\Http\Controllers\ArticleController@getOnePost');

Route::get('/getonepost/{id}','App\Http\Controllers\ArticleController@detail');

 
Route::post('/user/create','App\Http\Controllers\UserController@create' );

Route::get('/user/all','App\Http\Controllers\UserController@list');

Route::get('/cat/all','App\Http\Controllers\CategorieController@list');

Route::get('/categorie/update/{id}','App\Http\Controllers\CategorieController@update');


Route::post('/user/login','App\Http\Controllers\UserController@login' );
Route::get('/user/update/{id}','App\Http\Controllers\UserController@update')->name('user.update');
Route::get('/user/delete/{id}','App\Http\Controllers\UserController@delete')->name('user.delete');

Route::get('/categorie/delete/{id}','App\Http\Controllers\CategorieController@delete')->name('categorie.delete');

Route::post('/user/update/store','App\Http\Controllers\UserController@storeUpdate')->name('user.update.store');
Route::post('/categorie/update/store','App\Http\Controllers\CategorieController@storeUpdate')->name('categorie.update.store');



Route::post('/categorie/store','App\Http\Controllers\CategorieController@store')->name('categorie.store');

Route::post('/admin/store','App\Http\Controllers\ArticleController@store')->name('article.store');

Route::get('/admin/article/update/{id}','App\Http\Controllers\ArticleController@update')->name('article.update');

Route::post('/admin/post/update','App\Http\Controllers\ArticleController@storeUpdate')->name('article.store.update');


Route::get('/admin/article/delete/{id}','App\Http\Controllers\ArticleController@delete')->name('article.delete');
