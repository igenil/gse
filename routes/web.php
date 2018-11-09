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
    return view('auth.login');
});


Route::get('company', 'CompanyController@index');
Route::get('grade', 'GradeController@index');
Route::get('addcompany', 'CompanyController@indexaddcompany');
Route::get('addgrade', 'GradeController@indexaddgrade');
Route::get('student', 'StudentController@index');
Route::get('petition', 'PetitionController@index');
Route::get('editgrade/{id}', 'GradeController@indexeditgrade');
Route::get('editcompany/{id}', 'CompanyController@indexeditcompany');

Route::post('addcompany', 'CompanyController@store');
Route::post('addgrade', 'GradeController@store');

Route::delete('grade/{id}', 'GradeController@destroy');
Route::delete('company/{id}', 'CompanyController@destroy');

Route::post('editgrade/{id}', 'GradeController@update');
Route::post('editcompany/{id}', 'CompanyController@update');

Auth::routes();

