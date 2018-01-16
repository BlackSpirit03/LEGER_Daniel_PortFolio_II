<?php
// Made or Customized by DLEGER

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

// Routes Validated
Route::get('/', 'HomePageController@index')->name('home');
Route::post('/', 'HomePageController@sendmessage')->name('sendmessage');

// Routes for Language
Route::name('language')->get('language/{lang}', 'HomePageController@language');

// Routes ajouté par Laravel pour l'authentification
Auth::routes();
Route::get('/home', 'HomePageController@index');	
Route::get('/admin', 'HomeController@index')->name('admin');

// Routes for Admin Parts only after authentication
Route::get('/admin/messages','Admin\MessageController@index')->middleware(['auth'])->name('messages');
Route::get('/admin/messages/{message}','Admin\MessageController@destroy')->middleware(['auth'])->name('messages_del');

Route::get('/admin/skills','Admin\SkillController@index')->middleware(['auth'])->name('skills');

Route::get('/admin/professionals','Admin\ProfessionalController@index')->middleware(['auth'])->name('professionals');

Route::get('/admin/projects','Admin\ProjectController@index')->middleware(['auth'])->name('projects');

Route::get('/admin/personals','Admin\PersonalController@index')->middleware(['auth'])->name('personals');
Route::get('/admin/personals/{message}','Admin\PersonalController@destroy')->middleware(['auth'])->name('personals_del');

// Routes de TEST
Route::get('/test', 'TestController@index')->name('test');
Route::get('/test/{message}', 'TestController@destroy')->name('testdestroy');
Route::get('/test2', 'Test2Controller@index')->name('test2');

