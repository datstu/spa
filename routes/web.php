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

//User
Route::get('/',"HomeController@index");
Route::get('/trang-chu', "HomeController@index");
Route::get('/dich-vu-massage', "HomeController@listServiceMassage");
Route::get('/danh-sach-san-pham', "ProductController@listProduct");

//Admin
Route::get('/admin', "AdminController@index");
Route::get('/admin-login', "AdminController@login");
Route::post('/admin-login', "AdminController@dashboard");
Route::get('/admin-logout', "AdminController@logout");

//Product Management
Route::get('/quan-ly-san-pham', "ProductManagementController@indexAdmin");

//Category Management
Route::get('/quan-ly-danh-muc', "CategoryManagementController@indexAdmin");
Route::post('/save-category', "CategoryManagementController@saveCategory");


