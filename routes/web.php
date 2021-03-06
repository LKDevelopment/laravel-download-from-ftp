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
Route::get('/ftp', 'FTPController@list_folders');
Route::get('/download/{file}', 'FTPController@download_file');
Route::get('/files', 'FTPController@api_list_folders');