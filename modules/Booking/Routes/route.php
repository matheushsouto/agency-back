<?php
/**
 * Routes Hotels.
 */

Route::group(['middleware' => ['auth', 'permission']], function () {

    /** Routes in multiple edit and delete */
    Route::delete('booking/hotel/bulk', 'HotelController@bulkDelete');
    Route::post('booking/hotel/bulk', 'HotelController@bulkUpdate');

    Route::delete('booking/bedroom/bulk', 'BedroomController@bulkDelete');
    Route::post('booking/bedroom/bulk', 'BedroomController@bulkUpdate');

    /** Routes in create update edit and delete   */
    Route::resource('booking/hotel', 'HotelController', array('only' => array('index', 'show', 'store', 'update', 'destroy')));
    Route::resource('booking/bedroom', 'BedroomController', array('only' => array('index', 'show', 'store', 'update', 'destroy')));
    Route::resource('booking/reserva', 'ReservaController', array('only' => array('index', 'show', 'store', 'update', 'destroy')));
});

