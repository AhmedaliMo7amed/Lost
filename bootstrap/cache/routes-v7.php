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
            '_route' => 'generated::jkOfeuahpHcD2Q8X',
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
            '_route' => 'generated::oLsUKTK8aCgA9l8C',
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
            '_route' => 'generated::rDsc0uO7pFUQq2KY',
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
            '_route' => 'generated::ZKQBMFwE9JjdUecW',
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
            '_route' => 'generated::3kqyViB0lCZrt6Rv',
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
            '_route' => 'generated::Zg1KBYoxWX6vXLSD',
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
            '_route' => 'generated::7TIaRRnHcqOvXZeB',
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
            '_route' => 'generated::jMhywrdLG4g0A223',
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
            '_route' => 'generated::9SuOkkaQ4FvfCPBS',
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
            '_route' => 'generated::YLxCb0LNVZ00AOKt',
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
            '_route' => 'generated::YQNqrJmEAHSwoq3U',
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
            '_route' => 'generated::E7tGsh051gmwAUAy',
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
            '_route' => 'generated::X6kJng0fJpXdhjux',
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
            '_route' => 'generated::7H1ZgqMxmOVn358k',
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
            '_route' => 'generated::UOtJZOhcC7gyGd2N',
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
            '_route' => 'generated::0cD8hyrFPsGCLNi5',
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
            '_route' => 'generated::PdTqfihOmXUrCcHg',
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
            '_route' => 'generated::rQCmIi1QhlKKb2q1',
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
            '_route' => 'generated::M2EeoHJnIbmlgC7V',
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
            '_route' => 'generated::zHphNwlLUYWfHNNc',
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
            '_route' => 'generated::Zbk3hAmw094QJig4',
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
            '_route' => 'generated::vn543ZaU6KnKa19A',
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
            '_route' => 'generated::zEsSrHX5EPRJYkNC',
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
            '_route' => 'generated::47CeC2Hzip06yZI8',
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
            '_route' => 'generated::TyEXSVowSzPJo52F',
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
            '_route' => 'generated::XEmDPlgEDEYRu8Wc',
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
            '_route' => 'generated::subCrnE24SXuakqc',
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
            '_route' => 'generated::wAfVQJZcmCaKSQZa',
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
            '_route' => 'generated::SChyFzKeEnpM3sv2',
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
            '_route' => 'generated::Je7mMZbS6xbMiJiE',
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
            '_route' => 'generated::chAgHqP29vvrtc10',
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
            '_route' => 'generated::SAfYAietn8r62GZe',
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
            '_route' => 'generated::J0ddYah0QiSyOcMF',
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
            '_route' => 'generated::68ISBrMzzKpuSIye',
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
            '_route' => 'generated::WA4SX4Av5FzhfC0w',
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
            '_route' => 'generated::QlfMPMi1ymx2rGYa',
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
            '_route' => 'generated::aNpdtiXyYIXlWmt3',
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
            '_route' => 'generated::8NyW74B9ybijE9q8',
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
            '_route' => 'generated::RCFhhyc8anUekkq7',
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
            '_route' => 'generated::yNvAgXCO4utIwyGT',
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
            '_route' => 'generated::Ej7yZxc1XsA95Wsq',
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
            '_route' => 'generated::Da0NmNBi1RRSvs65',
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
            '_route' => 'generated::5qPCQu7fUavIew8z',
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
            '_route' => 'generated::Pewl4zpvpYPvn7oq',
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
            '_route' => 'generated::XumOFb5VNaDkrSpH',
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
            '_route' => 'generated::4HBf3MY3ES3WhQaa',
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
            '_route' => 'generated::Ag7pvtuoJ8wAkIYQ',
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
            '_route' => 'generated::9D5RcTtJHB8SbGD5',
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
            '_route' => 'generated::EBIQiaQaY90GUcAd',
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
    'generated::jkOfeuahpHcD2Q8X' => 
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
        'as' => 'generated::jkOfeuahpHcD2Q8X',
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
    'generated::oLsUKTK8aCgA9l8C' => 
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
        'as' => 'generated::oLsUKTK8aCgA9l8C',
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
    'generated::rDsc0uO7pFUQq2KY' => 
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
        'as' => 'generated::rDsc0uO7pFUQq2KY',
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
    'generated::ZKQBMFwE9JjdUecW' => 
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
        'as' => 'generated::ZKQBMFwE9JjdUecW',
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
    'generated::8NyW74B9ybijE9q8' => 
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
        'as' => 'generated::8NyW74B9ybijE9q8',
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
    'generated::RCFhhyc8anUekkq7' => 
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
        'as' => 'generated::RCFhhyc8anUekkq7',
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
    'generated::yNvAgXCO4utIwyGT' => 
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
        'as' => 'generated::yNvAgXCO4utIwyGT',
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
    'generated::3kqyViB0lCZrt6Rv' => 
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
        'as' => 'generated::3kqyViB0lCZrt6Rv',
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
    'generated::Zg1KBYoxWX6vXLSD' => 
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
        'as' => 'generated::Zg1KBYoxWX6vXLSD',
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
    'generated::7TIaRRnHcqOvXZeB' => 
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
        'as' => 'generated::7TIaRRnHcqOvXZeB',
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
    'generated::jMhywrdLG4g0A223' => 
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
        'as' => 'generated::jMhywrdLG4g0A223',
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
    'generated::9SuOkkaQ4FvfCPBS' => 
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
        'as' => 'generated::9SuOkkaQ4FvfCPBS',
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
    'generated::YLxCb0LNVZ00AOKt' => 
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
        'as' => 'generated::YLxCb0LNVZ00AOKt',
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
    'generated::YQNqrJmEAHSwoq3U' => 
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
        'as' => 'generated::YQNqrJmEAHSwoq3U',
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
    'generated::E7tGsh051gmwAUAy' => 
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
        'as' => 'generated::E7tGsh051gmwAUAy',
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
    'generated::X6kJng0fJpXdhjux' => 
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
        'as' => 'generated::X6kJng0fJpXdhjux',
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
    'generated::7H1ZgqMxmOVn358k' => 
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
        'as' => 'generated::7H1ZgqMxmOVn358k',
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
    'generated::UOtJZOhcC7gyGd2N' => 
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
        'as' => 'generated::UOtJZOhcC7gyGd2N',
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
    'generated::0cD8hyrFPsGCLNi5' => 
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
        'as' => 'generated::0cD8hyrFPsGCLNi5',
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
    'generated::PdTqfihOmXUrCcHg' => 
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
        'as' => 'generated::PdTqfihOmXUrCcHg',
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
    'generated::Ej7yZxc1XsA95Wsq' => 
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
        'as' => 'generated::Ej7yZxc1XsA95Wsq',
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
    'generated::Da0NmNBi1RRSvs65' => 
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
        'as' => 'generated::Da0NmNBi1RRSvs65',
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
    'generated::5qPCQu7fUavIew8z' => 
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
        'as' => 'generated::5qPCQu7fUavIew8z',
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
    'generated::rQCmIi1QhlKKb2q1' => 
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
        'as' => 'generated::rQCmIi1QhlKKb2q1',
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
    'generated::Pewl4zpvpYPvn7oq' => 
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
        'as' => 'generated::Pewl4zpvpYPvn7oq',
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
    'generated::M2EeoHJnIbmlgC7V' => 
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
        'as' => 'generated::M2EeoHJnIbmlgC7V',
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
    'generated::zHphNwlLUYWfHNNc' => 
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
        'as' => 'generated::zHphNwlLUYWfHNNc',
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
    'generated::Zbk3hAmw094QJig4' => 
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
        'as' => 'generated::Zbk3hAmw094QJig4',
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
    'generated::vn543ZaU6KnKa19A' => 
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
        'as' => 'generated::vn543ZaU6KnKa19A',
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
    'generated::zEsSrHX5EPRJYkNC' => 
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
        'as' => 'generated::zEsSrHX5EPRJYkNC',
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
    'generated::47CeC2Hzip06yZI8' => 
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
        'as' => 'generated::47CeC2Hzip06yZI8',
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
    'generated::TyEXSVowSzPJo52F' => 
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
        'as' => 'generated::TyEXSVowSzPJo52F',
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
    'generated::XEmDPlgEDEYRu8Wc' => 
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
        'as' => 'generated::XEmDPlgEDEYRu8Wc',
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
    'generated::subCrnE24SXuakqc' => 
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
        'as' => 'generated::subCrnE24SXuakqc',
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
    'generated::wAfVQJZcmCaKSQZa' => 
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
        'as' => 'generated::wAfVQJZcmCaKSQZa',
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
    'generated::SChyFzKeEnpM3sv2' => 
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
        'as' => 'generated::SChyFzKeEnpM3sv2',
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
    'generated::XumOFb5VNaDkrSpH' => 
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
        'as' => 'generated::XumOFb5VNaDkrSpH',
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
    'generated::Ag7pvtuoJ8wAkIYQ' => 
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
        'as' => 'generated::Ag7pvtuoJ8wAkIYQ',
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
    'generated::9D5RcTtJHB8SbGD5' => 
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
        'as' => 'generated::9D5RcTtJHB8SbGD5',
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
    'generated::4HBf3MY3ES3WhQaa' => 
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
        'as' => 'generated::4HBf3MY3ES3WhQaa',
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
    'generated::Je7mMZbS6xbMiJiE' => 
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
        'as' => 'generated::Je7mMZbS6xbMiJiE',
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
    'generated::EBIQiaQaY90GUcAd' => 
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
        'as' => 'generated::EBIQiaQaY90GUcAd',
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
    'generated::chAgHqP29vvrtc10' => 
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
        'as' => 'generated::chAgHqP29vvrtc10',
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
    'generated::SAfYAietn8r62GZe' => 
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
        'as' => 'generated::SAfYAietn8r62GZe',
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
    'generated::J0ddYah0QiSyOcMF' => 
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
        'as' => 'generated::J0ddYah0QiSyOcMF',
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
    'generated::68ISBrMzzKpuSIye' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004d9424ad000000005acfa38c";}";s:4:"hash";s:44:"+QBgWvyBJJ5jTW8LAew5NYVI8/pta9fcOqOTmoQkGDs=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::68ISBrMzzKpuSIye',
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
    'generated::WA4SX4Av5FzhfC0w' => 
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
        'as' => 'generated::WA4SX4Av5FzhfC0w',
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
    'generated::QlfMPMi1ymx2rGYa' => 
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
        'as' => 'generated::QlfMPMi1ymx2rGYa',
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
    'generated::aNpdtiXyYIXlWmt3' => 
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
        'as' => 'generated::aNpdtiXyYIXlWmt3',
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
