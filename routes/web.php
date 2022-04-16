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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');
Route::get('hello/view', 'HelloController@view');
Route::get('hello/list', 'HelloController@list');
Route::get('comp', 'ViewController@comp');
Route::get('route/param/{id}','RouteController@param')
    // 2〜3桁の表現
    ->where([ 'id' => '[0-9]{2,3}']);

Route::prefix('members')->group(function() {
    Route::get('info', 'RouteController@info');
    Route::get('article', 'RouteController@article');
});
Route::redirect('/hoge', '/', 301);
// Route::resource('articles', ArticleController);
    // ->except(['edit','update']);