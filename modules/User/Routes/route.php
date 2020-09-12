<?php
/**
 * Routes Users.
 */

Route::resource('user/module', 'ModuleController', array('only' => array('index')))->middleware(['auth', 'permission']);
