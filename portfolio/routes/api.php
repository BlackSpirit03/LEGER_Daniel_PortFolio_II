<?php
// Made or Customized by DLEGER

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Professional;
use App\Models\Personal;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Initial Route made by Laravel for AUTH
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Additional routes by DLEGER (for API used)
Route::middleware('auth:api')->get('/skills', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Skill::get();
});

Route::middleware('auth:api')->get('/about', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return User::get();
});

Route::middleware('auth:api')->get('/projects', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Project::get();
});

Route::middleware('auth:api')->get('/professionals', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Professional::get();
});

Route::middleware('auth:api')->get('/personals', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return Personal::get();
});



