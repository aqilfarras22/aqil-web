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
    return view('about'); // Menampilkan file about.blade
});
Route::get('/education', 'EducationController@index'); //Controller untuk menampilkan
Route::post('/education/post','EducationController@store'); // Memungkinkan router untuk mengirim data
Route::get('/skill', 'SkillController@index');

Route::get('/experience', 'ExperienceController@index');
Route::get('/contact', function () {
    return view('contact'); // Menampilkan file contact.blade
});

Route::get('home', 'HomeController@index');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('index','ExperienceController@list');
    Route::get('tambah','ExperienceController@create');
    Route::post('index','ExperienceController@store');
    Route::get('exp/{id}/edit','ExperienceController@edit');
    Route::put('exp/{id}/','ExperienceController@update');
    Route::delete('exp/{id}','ExperienceController@destroy');
});

Auth::routes();