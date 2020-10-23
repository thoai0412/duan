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
Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', 'AdminController@loginAdmin');
Route::post('/admin', 'AdminController@postLoginAdmin');

Route::prefix('admin')->group(function () {
    Route::prefix('categories')->group(function () {
        route::get('/', [
            'as' => 'categories.index',
            'uses' => 'CategoryController@index',
            'middleware' => ('can:category-list')
        ]);
        route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'CategoryController@create',
            'middleware' => ('can:category-add')
        ]);
        route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'CategoryController@store'
        ]);
        route::get('/edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'CategoryController@edit',
            'middleware' => ('can:category-edit')
        ]);
        route::get('/delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'CategoryController@delete',
            'middleware' => ('can:category-delete')
        ]);
        route::post('/update/{id}', [
            'as' => 'categories.update',
            'uses' => 'CategoryController@update'
        ]);
    });
    Route::prefix('menu')->group(function () {
        route::get('/', [
            'as' => 'menus.index',
            'uses' => 'MenuController@index',
            'middleware' => ('can:list-menu')

        ]);
        route::get('/create', [
            'as' => 'menus.create',
            'uses' => 'MenuController@create'
        ]);
        Route::post('/store', [
            'as' => 'menus.store',
            'uses' => 'MenuController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'menus.edit',
            'uses' => 'MenuController@edit'
        ]);
        route::post('/update/{id}', [
            'as' => 'menus.update',
            'uses' => 'MenuController@update'
        ]);
        route::get('/delete/{id}', [
            'as' => 'menus.delete',
            'uses' => 'MenuController@delete'
        ]);
    });
    Route::prefix('product')->group(function () {
        route::get('/', [
            'as' => 'product.index',
            'uses' => 'ProductController@index',
            'middleware' => ('can:product-list')
        ]);
        route::get('/create', [
            'as' => 'product.create',
            'uses' => 'ProductController@create'
        ]);
        route::post('/store', [
            'as' => 'product.store',
            'uses' => 'ProductController@store'
        ]);
        route::post('/update/{id}', [
            'as' => 'product.update',
            'uses' => 'ProductController@update'
        ]);
        route::get('/edit/{id}', [
            'as' => 'product.edit',
            'uses' => 'ProductController@edit'
        ]);
        route::get('/delete/{id}', [
            'as' => 'product.delete',
            'uses' => 'ProductController@delete'
        ]);
    });

    // Route::group(['middleware' => 'auth'], function() {
    //     Route::resource('task', 'TaskController');
    //   });

    Route::resource('sliders', 'SliderController')->middleware(['can:slider']);

    Route::resource('settings', 'SettingController')->middleware(['can:setting-view','can:setting-create','can:setting-update']);

    // Route::group(['middleware' => 'setting-role'], function() {

    //     Route::resource('settings', 'SettingController');
    // });




    // Route::post('/sliders',function(){
    //     return 'hello';
    // })->name('sliders.store');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');

    Route::resource('permissions', 'PermissionController');
});
