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

// Route::get('/admin', 'AdminController@loginAdmin');
// Route::post('/admin', 'AdminController@postLoginAdmin');


Route::get('/home',function(){
    return view('home');
});
Route::get('/',function(){
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
        'uses' => 'MenuController@index'
    ]);
    route::get('/create', [
        'as'=> 'menus.create',
        'uses' => 'MenuController@create'
    ]);
    Route::post('/store',[
        'as' => 'menus.store',
        'uses' => 'MenuController@store'
    ]);
    Route::get('/edit/{id}', [
        'as' => 'menus.edit',
        'uses'=> 'MenuController@edit'
    ]);
    route::post('/update/{id}', [
        'as'=> 'menus.update',
        'uses' => 'MenuController@update'
    ]);
    route::get('/delete/{id}', [
        'as'=> 'menus.delete',
        'uses' => 'MenuController@delete'
    ]);
});


Route::prefix('product')->group(function(){
    route::get('/',[
        'as'=> 'product.index',
        'uses'=>'ProductController@index',
    ]);
    route::get('/create', [
        'as'=> 'product.create',
        'uses' => 'ProductController@create'
    ]);
    route::post('/store', [
        'as'=> 'product.store',
        'uses' => 'ProductController@store'
    ]);
});
