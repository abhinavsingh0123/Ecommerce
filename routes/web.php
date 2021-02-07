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

Route::get('/',"FrontPanel@index");

Route::get('/category/{cn}',"FrontPanel@category");

Route::get('/news/{nid}',"FrontPanel@news");

Route::get('/books',"FrontPanel@books");

Route::get('/addcart',"FrontPanel@addcart");

Route::get('/getinfo',"FrontPanel@getinfo");

Route::get('/cartdetails',"FrontPanel@cartdetails");

Route::get('/delcart/{cartid}',"FrontPanel@deletecart");











Route::get('/login',"AdminPanel@login");

Route::get('/admin/dashboard',"AdminPanel@dash");

Route::get('/admin/category',"AdminPanel@category");

Route::post('/admin/postaddcategory',"AdminPanel@postaddcategory");

Route::get('/admin/addcategory',"AdminPanel@addcategory");

Route::get('/admin/delcat/{did}/{dimg}',"AdminPanel@deletecategory");

Route::get('/admin/editcat/{eid}/',"AdminPanel@editcategory");

Route::post('/admin/posteditcategory',"AdminPanel@posteditcategory");

Route::post('/admin/postlogin',"AdminPanel@postlogin");


Route::get('/admin/news',"AdminPanel@news");

Route::get('/admin/addnews',"AdminPanel@addnews");

Route::post('/admin/postaddnews',"AdminPanel@postaddnews");




Route::get('/admin/logout',"AdminPanel@logout");


