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

Route::get('/', function(){
    return view('home');
});

Route::get('/home',function(){
    return view('home');
});
Route::prefix('categories')->group(function(){
    route::get('/', [
        'as'=> 'categories.index',
        'uses' => 'CategoryController@index'
    ]);
    route::get('/create', [
        'as'=> 'categories.create',
        'uses' => 'CategoryController@create'
    ]);
    route::post('/store', [
        'as'=> 'categories.store',
        'uses' => 'CategoryController@store'
    ]);
    route::get('/edit/{id}', [
        'as'=> 'categories.edit',
        'uses' => 'CategoryController@edit'
    ]);
    route::get('/delete/{id}', [
        'as'=> 'categories.delete',
        'uses' => 'CategoryController@delete'
    ]);
    route::post('/update/{id}', [
        'as'=> 'categories.update',
        'uses' => 'CategoryController@update'
    ]);
});


Route::prefix('menu')->group(function(){
    route::get('/', [
        'as'=> 'menus.index',
        'uses' => 'menuController@index'
    ]);
    route::get('/create', [
        'as'=> 'menus.create',
        'uses' => 'menuController@create'
    ]);
});
