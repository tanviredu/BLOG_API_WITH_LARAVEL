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

Route::get('/about',function(){
    ## we can use the view for the sending template
    return view('about');
});


## sending request with inside the 
## the pages directory
Route::get('/contact',function(){
    return view('pages.contact');
});

## sending the value with the parameter


## sending the template with the 
## value
Route::get('/datapass',function(){
    return view("pages.datapass",['chanel'=>'value']);
});


### setting up the prefix
## this is adding prefix before every route
## make life easy
Route::prefix('mydomain')->group(function(){

Route::get('/contact',function(){
    return view('pages.contact');
});

});