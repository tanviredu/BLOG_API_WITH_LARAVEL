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


### we can route with this web.php
### if you use the post request then you have to use the 
### post request
## this function will return the hello world
Route::get('/hello',function(){
    return "hello world";
});


#Route::get('/about',function(){
#    ## we can use the view for the sending template
#    return view('about');
#});

## here we will use the controller 
## to view this same template
## up to this point we directly send the view
## now we are sending the same thing with the help of
## the controller


Route::get('/contact','HelloController@get');
Route::get('/contactadmin','HelloController@getForAdmin');


