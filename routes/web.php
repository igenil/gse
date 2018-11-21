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
Route::get('listing', 'ListingController@index');
Route::get('addcompany', 'CompanyController@indexaddcompany');
Route::get('addgrade', 'GradeController@indexaddgrade');
Route::get('addstudent', 'StudentController@indexaddstudent');
Route::get('student', 'StudentController@index');
Route::get('petition', 'PetitionController@index');
Route::get('addpetition', 'PetitionController@indexaddpetition');
Route::get('addpetition/{id}', 'PetitionController@indexeditpetition');
Route::get('editgrade/{id}', 'GradeController@indexeditgrade');
Route::get('editcompany/{id}', 'CompanyController@indexeditcompany');
Route::get('editstudent/{id}', 'StudentController@indexeditstudent');
Route::get('editpetition/{id}', 'PetitionController@indexeditpetition');
Route::get('studies/{id}', 'StudyController@index')->name('studies');
Route::get('listing/{desde}/{hasta}', 'PetitionController@indexfechas');

Route::post('addpetition', 'PetitionController@store');
Route::post('addcompany', 'CompanyController@store');
Route::post('addgrade', 'GradeController@store');
Route::post('addstudent', 'StudentController@store');

Route::delete('petition/{id}', 'PetitionController@destroy');
Route::delete('grade/{id}', 'GradeController@destroy');
Route::delete('company/{id}', 'CompanyController@destroy');
Route::delete('student/{id}', 'StudentController@destroy');
Route::post('studies/{id}', 'StudyController@destroy')->name('deleteStudy');

Route::post('editpetition/{id}', 'PetitionController@update');
Route::post('editgrade/{id}', 'GradeController@update');
Route::post('editcompany/{id}', 'CompanyController@update');
Route::post('editstudent/{id}', 'StudentController@update');

Route::get('pdf', 'ListingController@pdfs');
Auth::routes();

