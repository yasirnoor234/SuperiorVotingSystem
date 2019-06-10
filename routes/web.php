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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/private', 'HomeController@private')->name('private');
Route::get('/users', 'HomeController@users')->name('users');
Route::get('messages', 'MessageController@fetchMessages');
Route::post('messages', 'MessageController@sendMessage');
Route::get('/private-messages/{user}', 'MessageController@privateMessages')->name('privateMessages');
Route::post('/private-messages/{user}', 'MessageController@sendPrivateMessage')->name('privateMessages.store');


//Route::resource('teacher/event', 'Teacher\EventCreateController')->middleware('teacher.auth');
//Route::resource('teacher/seminar', 'Teacher\SeminarCreateController')->middleware('teacher.auth');
//Route::resource('teacher/meeting', 'Teacher\MeetingArrangeController')->middleware('teacher.auth');
//Route::get('teacher/meeting/show', 'Teacher\MeetingArrangeController@show')->name('teacher.meeting');

Route::resource('teacher/profile', 'Teacher\ProfileController');

//Cast Vote
//Route::resource('admin/voters', 'Admin\VotersController');

//Route::resource('admin/candidate', 'Admin\CandidateController')->middleware('auth');
////Route::resource('student/voter', 'Student\VoterController');
//Route::resource('student/voter', 'Admin\ResultController')->middleware('student.auth');
//Route::resource('/voter', 'Admin\ResultController');

//Not Correct//Route::get('student/voter', 'Admin\ResultController');
Route::post('student/voter', 'Admin\ResultController@store');
Route::get('student/voter/cast/create', 'Admin\ResultController@create')->name('student.cast.create');
Route::post('student/voter/cast/create', 'Admin\ResultController@store');


//Route::get('admin/candidate','Admin\CandidateController@index')->name('admin.candidate.index');
//Route::get('admin/candidate/create','Admin\CandidateController@create')->name('admin.candidate.create');

//Events
Route::resource('teacher/events', 'Teacher\EventsController')->middleware('teacher.auth');
Route::resource('student/event-details', 'Student\EventDetailsController')->middleware('student.auth');
//Route::get('teacher/events/edit','Teacher\EventsController')->name('teacher.events.edit');

//Seminars
Route::resource('teacher/seminars', 'Teacher\SeminarsController')->middleware('teacher.auth');
Route::resource('student/seminar-details', 'Student\SeminarDetailsController')->middleware('student.auth');

//Route::get('teacher/seminars/{id}/edit','Teacher\SeminarsController@edit')->name('teacher.seminars.edit');

//Meetings
Route::resource('teacher/meetings', 'Teacher\MeetingsController')->middleware('teacher.auth');
Route::resource('student/meeting-details', 'Student\MeetingDetailsController')->middleware('student.auth');
//Route::get('teacher/meetings/show', 'Teacher\MeetingsController@show')->name('teacher.meeting');

Route::get('student/profile',function (){
   return view('student.profile.edit');
});

//Feedback Students
Route::resource('student/feedbacks', 'Student\FeedbacksController')->middleware('student.auth');
Route::resource('admin/student/suggestions', 'Student\SuggestionsController');

//Feedback Teachers
//Route::resource('teacher/feedbacks', 'Teacher\FeedbacksController');
//Route::resource('admin/teacher/suggestions', 'Student\SuggestionsController');

//Chat
//Route::get('chat','ChatsController@chat');
//Route::get('send','ChatsController@send');

Auth::routes();

//Chat
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/friends', 'FriendController@index')->middleware('auth');
Route::get('/chat', 'ChatController@index')->middleware('auth')->name('chat.index');
Route::get('/chat/{id}', 'ChatController@show')->middleware('auth')->name('chat.show');
Route::post('/chat/getChat', 'ChatController@getChat')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

