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
    return view('index');
});

Route::get('writepost','WritePostController@WritePost')->name('write.post');
Route::get('add/category','AddCategoriesController@AddCategory')->name('add.category');
Route::post('add/category','AddCategoriesController@storeCategory')->name('store.category');
Route::get('all/category','AddCategoriesController@AllCategory')->name('all.category');



