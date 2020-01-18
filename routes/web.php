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
    logger(time());

    // throw new Exception('test');

    return view('welcome');
});


Route::get('markdown', function () {
    return view('foo');
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('clockwork', function () {
    // 时间线
    clock()->startEvent('root', "首页");
    // 添加日志
    logger('logger log');
    clock('clock log');
    clock()->endEvent('root');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
