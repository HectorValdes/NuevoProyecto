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

//RUTAS FRONTEND
Route::get('/',[
    'as' => 'front.index',
    'uses' => 'FrontController@index'
]);
Route::get('categories/{name}', [
    'uses' => 'FrontController@searchCategory',
    'as' => 'front.search.category'
]);
Route::get('tags/{name}', [
    'uses' => 'FrontController@searchTag',
    'as' => 'front.search.tags'
]);

Route::get('articles/{slug}',[
        'uses' => 'FrontController@viewArticle',
    'as' => 'front.view.article'
]);

// RUTAS DE ADMINISTRACION

Route::group(['prefix' => 'queace'], function () {
    Route::get('view/{id}', ['uses' => 'test@view',
        'as' => 'articlesview']);
});
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['admin']], function(){
        Route::resource('users', 'UserController');
        Route::get('users/{id}/destroy',[
            'uses' => 'UserController@destroy',
            'as' => 'admin.users.delete'
        ]);
    });

    Route::resource('categories', 'CategoryController');
    Route::get('categories/{id}/destroy',[
        'uses' => 'CategoryController@destroy',
        'as' => 'admin.categories.delete'
    ]);
    Route::resource('tags', 'TagsController');
    Route::get('tags/{id}/destroy',[
        'uses' => 'TagsController@destroy',
        'as' => 'admin.tags.delete'
    ]);
    Route::resource('articles', 'ArticleController');
    Route::get('article/{id}/destroy',[
        'uses' => 'ArticleController@destroy',
        'as' => 'admin.article.delete'
    ]);
    Route::get('images', [
       'uses' => 'ImagesController@index',
        'as' => 'images.index'
    ]);
});





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


