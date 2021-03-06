<?php

use Illuminate\Http\Request;

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

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
Route::post('/loginApp', '\App\Http\Controllers\UserController@loginApp'); // ok
Route::post('/isLogged', '\App\Http\Controllers\UserController@isLogged'); // ok
Route::post('/logout', '\App\Http\Controllers\UserController@logout'); // ok
Route::get('/allUsers', '\App\Http\Controllers\UserController@allUsers'); // ok
Route::post('/returnUser', '\App\Http\Controllers\UserController@returnUser'); // ok
Route::post('/createUser', '\App\Http\Controllers\UserController@create'); //
Route::post('/updateUser', '\App\Http\Controllers\UserController@update'); // ok
Route::post('/changePassword', '\App\Http\Controllers\UserController@changePassword'); // ok
Route::post('/deleteUser', '\App\Http\Controllers\UserController@delete'); // ok
//Route::post('/setOverall', '\App\Http\Controllers\UserController@setOverall');
//Route::post('/setGoalsScored', '\App\Http\Controllers\UserController@setGoalsScored');
Route::post('/invitePlayers', '\App\Http\Controllers\UserController@invitePlayers'); // ok
Route::post('/addUserGroup', '\App\Http\Controllers\UserController@addUserGroup'); // ok
Route::post('/makeFriends', '\App\Http\Controllers\UserController@makeFriends'); // ok
Route::post('/removeFriends', '\App\Http\Controllers\UserController@removeFriends'); // ok
Route::post('/myFriends', '\App\Http\Controllers\UserController@myFriends'); // ok
Route::post('/setConfirmParticipation', '\App\Http\Controllers\GuestPlayersController@setConfirmParticipation'); // ok
Route::post('/addAvatar', '\App\Http\Controllers\UserController@addAvatar'); // ok

/*
 * Rotas de eventos...
 */
Route::get('/allEvents', '\App\Http\Controllers\EventController@allEvents'); // ok
Route::post('/createEvent', '\App\Http\Controllers\EventController@create'); //
Route::post('/updateEvent', '\App\Http\Controllers\EventController@update'); // ok
Route::post('/deleteEvent', '\App\Http\Controllers\EventController@delete'); // ok
Route::post('/setEventIsConfirmation', '\App\Http\Controllers\EventController@setIsConfirmation'); // ok
Route::post('/eventAttendance', '\App\Http\Controllers\EventController@eventAttendance'); // ok
Route::post('/returnEvent', '\App\Http\Controllers\EventController@returnEvent'); // ok
Route::post('/addEventImage', '\App\Http\Controllers\EventController@addEventImage'); // ok

/*
 * Rotas de grupos...
 */
Route::get('/allGroups', '\App\Http\Controllers\GroupController@allGroups'); // ok
Route::post('/createGroup', '\App\Http\Controllers\GroupController@create'); // ok
Route::post('/updateGroup', '\App\Http\Controllers\GroupController@update'); // ok
Route::post('/returnGroup', '\App\Http\Controllers\GroupController@returnGroup'); // ok
Route::post('/deleteGroup', '\App\Http\Controllers\GroupController@delete'); // ok

/*
 * Rotas de media...
 */
//Route::post('/upload-media', '\App\Http\Controllers\MediaController@uploadMedia');
//Route::post('/delete-media', '\App\Http\Controllers\MediaController@deleteMedia');