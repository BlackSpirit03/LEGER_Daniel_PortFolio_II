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
Route::middleware('auth')->prefix('admin')->group(function () {
	Route::resource('messages', 'Admin\MessageController', ['except'=>['show','destroy']]);
	Route::get('messages/{message}','Admin\MessageController@destroy')->name('messages.destroy');

	Route::resource('skills', 'Admin\SkillController', ['except'=>['show','destroy']]);
	Route::get('skills/{skill}','Admin\SkillController@destroy')->name('skills.destroy');

	Route::resource('professionals', 'Admin\ProfessionalController', ['except'=>['show','destroy']]);
	Route::get('professionals/{professional}','Admin\ProfessionalController@destroy')->name('professionals.destroy');

	Route::resource('projects', 'Admin\ProjectController', ['except'=>['show','destroy']]);
	Route::get('projects/{project}','Admin\ProjectController@destroy')->name('projects.destroy');

	Route::resource('personals', 'Admin\PersonalController', ['except'=>['show','destroy']]);
	Route::get('personals/{personal}','Admin\PersonalController@destroy')->name('personals.destroy');
});


