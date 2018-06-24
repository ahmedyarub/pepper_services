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

Route::get('/emotions/emotions_table', 'EmotionsController@emotions_table');
Route::get('/emotions/suggestions_table', 'EmotionsController@suggestions_table');
Route::get('/emotions/emotions_chart', 'EmotionsController@emotions_chart');
Route::post('/emotions/send_emotion', 'EmotionsController@send_emotion');
Route::get('/emotions/emotion_image/{id}', 'EmotionsController@emotion_image');
Route::get('/emotions/suggestion_video/{id}', 'EmotionsController@suggestion_video');
Route::post('/emotions/post_emotion_image/{emotion}', 'EmotionsController@post_emotion_image');
Route::post('/emotions/post_suggestion_video', 'EmotionsController@post_suggestion_video');
