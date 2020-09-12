<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/v1/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/auth/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RHZ95aHhyIuV2LiA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/auth/partner/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7ykZW40w83kX0XOF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Km87lEonpafwHo3o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/module' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'module.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/persona/guest/bulk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OT1KkQzUMfcidEjB',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yRfMaLPayUhI6Bmh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/persona/attendant/bulk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MxkG8wSKk07Od2Yf',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::93iADwZnJSKQ8W5Y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/persona/manager/bulk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sUgvyNzSTJSGstBC',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jlwl8pKm9E49zy9a',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/persona/agent/bulk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rikVBmRtiGEQZ8zz',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NDJ92yOQGImIehgm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/persona/guest' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'guest.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'guest.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/persona/attendant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendant.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attendant.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/persona/manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manager.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'manager.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/persona/agent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'agent.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/booking/hotel/bulk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YytDezPienqgGdOV',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aLkdvMPR7XP1hj4Y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/booking/bedroom/bulk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zu6KSjpCDWnWZmfi',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y32hZEFvWhj3CAAe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/booking/hotel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hotel.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hotel.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/booking/bedroom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bedroom.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bedroom.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/booking/reserva' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reserva.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reserva.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/utility/state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lkgprDK7GP8cNoqb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/v1/(?|persona/(?|guest/([^/]++)(?|(*:42))|a(?|ttendant/([^/]++)(?|(*:74))|gent/([^/]++)(?|(*:98)))|manager/([^/]++)(?|(*:126)))|booking/(?|hotel/([^/]++)(?|(*:164))|bedroom/([^/]++)(?|(*:192))|reserva/([^/]++)(?|(*:220)))|utility/(?|co(?|ntains/([^/]++)/([^/]++)/([^/]++)(*:279)|unt/([^/]++)(*:299))|state/city/([^/]++)(*:327))))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'guest.show',
          ),
          1 => 
          array (
            0 => 'guest',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'guest.update',
          ),
          1 => 
          array (
            0 => 'guest',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'guest.destroy',
          ),
          1 => 
          array (
            0 => 'guest',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      74 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendant.show',
          ),
          1 => 
          array (
            0 => 'attendant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attendant.update',
          ),
          1 => 
          array (
            0 => 'attendant',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'attendant.destroy',
          ),
          1 => 
          array (
            0 => 'attendant',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      98 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.show',
          ),
          1 => 
          array (
            0 => 'agent',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'agent.update',
          ),
          1 => 
          array (
            0 => 'agent',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'agent.destroy',
          ),
          1 => 
          array (
            0 => 'agent',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manager.show',
          ),
          1 => 
          array (
            0 => 'manager',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'manager.update',
          ),
          1 => 
          array (
            0 => 'manager',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'manager.destroy',
          ),
          1 => 
          array (
            0 => 'manager',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hotel.show',
          ),
          1 => 
          array (
            0 => 'hotel',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'hotel.update',
          ),
          1 => 
          array (
            0 => 'hotel',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'hotel.destroy',
          ),
          1 => 
          array (
            0 => 'hotel',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bedroom.show',
          ),
          1 => 
          array (
            0 => 'bedroom',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bedroom.update',
          ),
          1 => 
          array (
            0 => 'bedroom',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'bedroom.destroy',
          ),
          1 => 
          array (
            0 => 'bedroom',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reserva.show',
          ),
          1 => 
          array (
            0 => 'reserva',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reserva.update',
          ),
          1 => 
          array (
            0 => 'reserva',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'reserva.destroy',
          ),
          1 => 
          array (
            0 => 'reserva',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4pivY1OQu69rMmSH',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'field',
            2 => 'value',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cUAXWwj5eEWM9cU7',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DJZgGBUXwZDLmYiB',
          ),
          1 => 
          array (
            0 => 'state',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/auth/login',
      'action' => 
      array (
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@login',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@login',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'v1/auth/',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::RHZ95aHhyIuV2LiA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/auth/refresh',
      'action' => 
      array (
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@refresh',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@refresh',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'v1/auth/',
        'where' => 
        array (
        ),
        'as' => 'generated::RHZ95aHhyIuV2LiA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::7ykZW40w83kX0XOF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/auth/partner/me',
      'action' => 
      array (
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@me',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@me',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'v1/auth/',
        'where' => 
        array (
        ),
        'as' => 'generated::7ykZW40w83kX0XOF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::Km87lEonpafwHo3o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/auth/logout',
      'action' => 
      array (
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@logout',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@logout',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'v1/auth/',
        'where' => 
        array (
        ),
        'as' => 'generated::Km87lEonpafwHo3o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'module.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/user/module',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'module.index',
        'uses' => 'Modules\\User\\Http\\Controllers\\ModuleController@index',
        'controller' => 'Modules\\User\\Http\\Controllers\\ModuleController@index',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::OT1KkQzUMfcidEjB' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/persona/guest/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkDelete',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkDelete',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::OT1KkQzUMfcidEjB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::yRfMaLPayUhI6Bmh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/persona/guest/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkUpdate',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkUpdate',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::yRfMaLPayUhI6Bmh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::MxkG8wSKk07Od2Yf' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/persona/attendant/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkDelete',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkDelete',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::MxkG8wSKk07Od2Yf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::93iADwZnJSKQ8W5Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/persona/attendant/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkUpdate',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkUpdate',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::93iADwZnJSKQ8W5Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::sUgvyNzSTJSGstBC' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/persona/manager/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkDelete',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkDelete',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::sUgvyNzSTJSGstBC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::Jlwl8pKm9E49zy9a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/persona/manager/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkUpdate',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@bulkUpdate',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::Jlwl8pKm9E49zy9a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::rikVBmRtiGEQZ8zz' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/persona/agent/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AgentController@bulkDelete',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AgentController@bulkDelete',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::rikVBmRtiGEQZ8zz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::NDJ92yOQGImIehgm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/persona/agent/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AgentController@bulkUpdate',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AgentController@bulkUpdate',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::NDJ92yOQGImIehgm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'guest.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/persona/guest',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'guest.index',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@index',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@index',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'guest.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/persona/guest',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'guest.store',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@store',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@store',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'guest.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/persona/guest/{guest}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'guest.show',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@show',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@show',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'guest.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/persona/guest/{guest}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'guest.update',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@update',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@update',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'guest.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/persona/guest/{guest}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'guest.destroy',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\GuestController@destroy',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\GuestController@destroy',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'attendant.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/persona/attendant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'attendant.index',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AttendantController@index',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AttendantController@index',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'attendant.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/persona/attendant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'attendant.store',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AttendantController@store',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AttendantController@store',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'attendant.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/persona/attendant/{attendant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'attendant.show',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AttendantController@show',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AttendantController@show',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'attendant.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/persona/attendant/{attendant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'attendant.update',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AttendantController@update',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AttendantController@update',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'attendant.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/persona/attendant/{attendant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'attendant.destroy',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AttendantController@destroy',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AttendantController@destroy',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'manager.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/persona/manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'manager.index',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\ManagerController@index',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\ManagerController@index',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'manager.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/persona/manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'manager.store',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\ManagerController@store',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\ManagerController@store',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'manager.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/persona/manager/{manager}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'manager.show',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\ManagerController@show',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\ManagerController@show',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'manager.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/persona/manager/{manager}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'manager.update',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\ManagerController@update',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\ManagerController@update',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'manager.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/persona/manager/{manager}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'manager.destroy',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\ManagerController@destroy',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\ManagerController@destroy',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'agent.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/persona/agent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'agent.index',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AgentController@index',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AgentController@index',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'agent.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/persona/agent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'agent.store',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AgentController@store',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AgentController@store',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'agent.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/persona/agent/{agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'agent.show',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AgentController@show',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AgentController@show',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'agent.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/persona/agent/{agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'agent.update',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AgentController@update',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AgentController@update',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'agent.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/persona/agent/{agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'agent.destroy',
        'uses' => 'Modules\\Persona\\Http\\Controllers\\AgentController@destroy',
        'controller' => 'Modules\\Persona\\Http\\Controllers\\AgentController@destroy',
        'namespace' => 'Modules\\Persona\\Http\\Controllers',
        'prefix' => 'v1/persona',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::YytDezPienqgGdOV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/booking/hotel/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Booking\\Http\\Controllers\\HotelController@bulkDelete',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\HotelController@bulkDelete',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::YytDezPienqgGdOV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::aLkdvMPR7XP1hj4Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/booking/hotel/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Booking\\Http\\Controllers\\HotelController@bulkUpdate',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\HotelController@bulkUpdate',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::aLkdvMPR7XP1hj4Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::Zu6KSjpCDWnWZmfi' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/booking/bedroom/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@bulkDelete',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@bulkDelete',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::Zu6KSjpCDWnWZmfi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::y32hZEFvWhj3CAAe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/booking/bedroom/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'uses' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@bulkUpdate',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@bulkUpdate',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::y32hZEFvWhj3CAAe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'hotel.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/booking/hotel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'hotel.index',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\HotelController@index',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\HotelController@index',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'hotel.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/booking/hotel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'hotel.store',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\HotelController@store',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\HotelController@store',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'hotel.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/booking/hotel/{hotel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'hotel.show',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\HotelController@show',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\HotelController@show',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'hotel.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/booking/hotel/{hotel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'hotel.update',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\HotelController@update',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\HotelController@update',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'hotel.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/booking/hotel/{hotel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'hotel.destroy',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\HotelController@destroy',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\HotelController@destroy',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'bedroom.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/booking/bedroom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'bedroom.index',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@index',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@index',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'bedroom.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/booking/bedroom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'bedroom.store',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@store',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@store',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'bedroom.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/booking/bedroom/{bedroom}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'bedroom.show',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@show',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@show',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'bedroom.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/booking/bedroom/{bedroom}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'bedroom.update',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@update',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@update',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'bedroom.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/booking/bedroom/{bedroom}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'bedroom.destroy',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@destroy',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\BedroomController@destroy',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'reserva.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/booking/reserva',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'reserva.index',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\ReservaController@index',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\ReservaController@index',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'reserva.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/booking/reserva',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'reserva.store',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\ReservaController@store',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\ReservaController@store',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'reserva.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/booking/reserva/{reserva}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'reserva.show',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\ReservaController@show',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\ReservaController@show',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'reserva.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/booking/reserva/{reserva}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'reserva.update',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\ReservaController@update',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\ReservaController@update',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'reserva.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/booking/reserva/{reserva}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'reserva.destroy',
        'uses' => 'Modules\\Booking\\Http\\Controllers\\ReservaController@destroy',
        'controller' => 'Modules\\Booking\\Http\\Controllers\\ReservaController@destroy',
        'namespace' => 'Modules\\Booking\\Http\\Controllers',
        'prefix' => 'v1/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::4pivY1OQu69rMmSH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/utility/contains/{table}/{field}/{value}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'uses' => 'Modules\\Utility\\Http\\Controllers\\ContainsController@contains',
        'controller' => 'Modules\\Utility\\Http\\Controllers\\ContainsController@contains',
        'namespace' => 'Modules\\Utility\\Http\\Controllers',
        'prefix' => 'v1/utility/',
        'where' => 
        array (
        ),
        'as' => 'generated::4pivY1OQu69rMmSH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::cUAXWwj5eEWM9cU7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/utility/count/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'uses' => 'Modules\\Utility\\Http\\Controllers\\CountController@count',
        'controller' => 'Modules\\Utility\\Http\\Controllers\\CountController@count',
        'namespace' => 'Modules\\Utility\\Http\\Controllers',
        'prefix' => 'v1/utility/',
        'where' => 
        array (
        ),
        'as' => 'generated::cUAXWwj5eEWM9cU7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::lkgprDK7GP8cNoqb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/utility/state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'uses' => 'Modules\\Utility\\Http\\Controllers\\StateController@index',
        'controller' => 'Modules\\Utility\\Http\\Controllers\\StateController@index',
        'namespace' => 'Modules\\Utility\\Http\\Controllers',
        'prefix' => 'v1/utility/',
        'where' => 
        array (
        ),
        'as' => 'generated::lkgprDK7GP8cNoqb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
    'generated::DJZgGBUXwZDLmYiB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/utility/state/city/{state}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'uses' => 'Modules\\Utility\\Http\\Controllers\\StateController@getCitiesByState',
        'controller' => 'Modules\\Utility\\Http\\Controllers\\StateController@getCitiesByState',
        'namespace' => 'Modules\\Utility\\Http\\Controllers',
        'prefix' => 'v1/utility/',
        'where' => 
        array (
        ),
        'as' => 'generated::DJZgGBUXwZDLmYiB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
    ),
  ),
)
);
