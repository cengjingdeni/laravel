<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('demo/demo','DemoController@demo');
Route::get('admin/index','AdminController@index');
Route::get('admin/admin','AdminController@admin');
Route::get('admin/user','AdminController@user');
Route::get('admin/add','AdminController@add');


Route::get('system/show','SystemController@show');


Route::get('block/show','BlockController@show');
Route::get('block/add','BlockController@add');


Route::get('article/article','ArticleController@article');
Route::get('article/add','ArticleController@add');
Route::get('article/addcate','ArticleController@addcate');
Route::post('article/addcat','ArticleController@addcat');
Route::get('article/article_cate','ArticleController@article_cate');


Route::get('daikuan/show','DaikuanController@show');
//Route::get('block/add','BlockController@add');

Route::get('payorder/show','PayorderController@show');
Route::get('payorder/add','PayorderController@add');
Route::get('payorder/sel','PayorderController@sel');
Route::get('payorder/del','PayorderController@del');
Route::get('payorder/seluser','PayorderController@seluser');
Route::post('payorder/search','PayorderController@search');


Route::get('bills/show','BillsController@show');



Route::get('index/show','IndexController@show');


Route::get('info/show','InfoController@show');
Route::get('info/baseinfo','InfoController@baseinfo');