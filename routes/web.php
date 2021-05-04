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

Route::get('/', 'GonnajoongController@index');

Route::get('/joy37', 'GonnajoongController@joy37');
Route::get('/hamsoa', 'GonnajoongController@hamsoa');
Route::get('/sd-tech', 'GonnajoongController@sdtech');
Route::get('/farm-morning', 'GonnajoongController@farmmorning');
Route::get('/vision-link', 'GonnajoongController@visionlink');
Route::get('/castelbajak', 'GonnajoongController@castelbajak');
Route::get('/archivepke', 'GonnajoongController@archivepke');
Route::get('/odg', 'GonnajoongController@odg');
Route::get('/likewise', 'GonnajoongController@likewise');
Route::get('/hj-systems', 'GonnajoongController@hjsystems');

