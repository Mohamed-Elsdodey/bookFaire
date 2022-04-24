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
Route::middleware('isadmin')->group(function()
                                   
                                    {
                                        
                                        
                                        
                                        
Route::get('/create/author','Authorcontroller@create');

Route::post('/add/author','Authorcontroller@add');

Route::get('/show/authors','Authorcontroller@show');

Route::get('/add/book','Bookcontroller@add');

Route::post('/store/book','Bookcontroller@store');


Route::get('/show/books','Bookcontroller@show');



Route::get('/show/books','Bookcontroller@show');


Route::get('/register','Usercontroller@register');

Route::post('/registration','Usercontroller@registration');



Route::get('/login','Usercontroller@login');
Route::post('/handlelogin','Usercontroller@handlelogin');
                                        
                                        
                                        
                                        
                                        
                                    }
                                   
                                   
                                   
                                   );















