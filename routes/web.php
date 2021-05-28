<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');});
Route::get('/contact', function () {
    echo "je suis zineb medjahdi";});
//Route::get('/createEnfant', function () {
    //return view('AdmineCrèche/createEnfant');});
Route::get('enfant','EnfantController@index');
Route::get('enfant/create','EnfantController@create');
Route::post('enfant','EnfantController@store');
Route::get('enfant/{id}/edit','EnfantController@edit');
Route::put('enfant/{id}','EnfantController@update');
Route::delete('enfant/{id}','EnfantController@destroy');

Route::get('medecin','MedecinController@index');
Route::get('medecin/create','MedecinController@create');
Route::post('medecin','MedecinController@store');
Route::get('medecin/{id}/edit','MedecinController@edit');
Route::put('medecin/{id}','MedecinController@update');
Route::delete('medecin/{id}','MedecinController@destroy');

Route::get('educatrice','EducatriceController@index');
Route::get('educatrice/create','EducatriceController@create');
Route::post('educatrice','EducatriceController@store');
Route::get('educatrice/{id}/edit','EducatriceController@edit');
Route::put('educatrice/{id}','EducatriceController@update');
Route::delete('educatrice/{id}','EducatriceController@destroy');

Route::get('psycholoque','PsycholoqueController@index');
Route::get('psycholoque/create','PsycholoqueController@create');
Route::post('psycholoque','PsycholoqueController@store');
Route::get('psycholoque/{id}/edit','PsycholoqueController@edit');
Route::put('psycholoque/{id}','PsycholoqueController@update');
Route::delete('psycholoque/{id}','PsycholoqueController@destroy');

Route::get('parents','ParentController@index');
Route::get('parents/create','ParentController@create');
Route::post('parents','ParentController@store');
Route::get('parents/{id}/edit','ParentController@edit');
Route::put('parents/{id}','ParentController@update');
Route::delete('parents/{id}','ParentController@destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


