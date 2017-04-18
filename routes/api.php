<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * Rotas de usuário...
 */
Route::post('/loginApp', '\App\Http\Controllers\UserController@loginApp'); // ok...
Route::get('/allUsers', '\App\Http\Controllers\UserController@allUsers'); // ok...
Route::post('/createUser', '\App\Http\Controllers\UserController@create'); // ok...
Route::post('/updateUser', '\App\Http\Controllers\UserController@update'); // ok...
Route::post('/deleteUser', '\App\Http\Controllers\UserController@delete'); // ok...
Route::post('/setOverall', '\App\Http\Controllers\UserController@setOverall'); // ok...
Route::post('/setGoalsScored', '\App\Http\Controllers\UserController@setGoalsScored'); // ok...
Route::post('/invitePlayers', '\App\Http\Controllers\UserController@invitePlayers');
Route::post('/addUserGroup', '\App\Http\Controllers\UserController@addUserGroup');
Route::post('/makeFriends', '\App\Http\Controllers\UserController@makeFriends');
Route::post('/myFriends', '\App\Http\Controllers\UserController@myFriends');
Route::post('/setConfirmParticipation', '\App\Http\Controllers\GuestPlayersController@setConfirmParticipation');

/*
 * Rotas de eventos...
 */
Route::get('/allEvents', '\App\Http\Controllers\EventController@allEvents'); // ok...
Route::post('/createEvent', '\App\Http\Controllers\EventController@create'); // ok...
Route::post('/updateEvent', '\App\Http\Controllers\EventController@update'); // ok...
Route::post('/deleteEvent', '\App\Http\Controllers\EventController@delete'); // ok...
Route::post('/setEventIsConfirmation', '\App\Http\Controllers\EventController@setIsConfirmation');
Route::post('/eventAttendance', '\App\Http\Controllers\EventController@eventAttendance');

/*
 * Rotas de grupos...
 */
Route::get('/allGroups', '\App\Http\Controllers\GroupController@allGroups');
Route::get('/createGroup', '\App\Http\Controllers\GroupController@create');
Route::get('/updateGroup', '\App\Http\Controllers\GroupController@update');
Route::get('/deleteGroup', '\App\Http\Controllers\GroupController@delete');