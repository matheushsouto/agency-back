<?php
/**
 * Routes Personas.
 */

Route::group(['middleware' => ['auth', 'permission']], function () {

    /** Routes in multiple edit and delete */
    Route::delete('persona/guest/bulk', 'GuestController@bulkDelete');
    Route::post('persona/guest/bulk', 'GuestController@bulkUpdate');

    Route::delete('persona/attendant/bulk', 'GuestController@bulkDelete');
    Route::post('persona/attendant/bulk', 'GuestController@bulkUpdate');

    Route::delete('persona/manager/bulk', 'GuestController@bulkDelete');
    Route::post('persona/manager/bulk', 'GuestController@bulkUpdate');

    Route::delete('persona/agent/bulk', 'AgentController@bulkDelete');
    Route::post('persona/agent/bulk', 'AgentController@bulkUpdate');

    /** Routes in create update edit and delete   */
    Route::resource('persona/guest', 'GuestController', array('only' => array('index', 'show', 'store', 'update', 'destroy')));
    Route::resource('persona/attendant', 'AttendantController', array('only' => array('index', 'show', 'store', 'update', 'destroy')));
    Route::resource('persona/manager', 'ManagerController', array('only' => array('index', 'show', 'store', 'update', 'destroy')));
    Route::resource('persona/agent', 'AgentController', array('only' => array('index', 'show', 'store', 'update', 'destroy')));
});

