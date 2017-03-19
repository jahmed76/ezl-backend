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
    // return 
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

//Route::post('register', 'RegisterController');

Route::group(['prefix' => 'data'], function() {
    //
    Route::get('proteams', 'APIController@GetProTeamRosters')->middleware('cors');
    //Route::any('proteams', 'APIController@GetProTeamRosters');

});

Route::group(['prefix' => 'api'], function() {
    //
    Route::get('search/player/name/{region}/{pname}', 'VGAPIController@AddPlayer')->middleware('cors');

    Route::get('latest/matches/', 'VGAPIController@GetLatestMatches')->middleware('cors');
    Route::get('latest/matches/{region}', 'VGAPIController@GetLatestMatches')->middleware('cors');

    Route::get('special/{player}', 'VGAPIController@GetSpecialMatch')->middleware('cors');
});


Route::group(['prefix' => 'fantasy'], function() {
    //
    
    
    Route::get('room/add', 'FantasyController@AddRoom');
    
    // Route::post('room/add', 'FantasyController@AddRoom');
    Route::post('room/add/{options}', 'FantasyController@AddRoom');
    
});


// Route::
// Auth::routes();

// Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
