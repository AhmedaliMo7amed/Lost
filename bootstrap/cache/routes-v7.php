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
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xj79R8gkEv1a7YBn',
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
      '/api/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vzF12XF4QP0htbep',
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
      '/api/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TH14y3Vxt1XRTKkn',
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
      '/api/admin/getUsers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oJh2MKSvfbq0Nxry',
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
      '/api/admin/usersReportsCount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hTv3TGrEfkkJQg7I',
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
      '/api/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eDPg4woHVoUDKF5W',
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
      '/api/user/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xwnxNnagGBbl18my',
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
      '/api/user/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::61Bd9dB3rzcurH5D',
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
      '/api/user/confirm-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sxoKPMRfkd5r9unE',
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
      '/api/user/update-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1v7aUyZjxEGMASew',
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
      '/api/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wf42IR0CVKiZZTPi',
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
      '/api/user/complete-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sgKbemLu1Kem2Cvg',
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
      '/api/user/profile/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5mNvYeUKluRjbRr9',
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
      '/api/user/profile/update-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SkADj06nApd9eg1l',
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
      '/api/user/profile/update-avatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a3bZwO8Toy7FU9nJ',
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
      '/api/user/report/get-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sQvFk1C8o1i9Xxe5',
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
      '/api/user/report/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zx9OTkOeQOjXTPBO',
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
      '/api/user/report/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tSxEsF452zUdWm8u',
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
      '/api/store-owner/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4wKJq2CQ7xxBBRJe',
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
      '/api/store-owner/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X5DRjdM2ovV92O6P',
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
      '/api/store-owner/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8okarUE9nv8xR21h',
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
      '/api/store-owner/confirm-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pq45XppZAZRMCqtR',
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
      '/api/store-owner/update-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::18V25xJRjVil8pkc',
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
      '/api/store-owner/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EjrawMYY0van3EZK',
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
      '/api/store-owner/complete-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uF2mihFOm5427uXu',
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
      '/api/store-owner/profile/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MBxJeHR0KOJij8Bz',
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
      '/api/store-owner/profile/update-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sI4MV4ZIhmJQAC59',
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
      '/api/store-owner/profile/update-avatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eG7edOFBltuKiDMF',
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
      '/api/store-owner/review/get-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jFJ7PqzRsMpciOYQ',
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
      '/api/store-owner/report/get-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vpkyYHYMYvZbOHfp',
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
      '/api/store-owner/report/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RoXEqtKEh6TWLWg7',
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
      '/api/store-owner/report/serialSerach' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bbW7LcECMSc91jbk',
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
      '/api/social/Auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hJ5udqLlzw6nw8jo',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jBXlLQzCBTxllevC',
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
      '/login' => 
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
            '_route' => 'generated::9qTpwoyLSABqCSic',
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
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
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
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
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
            '_route' => 'generated::eDUZ0YtZrBEVINHZ',
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
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
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
            '_route' => 'password.update',
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
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
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
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
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
            '_route' => 'generated::omtSbsFMFBMyETwW',
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
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
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
      0 => '{^(?|/api/(?|admin/(?|getUser/([^/]++)(*:40)|deleteUser/([^/]++)(*:66)|updateUser/([^/]++)(*:92))|user/report/(?|update/([^/]++)(*:130)|show/([^/]++)(*:151)|delete/([^/]++)(*:174)|review/([^/]++)(*:197))|store\\-owner/re(?|view/(?|s(?|ubmit/([^/]++)(*:250)|how/([^/]++)(*:270))|update/([^/]++)(*:294)|delete/([^/]++)(*:317))|port/get/([^/]++)(*:343)))|/password/reset/([^/]++)(*:377))/?$}sDu',
    ),
    3 => 
    array (
      40 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KbIQzQzGkFdK7XhP',
          ),
          1 => 
          array (
            0 => 'id',
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
      66 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PBtwJjAxmyrXMVIb',
          ),
          1 => 
          array (
            0 => 'id',
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
      92 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Js6hMF6EhdRfZuo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KR2YH3F0OMdnjt1e',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6a5zMKaA6guOqCyi',
          ),
          1 => 
          array (
            0 => 'id',
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
      174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C5hrRJO0q9Ms4R0c',
          ),
          1 => 
          array (
            0 => 'id',
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
      197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EFyT7LHjQoEcK8cY',
          ),
          1 => 
          array (
            0 => 'id',
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
      250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1odRen1fhPBWxuiU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pbjqSP1SZUOnneLK',
          ),
          1 => 
          array (
            0 => 'id',
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
      294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gAvzbxG05W4wdBY3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CyOmkKodg5LC96b3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FmLKtr63WRI63dYL',
          ),
          1 => 
          array (
            0 => 'id',
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
      377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
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
    'generated::xj79R8gkEv1a7YBn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::xj79R8gkEv1a7YBn',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vzF12XF4QP0htbep' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Admins\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\API\\Admins\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers\\API\\Admins',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vzF12XF4QP0htbep',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TH14y3Vxt1XRTKkn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckAdminToken:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Admins\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\API\\Admins\\AuthController@logout',
        'namespace' => 'App\\Http\\Controllers\\API\\Admins',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TH14y3Vxt1XRTKkn',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oJh2MKSvfbq0Nxry' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/getUsers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckAdminToken:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Admins\\AdminController@getUsers',
        'controller' => 'App\\Http\\Controllers\\API\\Admins\\AdminController@getUsers',
        'namespace' => 'App\\Http\\Controllers\\API\\Admins',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oJh2MKSvfbq0Nxry',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KbIQzQzGkFdK7XhP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/getUser/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckAdminToken:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Admins\\AdminController@getUser',
        'controller' => 'App\\Http\\Controllers\\API\\Admins\\AdminController@getUser',
        'namespace' => 'App\\Http\\Controllers\\API\\Admins',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::KbIQzQzGkFdK7XhP',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PBtwJjAxmyrXMVIb' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/deleteUser/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckAdminToken:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Admins\\AdminController@deleteUser',
        'controller' => 'App\\Http\\Controllers\\API\\Admins\\AdminController@deleteUser',
        'namespace' => 'App\\Http\\Controllers\\API\\Admins',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::PBtwJjAxmyrXMVIb',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Js6hMF6EhdRfZuo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/updateUser/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckAdminToken:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Admins\\AdminController@updateUser',
        'controller' => 'App\\Http\\Controllers\\API\\Admins\\AdminController@updateUser',
        'namespace' => 'App\\Http\\Controllers\\API\\Admins',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0Js6hMF6EhdRfZuo',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hTv3TGrEfkkJQg7I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/usersReportsCount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckAdminToken:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Admins\\AdminController@usersReportsCount',
        'controller' => 'App\\Http\\Controllers\\API\\Admins\\AdminController@usersReportsCount',
        'namespace' => 'App\\Http\\Controllers\\API\\Admins',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::hTv3TGrEfkkJQg7I',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eDPg4woHVoUDKF5W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eDPg4woHVoUDKF5W',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xwnxNnagGBbl18my' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::xwnxNnagGBbl18my',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::61Bd9dB3rzcurH5D' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\ResetPwdReqController@reqForgotPassword',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\ResetPwdReqController@reqForgotPassword',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::61Bd9dB3rzcurH5D',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sxoKPMRfkd5r9unE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/confirm-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\UpdatePwdController@confirmToken',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\UpdatePwdController@confirmToken',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::sxoKPMRfkd5r9unE',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1v7aUyZjxEGMASew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/update-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\UpdatePwdController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\UpdatePwdController@updatePassword',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::1v7aUyZjxEGMASew',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wf42IR0CVKiZZTPi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\AuthController@logout',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Wf42IR0CVKiZZTPi',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sgKbemLu1Kem2Cvg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/complete-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\RegisterController@completeSteps',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\RegisterController@completeSteps',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::sgKbemLu1Kem2Cvg',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5mNvYeUKluRjbRr9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/profile/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\UserProfileController@changePassword',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\UserProfileController@changePassword',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::5mNvYeUKluRjbRr9',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SkADj06nApd9eg1l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/profile/update-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\UserProfileController@updatePersonalInfo',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\UserProfileController@updatePersonalInfo',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::SkADj06nApd9eg1l',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a3bZwO8Toy7FU9nJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/profile/update-avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\UserProfileController@updateAvatar',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\UserProfileController@updateAvatar',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::a3bZwO8Toy7FU9nJ',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sQvFk1C8o1i9Xxe5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/report/get-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\ReportController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\ReportController@index',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user/report',
        'where' => 
        array (
        ),
        'as' => 'generated::sQvFk1C8o1i9Xxe5',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zx9OTkOeQOjXTPBO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/report/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\ReportController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\ReportController@store',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user/report',
        'where' => 
        array (
        ),
        'as' => 'generated::Zx9OTkOeQOjXTPBO',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KR2YH3F0OMdnjt1e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/report/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\ReportController@update',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\ReportController@update',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user/report',
        'where' => 
        array (
        ),
        'as' => 'generated::KR2YH3F0OMdnjt1e',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6a5zMKaA6guOqCyi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/report/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\ReportController@show',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\ReportController@show',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user/report',
        'where' => 
        array (
        ),
        'as' => 'generated::6a5zMKaA6guOqCyi',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C5hrRJO0q9Ms4R0c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/report/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\ReportController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\ReportController@destroy',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user/report',
        'where' => 
        array (
        ),
        'as' => 'generated::C5hrRJO0q9Ms4R0c',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tSxEsF452zUdWm8u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/report/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\ReportController@allReviews',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\ReportController@allReviews',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user/report',
        'where' => 
        array (
        ),
        'as' => 'generated::tSxEsF452zUdWm8u',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EFyT7LHjQoEcK8cY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/report/review/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkUserToken:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Users\\ReportController@reportReview',
        'controller' => 'App\\Http\\Controllers\\API\\Users\\ReportController@reportReview',
        'namespace' => 'App\\Http\\Controllers\\API\\Users',
        'prefix' => 'api/user/report',
        'where' => 
        array (
        ),
        'as' => 'generated::EFyT7LHjQoEcK8cY',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4wKJq2CQ7xxBBRJe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner',
        'where' => 
        array (
        ),
        'as' => 'generated::4wKJq2CQ7xxBBRJe',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X5DRjdM2ovV92O6P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner',
        'where' => 
        array (
        ),
        'as' => 'generated::X5DRjdM2ovV92O6P',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8okarUE9nv8xR21h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\ResetPwdReqController@reqForgotPassword',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\ResetPwdReqController@reqForgotPassword',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner',
        'where' => 
        array (
        ),
        'as' => 'generated::8okarUE9nv8xR21h',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pq45XppZAZRMCqtR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/confirm-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\UpdatePwdController@confirmToken',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\UpdatePwdController@confirmToken',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner',
        'where' => 
        array (
        ),
        'as' => 'generated::pq45XppZAZRMCqtR',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::18V25xJRjVil8pkc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/update-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\UpdatePwdController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\UpdatePwdController@updatePassword',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner',
        'where' => 
        array (
        ),
        'as' => 'generated::18V25xJRjVil8pkc',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EjrawMYY0van3EZK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\AuthController@logout',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner',
        'where' => 
        array (
        ),
        'as' => 'generated::EjrawMYY0van3EZK',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uF2mihFOm5427uXu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/complete-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\RegisterController@completeSteps',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\RegisterController@completeSteps',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner',
        'where' => 
        array (
        ),
        'as' => 'generated::uF2mihFOm5427uXu',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MBxJeHR0KOJij8Bz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/profile/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
          2 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\OwnerProfileController@changePassword',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\OwnerProfileController@changePassword',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::MBxJeHR0KOJij8Bz',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sI4MV4ZIhmJQAC59' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/profile/update-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
          2 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\OwnerProfileController@updatePersonalInfo',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\OwnerProfileController@updatePersonalInfo',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::sI4MV4ZIhmJQAC59',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eG7edOFBltuKiDMF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/profile/update-avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
          2 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\OwnerProfileController@updateAvatar',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\OwnerProfileController@updateAvatar',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::eG7edOFBltuKiDMF',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jFJ7PqzRsMpciOYQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/store-owner/review/get-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\ReviewController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\ReviewController@index',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/review',
        'where' => 
        array (
        ),
        'as' => 'generated::jFJ7PqzRsMpciOYQ',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1odRen1fhPBWxuiU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/review/submit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\ReviewController@store',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\ReviewController@store',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/review',
        'where' => 
        array (
        ),
        'as' => 'generated::1odRen1fhPBWxuiU',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gAvzbxG05W4wdBY3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/review/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\ReviewController@update',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\ReviewController@update',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/review',
        'where' => 
        array (
        ),
        'as' => 'generated::gAvzbxG05W4wdBY3',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CyOmkKodg5LC96b3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store-owner/review/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\ReviewController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\ReviewController@destroy',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/review',
        'where' => 
        array (
        ),
        'as' => 'generated::CyOmkKodg5LC96b3',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pbjqSP1SZUOnneLK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/store-owner/review/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\ReviewController@show',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\ReviewController@show',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/review',
        'where' => 
        array (
        ),
        'as' => 'generated::pbjqSP1SZUOnneLK',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vpkyYHYMYvZbOHfp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/store-owner/report/get-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\GeneralController@index',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\GeneralController@index',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/report',
        'where' => 
        array (
        ),
        'as' => 'generated::vpkyYHYMYvZbOHfp',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FmLKtr63WRI63dYL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/store-owner/report/get/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\GeneralController@show',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\GeneralController@show',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/report',
        'where' => 
        array (
        ),
        'as' => 'generated::FmLKtr63WRI63dYL',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RoXEqtKEh6TWLWg7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/store-owner/report/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\GeneralController@list',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\GeneralController@list',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/report',
        'where' => 
        array (
        ),
        'as' => 'generated::RoXEqtKEh6TWLWg7',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bbW7LcECMSc91jbk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/store-owner/report/serialSerach',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'checkOwnerToken:owner-api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Owners\\GeneralController@serialSerach',
        'controller' => 'App\\Http\\Controllers\\API\\Owners\\GeneralController@serialSerach',
        'namespace' => 'App\\Http\\Controllers\\API\\Owners',
        'prefix' => 'api/store-owner/report',
        'where' => 
        array (
        ),
        'as' => 'generated::bbW7LcECMSc91jbk',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hJ5udqLlzw6nw8jo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/social/Auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Social\\SocialAuthController@socialLogin',
        'controller' => 'App\\Http\\Controllers\\API\\Social\\SocialAuthController@socialLogin',
        'namespace' => 'App\\Http\\Controllers\\API\\Social',
        'prefix' => 'api/social',
        'where' => 
        array (
        ),
        'as' => 'generated::hJ5udqLlzw6nw8jo',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jBXlLQzCBTxllevC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:262:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004949a9af000000005fbf3f6d";}";s:4:"hash";s:44:"6mdkSv2vYYO7cDjbxQyBTncLLtWSFkuX43My5ZdV+h0=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jBXlLQzCBTxllevC',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9qTpwoyLSABqCSic' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9qTpwoyLSABqCSic',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eDUZ0YtZrBEVINHZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eDUZ0YtZrBEVINHZ',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::omtSbsFMFBMyETwW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::omtSbsFMFBMyETwW',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
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
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
