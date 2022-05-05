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
            '_route' => 'generated::2LC6Rn05CI2yYcDX',
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
            '_route' => 'generated::SWiTQdKWdaFRrQ7e',
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
            '_route' => 'generated::IKJvQQRfnYw1adl0',
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
            '_route' => 'generated::qGhHsqNnHldbCqvT',
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
            '_route' => 'generated::9V6VFbX9f0O5owiO',
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
            '_route' => 'generated::kxeidSDaEx36SkJD',
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
            '_route' => 'generated::SNeqcvbTAMYnDTY3',
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
            '_route' => 'generated::sLiQpXMEyy1UKCpW',
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
            '_route' => 'generated::Zj1ftuxCET4eeudC',
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
            '_route' => 'generated::HVTGsbvqknKaDuF0',
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
            '_route' => 'generated::cZU0lWyl76NdufxK',
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
            '_route' => 'generated::J7iEBM5tSSkXqzbC',
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
            '_route' => 'generated::ZSRWjeyjKU1QwKDd',
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
            '_route' => 'generated::z3BXGqHM52RBAO4A',
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
            '_route' => 'generated::H3qWMSSaw2Bx7vS0',
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
            '_route' => 'generated::YjIqZQ6LqMiKGnnw',
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
            '_route' => 'generated::RDPEhT9SaN6B8XeT',
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
            '_route' => 'generated::QrISwqyq5ltPqJQA',
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
            '_route' => 'generated::x4MgcqiSDYIbH4VN',
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
            '_route' => 'generated::pnbQIugnawO8h1wj',
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
            '_route' => 'generated::BP3HF7Ib8Oh7bMkQ',
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
            '_route' => 'generated::cQ4rAd7HvQy62C2n',
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
            '_route' => 'generated::kG9iLPV7jPmOsR0U',
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
            '_route' => 'generated::Aezk68UZxm6sM7B8',
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
            '_route' => 'generated::Ju3BWZi3V2athBLu',
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
            '_route' => 'generated::tgj8YVOTergyVdMR',
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
            '_route' => 'generated::ffmGjnc72FhcDu1N',
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
            '_route' => 'generated::Ccf9ePOZLonrRs8Z',
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
            '_route' => 'generated::EJdAet3M02mVoy25',
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
            '_route' => 'generated::9rzpxUy0VCHMBydA',
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
            '_route' => 'generated::lZvviolAg7BpYq7m',
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
            '_route' => 'generated::mGLbwQ4JuWrrKkOB',
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
            '_route' => 'generated::rgYlCkvwpakbngXE',
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
            '_route' => 'generated::UhqWJKxnCOz1xWnu',
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
            '_route' => 'generated::NfJKtimGYm46788p',
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
            '_route' => 'generated::4xIWMPeeYNQKnuQv',
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
            '_route' => 'generated::nbGekwqwacOVkIO8',
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
            '_route' => 'generated::BLTEjSxGfxmgc7ZS',
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
            '_route' => 'generated::EPDqSWKAdZ2S9ic8',
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
            '_route' => 'generated::s2AEwr5nlLGWnhZJ',
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
            '_route' => 'generated::jPkCr8YJfr76COkv',
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
            '_route' => 'generated::NgHNlYQXpyYfjwfR',
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
            '_route' => 'generated::CBBM3zWdFcw4y50F',
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
            '_route' => 'generated::X8e7ijG82KqdpNbD',
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
            '_route' => 'generated::3Xi2XShFk4NUbFWZ',
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
            '_route' => 'generated::WkvN3XygBK2yf6Pi',
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
            '_route' => 'generated::VAzhC6kjdKODdlBv',
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
            '_route' => 'generated::GKt654DhELJGnLCf',
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
            '_route' => 'generated::a0qKm4cAIKJ8JibQ',
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
    'generated::2LC6Rn05CI2yYcDX' => 
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
        'as' => 'generated::2LC6Rn05CI2yYcDX',
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
    'generated::SWiTQdKWdaFRrQ7e' => 
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
        'as' => 'generated::SWiTQdKWdaFRrQ7e',
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
    'generated::IKJvQQRfnYw1adl0' => 
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
        'as' => 'generated::IKJvQQRfnYw1adl0',
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
    'generated::qGhHsqNnHldbCqvT' => 
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
        'as' => 'generated::qGhHsqNnHldbCqvT',
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
    'generated::BLTEjSxGfxmgc7ZS' => 
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
        'as' => 'generated::BLTEjSxGfxmgc7ZS',
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
    'generated::EPDqSWKAdZ2S9ic8' => 
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
        'as' => 'generated::EPDqSWKAdZ2S9ic8',
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
    'generated::s2AEwr5nlLGWnhZJ' => 
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
        'as' => 'generated::s2AEwr5nlLGWnhZJ',
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
    'generated::9V6VFbX9f0O5owiO' => 
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
        'as' => 'generated::9V6VFbX9f0O5owiO',
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
    'generated::kxeidSDaEx36SkJD' => 
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
        'as' => 'generated::kxeidSDaEx36SkJD',
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
    'generated::SNeqcvbTAMYnDTY3' => 
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
        'as' => 'generated::SNeqcvbTAMYnDTY3',
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
    'generated::sLiQpXMEyy1UKCpW' => 
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
        'as' => 'generated::sLiQpXMEyy1UKCpW',
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
    'generated::Zj1ftuxCET4eeudC' => 
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
        'as' => 'generated::Zj1ftuxCET4eeudC',
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
    'generated::HVTGsbvqknKaDuF0' => 
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
        'as' => 'generated::HVTGsbvqknKaDuF0',
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
    'generated::cZU0lWyl76NdufxK' => 
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
        'as' => 'generated::cZU0lWyl76NdufxK',
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
    'generated::J7iEBM5tSSkXqzbC' => 
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
        'as' => 'generated::J7iEBM5tSSkXqzbC',
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
    'generated::ZSRWjeyjKU1QwKDd' => 
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
        'as' => 'generated::ZSRWjeyjKU1QwKDd',
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
    'generated::z3BXGqHM52RBAO4A' => 
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
        'as' => 'generated::z3BXGqHM52RBAO4A',
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
    'generated::H3qWMSSaw2Bx7vS0' => 
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
        'as' => 'generated::H3qWMSSaw2Bx7vS0',
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
    'generated::YjIqZQ6LqMiKGnnw' => 
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
        'as' => 'generated::YjIqZQ6LqMiKGnnw',
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
    'generated::RDPEhT9SaN6B8XeT' => 
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
        'as' => 'generated::RDPEhT9SaN6B8XeT',
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
    'generated::jPkCr8YJfr76COkv' => 
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
        'as' => 'generated::jPkCr8YJfr76COkv',
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
    'generated::NgHNlYQXpyYfjwfR' => 
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
        'as' => 'generated::NgHNlYQXpyYfjwfR',
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
    'generated::CBBM3zWdFcw4y50F' => 
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
        'as' => 'generated::CBBM3zWdFcw4y50F',
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
    'generated::QrISwqyq5ltPqJQA' => 
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
        'as' => 'generated::QrISwqyq5ltPqJQA',
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
    'generated::X8e7ijG82KqdpNbD' => 
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
        'as' => 'generated::X8e7ijG82KqdpNbD',
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
    'generated::x4MgcqiSDYIbH4VN' => 
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
        'as' => 'generated::x4MgcqiSDYIbH4VN',
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
    'generated::pnbQIugnawO8h1wj' => 
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
        'as' => 'generated::pnbQIugnawO8h1wj',
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
    'generated::BP3HF7Ib8Oh7bMkQ' => 
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
        'as' => 'generated::BP3HF7Ib8Oh7bMkQ',
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
    'generated::cQ4rAd7HvQy62C2n' => 
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
        'as' => 'generated::cQ4rAd7HvQy62C2n',
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
    'generated::kG9iLPV7jPmOsR0U' => 
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
        'as' => 'generated::kG9iLPV7jPmOsR0U',
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
    'generated::Aezk68UZxm6sM7B8' => 
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
        'as' => 'generated::Aezk68UZxm6sM7B8',
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
    'generated::Ju3BWZi3V2athBLu' => 
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
        'as' => 'generated::Ju3BWZi3V2athBLu',
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
    'generated::tgj8YVOTergyVdMR' => 
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
        'as' => 'generated::tgj8YVOTergyVdMR',
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
    'generated::ffmGjnc72FhcDu1N' => 
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
        'as' => 'generated::ffmGjnc72FhcDu1N',
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
    'generated::Ccf9ePOZLonrRs8Z' => 
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
        'as' => 'generated::Ccf9ePOZLonrRs8Z',
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
    'generated::EJdAet3M02mVoy25' => 
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
        'as' => 'generated::EJdAet3M02mVoy25',
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
    'generated::3Xi2XShFk4NUbFWZ' => 
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
        'as' => 'generated::3Xi2XShFk4NUbFWZ',
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
    'generated::VAzhC6kjdKODdlBv' => 
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
        'as' => 'generated::VAzhC6kjdKODdlBv',
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
    'generated::GKt654DhELJGnLCf' => 
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
        'as' => 'generated::GKt654DhELJGnLCf',
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
    'generated::WkvN3XygBK2yf6Pi' => 
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
        'as' => 'generated::WkvN3XygBK2yf6Pi',
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
    'generated::9rzpxUy0VCHMBydA' => 
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
        'as' => 'generated::9rzpxUy0VCHMBydA',
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
    'generated::a0qKm4cAIKJ8JibQ' => 
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
        'as' => 'generated::a0qKm4cAIKJ8JibQ',
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
    'generated::lZvviolAg7BpYq7m' => 
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
        'as' => 'generated::lZvviolAg7BpYq7m',
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
    'generated::mGLbwQ4JuWrrKkOB' => 
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
        'as' => 'generated::mGLbwQ4JuWrrKkOB',
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
    'generated::rgYlCkvwpakbngXE' => 
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
        'as' => 'generated::rgYlCkvwpakbngXE',
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
    'generated::UhqWJKxnCOz1xWnu' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000038ee839400000000698936ed";}";s:4:"hash";s:44:"92FDI8oRvIwBF21H6wCSvhccWf4BLGAg3czUiFB2OnY=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UhqWJKxnCOz1xWnu',
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
    'generated::NfJKtimGYm46788p' => 
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
        'as' => 'generated::NfJKtimGYm46788p',
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
    'generated::4xIWMPeeYNQKnuQv' => 
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
        'as' => 'generated::4xIWMPeeYNQKnuQv',
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
    'generated::nbGekwqwacOVkIO8' => 
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
        'as' => 'generated::nbGekwqwacOVkIO8',
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
