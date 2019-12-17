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

## now we make a agecontact route
## but first it goes through the middleware
## then if true it goes to the view

Route::get('/agecontact',function(){
    return view('pages.contact');
})->middleware('age');

### this means if the middle ware is true then you can 
### go to the pages.contact
## but if it is false then the middleware will send it 
## to the home which is written in the middleware
## it send to the home so you have to make a Route for
## the home page

## this is how you can add any middlware with the
## route
## you can add any type of controller 
## first make it then register it then call it
Route::get('home',function(){
    return "this is the home page"; 
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