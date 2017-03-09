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

Route::get('/api', function () {
    return view('api_query');
});
Auth::routes();

Route::get('/home', 'HomeController@index');


// Route::get('users/\{id}', function(id) {
//     //
// });

Route::get('users/index', 'UserController@index');

Route::get('users/index', 'APIController@UserIndex');

Route::get('api/search/player/name/{region}/{pname}', 'VGAPIController@AddPlayer');

Route::get('api/latest/matches/', 'VGAPIController@GetLatestMatches');
Route::get('api/latest/matches/{region}', 'VGAPIController@GetLatestMatches');

Route::get('api/special/{player}', 'VGAPIController@GetSpecialMatch');

Route::group(['prefix' => 'data'], function() {
    //
    Route::get('proteams', 'APIController@GetProTeamRosters')->middleware('cors');
    //Route::any('proteams', 'APIController@GetProTeamRosters');

});

// Route::