<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('/store','App\Http\Controllers\ClientsController@storeFunction');
Route::delete('/delete/{id}','App\Http\Controllers\ClientsController@deleteFunction');
Route::get('/update/{id}','App\Http\Controllers\ClientsController@updateByIdFunction');
Route::get('/showall', [App\Http\Controllers\ClientsController::class, 'showFunction']);
Route::get('/showid/{id}','App\Http\Controllers\ClientsController@showByIdFunction');

Route::post('/agentStore','App\Http\Controllers\AgentsController@agentStoreFunction');
Route::delete('/agentDelete/{id}','App\Http\Controllers\AgentsController@agentDeleteFunction');
Route::get('/agentUpdate/{id}','App\Http\Controllers\AgentsController@agentUpdateFunction');
Route::get('/agentShow','App\Http\Controllers\AgentsController@agentShowFunction');
Route::get('/agentShowId/{id}','App\Http\Controllers\AgentsController@agentShowByIdFunction');

Route::post('/superAgentStore','App\Http\Controllers\SuperAgController@superAgentStoreFunction');
Route::delete('/deleteSuperAgent/{id}','App\Http\Controllers\SuperAgController@superAgentDeleteFunction');
Route::get('/updateSuperAgent/{id}','App\Http\Controllers\SuperAgController@superAgentUpdateFunction');
Route::get('/showAllSuperAgents','App\Http\Controllers\SuperAgController@showAllSuperAgentsFunction');
Route::get('/showByIdSuperAgents/{id}','App\Http\Controllers\SuperAgController@showByIdSuperAgentsFunction');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
