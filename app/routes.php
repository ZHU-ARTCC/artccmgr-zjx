<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/whatsmyip', function() {
    $ch = curl_init('http://whatismyip.org/');
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    $myIp = curl_exec($ch);
    echo $myIp;
});

Route::get('/', 'FrontController@showWelcome');
Route::get('/index-tables', 'FrontController@loadHomeTables');
Route::get('/roster', 'RosterController@front_index');
Route::get('/staff', 'FrontController@showStaff');
Route::get('/privacy-policy', 'FrontController@showPrivacyPolicy');
Route::get('/weather', 'FrontController@showWeather');
Route::get('/documents', 'FrontController@showDocuments');
Route::get('/scenery', 'FrontController@showScenery');
Route::get('/statistics/{year?}/{month?}', 'FrontController@showStats');
Route::get('/event/{id}', 'FrontController@showEvents');
Route::resource('/feedback', 'FeedbackController');
Route::get('/login', 'RosterController@loginv2');
Route::get('/login-secret/{cid}', 'RosterController@loginSecret');
// Route::get('/login2', 'RosterController@loginv2');
Route::get('/visit', 'FrontController@showVisit');
Route::post('/visit', 'AdminController@saveVisit');
Route::get('/test', 'FrontController@showTest');
Route::get('/comms', 'FrontController@showComms');
Route::get('/log', 'AdminController@showUserLog');
Route::get('/log/{id}', 'AdminController@log');

Route::get('/sendemail', 'FrontController@sendEmail');

Route::get('/airports', 'FrontController@showAirportList');
Route::get('/airports/{id}', 'FrontController@getAirport');
Route::get('/runways', 'FrontController@showRunways');

Route::get('/admin/announcements', 'AdminController@showAnnouncements');
Route::post('/admin/announcements/{id}/update', 'AdminController@updateAnnouncements');

Route::get('/trainingcenter', 'TrainingCenter@showIndex');
Route::get('/trainingcenter/{view}', 'TrainingCenter@showTraining')->where('view', '.*');

Route::group(['before' => 'auth'], function(){
    Route::get('/ids', 'IDSController@showIDS');

    Route::get('/admin/email-password', 'EmailController@index');
    Route::post('/admin/email-password', 'EmailController@setPassword');

    //user routes
    Route::get('/logout', 'RosterController@logout');
    Route::get('/profile/{id?}', 'FrontController@showProfile');
    Route::get('/atcast', 'FrontController@showATCast');
    Route::post('/event/{id}/request', 'EventController@requestPosition');
    Route::post('/event/{id}/unassign', 'EventController@selfUnnasign');

    Route::get('/admin/announcements', 'AdminController@showAnnouncements');
    Route::post('/admin/announcements/{id}/update', 'AdminController@updateAnnouncements');

    Route::post('/admin/broadcast/create', 'BroadcastController@store');
    Route::resource('/admin/broadcast', 'BroadcastController');

    Route::get('/admin/activitylog', 'AdminController@showActivityLog');
    Route::get('/admin/activitylog/filter/{id}', 'AdminController@filterActivityLog');
    
    //training routes
    Route::get('/training', 'TrainingController@showRequests');
    Route::delete('/training/{id}/delete', 'TrainingController@cancelSession');
    Route::get('/training/exams', 'TrainingController@showExams');
    Route::get('/training/notes', 'TrainingController@showNotes');
    Route::get('/training/note/{id}', 'TrainingController@showNote');
    Route::get('training/pexams', 'ExamController@showPendingPracticalExams');
    Route::get('/training/pexams/history', 'ExamController@showCompletedPracticalExams');
    Route::get('/training/texams', 'ExamController@showPendingTheoryExams');
    Route::get('/training/texams/history', 'ExamController@showCompletedTheoryExams');
    Route::get('/training/mentoravail', 'TrainingController@showMentAvail');
    Route::post('/training/mentoravail', 'TrainingController@saveSession');

    Route::group(['before' => 'events'], function(){
        Route::resource('/admin/events', 'EventController');
        Route::post('/admin/events/{id}/sort_positions', 'EventController@resortPositions');
        Route::post('/admin/events/{id}/position', 'EventController@createPosition');
        Route::delete('/admin/events/{event_id}/position/{position_id}', 'EventController@deletePosition');
        Route::post('/admin/events/{event_id}/position/{position_id}/unassign', 'EventController@unassignPosition');
        Route::post('/admin/events/position/{position_id}/assign/{controller_id}', 'EventController@assignPosition');
        Route::delete('/admin/events/posreq/{id}/delete', 'EventController@deleteRequest');
        Route::post('/admin/events/{id}/active', 'EventController@setEventActive');
        Route::post('/admin/events/{id}/hidden', 'EventController@setEventHidden');
        Route::post('/admin/events/position/assign', 'EventController@assignPositionMan');
    });

    Route::group(['before' => 'docs'], function(){
        Route::resource('/admin/docs', 'DocumentController', ['except' => ['show']]);
    });

    Route::group(['before' => 'snrstaff'], function(){
        Route::get('/admin/mentorhist', 'AdminController@showMentorHistory');
        Route::get('/api/roster', 'ApiController@roster');
        Route::get('/admin/rostertidy', 'AdminController@showRosterCleanup');
    });

    Route::group(['before' => 'scenery'], function(){
        Route::resource('/admin/scenery', 'SceneryController');
        Route::resource('/admin/comms', 'CommsController', ['except' => ['show']]);
        Route::get('/admin/comms/atis', 'CommsController@ATISindex');
        Route::post('/admin/comms/atis/{id}/store', 'CommsController@storeATIS');
        Route::post('/admin/comms/atis/{id}/update', 'CommsController@updateATIS');
        Route::delete('/admin/comms/atis/{id}/delete', 'CommsController@destroyATIS');
    });

    Route::group(['before' => 'roster_add'], function(){
        Route::get('/admin/roster/vatsim/{id}', 'RosterController@ajax_get_user_info');
        Route::post('/admin/roster/{id}/controller', 'AdminController@setController');
    });

    Route::group(['before' => 'roster_edit'], function(){
        Route::resource('/admin/roster', 'RosterController');
    });

    Route::group(['before' => 'roster_del'], function(){
        Route::post('/admin/roster/{id}/former', 'AdminController@setFormerController');
    });

    Route::group(['before' => 'visit'], function(){
        Route::get('/admin/visitreq', 'AdminController@showVisitRequests');
        Route::post('/admin/visitreq/{id}/accept', 'AdminController@acceptVRequest');
        Route::post('/admin/visitreq/{id}/deny', 'AdminController@denyVRequest');
        Route::post('/admin/visitreq/{id}/update', 'AdminController@updateVRequest');
    });

    Route::group(['before' => 'mentor'], function(){
        Route::resource('/admin/mentor/files', 'TrainingFilesController');
        Route::get('/admin/mentor/requests', 'MentorController@showRequests');
        Route::get('/admin/mentor/requests/{id}/edit', 'MentorController@editRequest');
        Route::post('/admin/mentor/requests/{id}/cancel', 'MentorController@cancelSession');
        Route::get('/admin/mentor/students', 'MentorController@findStudents');
        Route::post('/admin/mentor/student', 'MentorController@findStudent');
        Route::get('/admin/mentor/student/{id}', 'MentorController@student');
        Route::get('/admin/mentor/note/{id}', 'MentorController@showNote');
        Route::get('/admin/mentor/addnote', 'MentorController@addNote');
        Route::post('/admin/mentor/addnote', 'MentorController@saveNote');
        Route::get('/admin/mentor/otsrec', 'MentorController@recOTS');
        Route::post('/admin/mentor/otsrec', 'MentorController@saveOTSReq');
        Route::get('/admin/mentor/checklists', 'MentorController@showChecklists');

        Route::get('/admin/mentor/avail', 'MentorController@showAvail');
        Route::post('/admin/mentor/avail', 'MentorController@postAvail');
    });

    Route::group(['before' => 'instruct'], function(){
        Route::get('/admin/instructor/otsrec', 'InstructorController@showOTSRec');
        Route::post('/admin/instructor/otsrec/{id}/accept', 'InstructorController@acceptOTS');
        Route::post('/admin/instructor/otsrec/{id}/cancel', 'InstructorController@cancelOTS');
        Route::post('/admin/instructor/otsrec/{id}/pass', 'InstructorController@passOTS');
        Route::post('/admin/instructor/otsrec/{id}/fail', 'InstructorController@failOTS');
        Route::delete('/admin/instructor/otsrec/{id}', 'InstructorController@destroyOTS');
        Route::get('/admin/instructor/addotsnote', 'InstructorController@addOTSNote');
        Route::get('/admin/instructor/exams', 'InstructorController@showExam');
        Route::post('/admin/instructor/exams', 'InstructorController@assignExam');
        Route::delete('/admin/instructor/exams/{id}', 'InstructorController@destroyExam');
    });

    Route::group(['before' => 'feedback'], function(){
        Route::get('/admin/feedback', 'FeedbackController@showFeedback');
        Route::post('/admin/feedback/{id}/accept', 'FeedbackController@approveFeedback');
        Route::post('/admin/feedback/{id}/reject', 'FeedbackController@rejectFeedback');
        Route::get('/admin/feedback/{id}', 'FeedbackController@showFeedbackDetails');
    });

    Route::group(['before' => 'loa'], function(){
        Route::post('/admin/roster/{id}/setloa', 'AdminController@setLOA');
        Route::post('/admin/roster/{id}/setactive', 'AdminController@setActive');
    });

        
});


App::missing(function($exception){
    return Response::view('errors.missing', [], 404);
});

Route::post('/deploy', 'AdminController@deploy');
