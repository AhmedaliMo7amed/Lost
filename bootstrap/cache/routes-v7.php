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
            '_route' => 'generated::0X9AduHzCRBLZpZj',
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
            '_route' => 'generated::0sEd0my7GAQM5Z8o',
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
            '_route' => 'generated::uaWPlThAU2Gycoyy',
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
            '_route' => 'generated::6W9HeIXaPSirzMo5',
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
            '_route' => 'generated::ek18epCiGOCWzlnT',
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
            '_route' => 'generated::iwsNxKu7frXREwoj',
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
            '_route' => 'generated::9umY09vPBy4Ao8LI',
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
            '_route' => 'generated::SKkaD41nQJzxOghG',
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
            '_route' => 'generated::5gjzFqLz4INLciQY',
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
            '_route' => 'generated::Ct4TKAW1SF7Yyd4j',
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
            '_route' => 'generated::8crTu6gvJtAMwVDF',
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
            '_route' => 'generated::dGWEMAE3QvkpzxvE',
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
            '_route' => 'generated::YVA7yvwilW4HRMQ1',
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
            '_route' => 'generated::RRclOcvrzvlmy9uE',
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
            '_route' => 'generated::vHhBEOPlmhHA0yE9',
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
            '_route' => 'generated::YDeqe7IhZKxLbK8h',
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
            '_route' => 'generated::wG8mZ3wV5K2Mm9TP',
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
            '_route' => 'generated::W4KNxmGQoIP08hIk',
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
            '_route' => 'generated::xgj1RaXW68Hjj5CJ',
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
            '_route' => 'generated::eI8aHiInnKuvR3MK',
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
            '_route' => 'generated::iaSjyL4M9mlQEZ5O',
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
            '_route' => 'generated::Gm3S3LE1doksfe2I',
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
            '_route' => 'generated::vGn6ZTzWn5GbztHR',
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
            '_route' => 'generated::l67NE4nYVnu5btjt',
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
            '_route' => 'generated::kreIJanJcrAZLqo9',
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
            '_route' => 'generated::Tt3RxZQfT4gxGX4t',
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
            '_route' => 'generated::Hx1WpFA5dCX4hfEs',
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
            '_route' => 'generated::XxAtjAOGhQ4nr1JT',
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
            '_route' => 'generated::hA5FD6F7N9p5t2xl',
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
            '_route' => 'generated::XguymeQ7WPUJo8uP',
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
            '_route' => 'generated::KAcx0x67mZqVpLAM',
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
            '_route' => 'generated::qVBMSexjvGqb7y68',
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
            '_route' => 'generated::SAwpn8IFGVT2bmhM',
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
            '_route' => 'generated::RtM4biu15fGg9LQN',
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
            '_route' => 'generated::kzQPsuZKCu3c94xx',
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
            '_route' => 'generated::HmRUIvEBZNf5UXgl',
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
            '_route' => 'generated::y8VCDqb7xDFEELRT',
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
            '_route' => 'generated::RoVTBVfaP2WXBpoB',
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
            '_route' => 'generated::7gFr2YJVtbhpM1Yu',
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
            '_route' => 'generated::9ESAsK3Lloyhx5gM',
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
            '_route' => 'generated::CaAXqUJPdeiZ3T38',
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
            '_route' => 'generated::Fw0NswRHyAeBp4Cj',
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
            '_route' => 'generated::7PZTV6JIzSb8S2Uk',
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
            '_route' => 'generated::KdEaGJcrXMC54F2w',
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
            '_route' => 'generated::dN6I0swurnQwuyks',
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
            '_route' => 'generated::uMkpXHXsQ6h5CZzw',
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
            '_route' => 'generated::okHqf4Rld3ed9fux',
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
            '_route' => 'generated::ZDonjRGvfnH4B8hn',
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
            '_route' => 'generated::5vgzCterdisU0xdT',
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
    'generated::0X9AduHzCRBLZpZj' => 
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
        'as' => 'generated::0X9AduHzCRBLZpZj',
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
    'generated::0sEd0my7GAQM5Z8o' => 
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
        'as' => 'generated::0sEd0my7GAQM5Z8o',
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
    'generated::uaWPlThAU2Gycoyy' => 
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
        'as' => 'generated::uaWPlThAU2Gycoyy',
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
    'generated::6W9HeIXaPSirzMo5' => 
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
        'as' => 'generated::6W9HeIXaPSirzMo5',
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
    'generated::RoVTBVfaP2WXBpoB' => 
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
        'as' => 'generated::RoVTBVfaP2WXBpoB',
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
    'generated::7gFr2YJVtbhpM1Yu' => 
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
        'as' => 'generated::7gFr2YJVtbhpM1Yu',
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
    'generated::9ESAsK3Lloyhx5gM' => 
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
        'as' => 'generated::9ESAsK3Lloyhx5gM',
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
    'generated::ek18epCiGOCWzlnT' => 
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
        'as' => 'generated::ek18epCiGOCWzlnT',
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
    'generated::iwsNxKu7frXREwoj' => 
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
        'as' => 'generated::iwsNxKu7frXREwoj',
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
    'generated::9umY09vPBy4Ao8LI' => 
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
        'as' => 'generated::9umY09vPBy4Ao8LI',
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
    'generated::SKkaD41nQJzxOghG' => 
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
        'as' => 'generated::SKkaD41nQJzxOghG',
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
    'generated::5gjzFqLz4INLciQY' => 
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
        'as' => 'generated::5gjzFqLz4INLciQY',
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
    'generated::Ct4TKAW1SF7Yyd4j' => 
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
        'as' => 'generated::Ct4TKAW1SF7Yyd4j',
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
    'generated::8crTu6gvJtAMwVDF' => 
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
        'as' => 'generated::8crTu6gvJtAMwVDF',
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
    'generated::dGWEMAE3QvkpzxvE' => 
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
        'as' => 'generated::dGWEMAE3QvkpzxvE',
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
    'generated::YVA7yvwilW4HRMQ1' => 
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
        'as' => 'generated::YVA7yvwilW4HRMQ1',
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
    'generated::RRclOcvrzvlmy9uE' => 
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
        'as' => 'generated::RRclOcvrzvlmy9uE',
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
    'generated::vHhBEOPlmhHA0yE9' => 
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
        'as' => 'generated::vHhBEOPlmhHA0yE9',
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
    'generated::YDeqe7IhZKxLbK8h' => 
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
        'as' => 'generated::YDeqe7IhZKxLbK8h',
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
    'generated::wG8mZ3wV5K2Mm9TP' => 
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
        'as' => 'generated::wG8mZ3wV5K2Mm9TP',
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
    'generated::CaAXqUJPdeiZ3T38' => 
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
        'as' => 'generated::CaAXqUJPdeiZ3T38',
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
    'generated::Fw0NswRHyAeBp4Cj' => 
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
        'as' => 'generated::Fw0NswRHyAeBp4Cj',
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
    'generated::7PZTV6JIzSb8S2Uk' => 
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
        'as' => 'generated::7PZTV6JIzSb8S2Uk',
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
    'generated::W4KNxmGQoIP08hIk' => 
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
        'as' => 'generated::W4KNxmGQoIP08hIk',
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
    'generated::KdEaGJcrXMC54F2w' => 
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
        'as' => 'generated::KdEaGJcrXMC54F2w',
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
    'generated::xgj1RaXW68Hjj5CJ' => 
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
        'as' => 'generated::xgj1RaXW68Hjj5CJ',
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
    'generated::eI8aHiInnKuvR3MK' => 
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
        'as' => 'generated::eI8aHiInnKuvR3MK',
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
    'generated::iaSjyL4M9mlQEZ5O' => 
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
        'as' => 'generated::iaSjyL4M9mlQEZ5O',
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
    'generated::Gm3S3LE1doksfe2I' => 
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
        'as' => 'generated::Gm3S3LE1doksfe2I',
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
    'generated::vGn6ZTzWn5GbztHR' => 
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
        'as' => 'generated::vGn6ZTzWn5GbztHR',
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
    'generated::l67NE4nYVnu5btjt' => 
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
        'as' => 'generated::l67NE4nYVnu5btjt',
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
    'generated::kreIJanJcrAZLqo9' => 
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
        'as' => 'generated::kreIJanJcrAZLqo9',
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
    'generated::Tt3RxZQfT4gxGX4t' => 
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
        'as' => 'generated::Tt3RxZQfT4gxGX4t',
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
    'generated::Hx1WpFA5dCX4hfEs' => 
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
        'as' => 'generated::Hx1WpFA5dCX4hfEs',
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
    'generated::XxAtjAOGhQ4nr1JT' => 
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
        'as' => 'generated::XxAtjAOGhQ4nr1JT',
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
    'generated::hA5FD6F7N9p5t2xl' => 
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
        'as' => 'generated::hA5FD6F7N9p5t2xl',
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
    'generated::dN6I0swurnQwuyks' => 
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
        'as' => 'generated::dN6I0swurnQwuyks',
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
    'generated::okHqf4Rld3ed9fux' => 
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
        'as' => 'generated::okHqf4Rld3ed9fux',
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
    'generated::ZDonjRGvfnH4B8hn' => 
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
        'as' => 'generated::ZDonjRGvfnH4B8hn',
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
    'generated::uMkpXHXsQ6h5CZzw' => 
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
        'as' => 'generated::uMkpXHXsQ6h5CZzw',
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
    'generated::XguymeQ7WPUJo8uP' => 
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
        'as' => 'generated::XguymeQ7WPUJo8uP',
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
    'generated::5vgzCterdisU0xdT' => 
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
        'as' => 'generated::5vgzCterdisU0xdT',
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
    'generated::KAcx0x67mZqVpLAM' => 
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
        'as' => 'generated::KAcx0x67mZqVpLAM',
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
    'generated::qVBMSexjvGqb7y68' => 
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
        'as' => 'generated::qVBMSexjvGqb7y68',
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
    'generated::SAwpn8IFGVT2bmhM' => 
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
        'as' => 'generated::SAwpn8IFGVT2bmhM',
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
    'generated::RtM4biu15fGg9LQN' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000069d8b2090000000045b1c7af";}";s:4:"hash";s:44:"dlVaADyJc1DYIOywnlrq5MTUrC3BcprnQZT1mliDCSA=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RtM4biu15fGg9LQN',
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
    'generated::kzQPsuZKCu3c94xx' => 
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
        'as' => 'generated::kzQPsuZKCu3c94xx',
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
    'generated::HmRUIvEBZNf5UXgl' => 
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
        'as' => 'generated::HmRUIvEBZNf5UXgl',
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
    'generated::y8VCDqb7xDFEELRT' => 
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
        'as' => 'generated::y8VCDqb7xDFEELRT',
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
