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

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\URL;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', function () {
    return redirect('/login');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/','indexController@index');
Route::get('/home','indexController@index');
Route::get('/about','AboutContactController@about');
Route::get('/contact','AboutContactController@contact');

Route::get('writepost','WritePostController@WritePost')->name('write.post');
Route::get('add/category','AddCategoriesController@AddCategory')->name('add.category');
Route::post('add/category','AddCategoriesController@storeCategory')->name('store.category');
Route::get('all/category','AddCategoriesController@AllCategory')->name('all.category');
Route::post('save/post','WritePostController@SavePost')->name('save.post');
Route::get('getall/post','WritePostController@getAllPost')->name('getall.post');

// this is not a  named route
Route::get('delete/category/{category_id}','AddCategoriesController@destroy');
Route::get('view/category/{category_id}','AddCategoriesController@view');
Route::get('view/post/{post_id}','WritePostController@viewPost');
Route::get('delete/post/{post_id}','WritePostController@destroy');







// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
