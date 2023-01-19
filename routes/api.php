<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DeathController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('fetch-data', 'IndexController@fetchData');
// Route::get('fetch-post', 'PostController@getPost');
Route::get('fetch-death/{id}', 'DeathController@getDeath');
Route::get('fetch-birth/{id}', 'BirthController@getBirth');
Route::get('fetch-marriage/{id}', 'MarriageController@getMarriage');
Route::get('fetch-migration/{id}', 'MigrationController@getMigration');
