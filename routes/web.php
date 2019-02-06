<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();
Route::get('/home', 'HomeController@index');
//前台界面
Route::group(['domain' => 'm.buercha.com'], function () {
    Route::get('/','Mobile\IndexController@Index');
    Route::get('map','Mobile\ListNewsController@map')->where('path','[a-zA-Z\/]+')->name('newslist');
    Route::get('{path}','Mobile\ListNewsController@listNews')->where('path','[a-zA-Z0-9]+')->name('newslist');
    Route::get('{path}/{id}.html','Mobile\ArticleController@GetArticle')->where(['id'=>'[0-9]+','path'=>'[a-zA-Z\/]+'])->name('articles');
    Route::get('{path}/page/{page}','Mobile\ListNewsController@listNews')->where('path', '[a-zA-Z/]+')->name('newspagelist');
});
Route::get('/','Frontend\IndexController@Index');
Route::get('map','Frontend\ListNewsController@map')->where('path','[a-zA-Z\/]+')->name('newslist');
Route::get('{path}','Frontend\ListNewsController@listNews')->where('path','[a-zA-Z0-9]+')->name('newslist');
Route::get('{path}/{id}.html','Frontend\ArticleController@GetArticle')->where(['id'=>'[0-9]+','path'=>'[a-zA-Z\/]+'])->name('articles');
Route::get('{path}/page/{page}','Frontend\ListNewsController@listNews')->where('path', '[a-zA-Z/]+')->name('newspagelist');
Route::post('/phonecomplate/','Frontend\PhoneController@phoneComplate');
