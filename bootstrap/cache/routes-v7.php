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
            '_route' => 'generated::Ayyz63R0QlTxvc8H',
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
            '_route' => 'generated::r5H4zpykd1xV9up7',
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
            '_route' => 'generated::NW4gkEMTYVlq8ymC',
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
            '_route' => 'generated::2q5L2ijBRsP2nCUZ',
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
            '_route' => 'generated::5rp0wgZiVb28b8Em',
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
            '_route' => 'generated::ovCHBHNwAo5jlOVr',
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
            '_route' => 'generated::5SOIcLbUuLTsxxWe',
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
            '_route' => 'generated::jOj1k8tsJMnduv7A',
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
            '_route' => 'generated::sWjFxAtfriOzTGtx',
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
            '_route' => 'generated::uHhfQEpTLYpcCUgn',
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
            '_route' => 'generated::XBNnUxxZfu7h4j7b',
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
            '_route' => 'generated::GaniLXt9tVv12NPf',
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
            '_route' => 'generated::PVt5PBSOlsUPSPdt',
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
            '_route' => 'generated::vLvYLwEna7WuZZuZ',
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
            '_route' => 'generated::6ZxpPq8jtKwzWfSi',
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
            '_route' => 'generated::bTXyk2wKA2T3oN7w',
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
            '_route' => 'generated::5yirFvuGhMoNuWqZ',
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
            '_route' => 'generated::6jVpjV41QxlrfTek',
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
            '_route' => 'generated::Ut75SET6cX7SsYmO',
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
            '_route' => 'generated::6paZndJBif7EM1Ri',
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
            '_route' => 'generated::2ScBOAnxItgS7717',
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
            '_route' => 'generated::Ux5VefYazGYGFQNx',
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
            '_route' => 'generated::pUcuH1a3HgkBuPI3',
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
            '_route' => 'generated::azSaMTsPBAXhBGW6',
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
            '_route' => 'generated::0XByN45dHpGKiWBo',
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
            '_route' => 'generated::HL6t1SIlxdeCGuc7',
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
            '_route' => 'generated::pdQ6FTa2TGHOtDlg',
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
            '_route' => 'generated::2LTyXmstVYy4rlSo',
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
            '_route' => 'generated::QEZAA4sZemHcv2jW',
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
            '_route' => 'generated::e72k1WWWjnZgkTbZ',
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
            '_route' => 'generated::hMOiIy4siucMdsoP',
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
            '_route' => 'generated::k7WBXqQBHM380iQq',
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
            '_route' => 'generated::9GFeKIS3Oy4h5vfP',
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
            '_route' => 'generated::uYTVdtfus2dXBVOr',
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
            '_route' => 'generated::Q2pGiK3QtaQK2GPj',
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
            '_route' => 'generated::fuN5IvihQTLoyWE2',
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
            '_route' => 'generated::yisiSaFoJJpvGHZa',
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
            '_route' => 'generated::tpz4kOj1ZlO90pvX',
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
            '_route' => 'generated::MGFQOo2kUUHDD9h8',
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
            '_route' => 'generated::Arndp3WPO0tnKUto',
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
            '_route' => 'generated::WvFIzTbfPI5ie6w7',
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
            '_route' => 'generated::4MNMddGPkmXWPYmB',
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
            '_route' => 'generated::ali8lYNvQ57bNru1',
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
            '_route' => 'generated::EDvQF3foVbWPQZNU',
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
            '_route' => 'generated::w0tpJh7lWj4y5qs0',
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
            '_route' => 'generated::O2dZoz4gDfvLADnH',
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
            '_route' => 'generated::dtekxoQsBjuYK8sC',
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
            '_route' => 'generated::kwdZJV4W32seK34J',
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
            '_route' => 'generated::BFrvlmMxeF91zM3z',
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
    'generated::Ayyz63R0QlTxvc8H' => 
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
        'as' => 'generated::Ayyz63R0QlTxvc8H',
      ),
      'fallback' => false,
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
    'generated::r5H4zpykd1xV9up7' => 
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
        'as' => 'generated::r5H4zpykd1xV9up7',
      ),
      'fallback' => false,
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
    'generated::NW4gkEMTYVlq8ymC' => 
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
        'as' => 'generated::NW4gkEMTYVlq8ymC',
      ),
      'fallback' => false,
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
    'generated::2q5L2ijBRsP2nCUZ' => 
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
        'as' => 'generated::2q5L2ijBRsP2nCUZ',
      ),
      'fallback' => false,
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
    'generated::tpz4kOj1ZlO90pvX' => 
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
        'as' => 'generated::tpz4kOj1ZlO90pvX',
      ),
      'fallback' => false,
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
    'generated::MGFQOo2kUUHDD9h8' => 
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
        'as' => 'generated::MGFQOo2kUUHDD9h8',
      ),
      'fallback' => false,
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
    'generated::Arndp3WPO0tnKUto' => 
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
        'as' => 'generated::Arndp3WPO0tnKUto',
      ),
      'fallback' => false,
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
    'generated::5rp0wgZiVb28b8Em' => 
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
        'as' => 'generated::5rp0wgZiVb28b8Em',
      ),
      'fallback' => false,
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
    'generated::ovCHBHNwAo5jlOVr' => 
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
        'as' => 'generated::ovCHBHNwAo5jlOVr',
      ),
      'fallback' => false,
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
    'generated::5SOIcLbUuLTsxxWe' => 
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
        'as' => 'generated::5SOIcLbUuLTsxxWe',
      ),
      'fallback' => false,
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
    'generated::jOj1k8tsJMnduv7A' => 
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
        'as' => 'generated::jOj1k8tsJMnduv7A',
      ),
      'fallback' => false,
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
    'generated::sWjFxAtfriOzTGtx' => 
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
        'as' => 'generated::sWjFxAtfriOzTGtx',
      ),
      'fallback' => false,
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
    'generated::uHhfQEpTLYpcCUgn' => 
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
        'as' => 'generated::uHhfQEpTLYpcCUgn',
      ),
      'fallback' => false,
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
    'generated::XBNnUxxZfu7h4j7b' => 
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
        'as' => 'generated::XBNnUxxZfu7h4j7b',
      ),
      'fallback' => false,
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
    'generated::GaniLXt9tVv12NPf' => 
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
        'as' => 'generated::GaniLXt9tVv12NPf',
      ),
      'fallback' => false,
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
    'generated::PVt5PBSOlsUPSPdt' => 
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
        'as' => 'generated::PVt5PBSOlsUPSPdt',
      ),
      'fallback' => false,
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
    'generated::vLvYLwEna7WuZZuZ' => 
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
        'as' => 'generated::vLvYLwEna7WuZZuZ',
      ),
      'fallback' => false,
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
    'generated::6ZxpPq8jtKwzWfSi' => 
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
        'as' => 'generated::6ZxpPq8jtKwzWfSi',
      ),
      'fallback' => false,
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
    'generated::bTXyk2wKA2T3oN7w' => 
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
        'as' => 'generated::bTXyk2wKA2T3oN7w',
      ),
      'fallback' => false,
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
    'generated::5yirFvuGhMoNuWqZ' => 
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
        'as' => 'generated::5yirFvuGhMoNuWqZ',
      ),
      'fallback' => false,
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
    'generated::WvFIzTbfPI5ie6w7' => 
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
        'as' => 'generated::WvFIzTbfPI5ie6w7',
      ),
      'fallback' => false,
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
    'generated::4MNMddGPkmXWPYmB' => 
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
        'as' => 'generated::4MNMddGPkmXWPYmB',
      ),
      'fallback' => false,
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
    'generated::ali8lYNvQ57bNru1' => 
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
        'as' => 'generated::ali8lYNvQ57bNru1',
      ),
      'fallback' => false,
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
    'generated::6jVpjV41QxlrfTek' => 
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
        'as' => 'generated::6jVpjV41QxlrfTek',
      ),
      'fallback' => false,
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
    'generated::EDvQF3foVbWPQZNU' => 
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
        'as' => 'generated::EDvQF3foVbWPQZNU',
      ),
      'fallback' => false,
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
    'generated::Ut75SET6cX7SsYmO' => 
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
        'as' => 'generated::Ut75SET6cX7SsYmO',
      ),
      'fallback' => false,
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
    'generated::6paZndJBif7EM1Ri' => 
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
        'as' => 'generated::6paZndJBif7EM1Ri',
      ),
      'fallback' => false,
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
    'generated::2ScBOAnxItgS7717' => 
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
        'as' => 'generated::2ScBOAnxItgS7717',
      ),
      'fallback' => false,
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
    'generated::Ux5VefYazGYGFQNx' => 
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
        'as' => 'generated::Ux5VefYazGYGFQNx',
      ),
      'fallback' => false,
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
    'generated::pUcuH1a3HgkBuPI3' => 
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
        'as' => 'generated::pUcuH1a3HgkBuPI3',
      ),
      'fallback' => false,
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
    'generated::azSaMTsPBAXhBGW6' => 
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
        'as' => 'generated::azSaMTsPBAXhBGW6',
      ),
      'fallback' => false,
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
    'generated::0XByN45dHpGKiWBo' => 
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
        'as' => 'generated::0XByN45dHpGKiWBo',
      ),
      'fallback' => false,
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
    'generated::HL6t1SIlxdeCGuc7' => 
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
        'as' => 'generated::HL6t1SIlxdeCGuc7',
      ),
      'fallback' => false,
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
    'generated::pdQ6FTa2TGHOtDlg' => 
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
        'as' => 'generated::pdQ6FTa2TGHOtDlg',
      ),
      'fallback' => false,
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
    'generated::2LTyXmstVYy4rlSo' => 
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
        'as' => 'generated::2LTyXmstVYy4rlSo',
      ),
      'fallback' => false,
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
    'generated::QEZAA4sZemHcv2jW' => 
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
        'as' => 'generated::QEZAA4sZemHcv2jW',
      ),
      'fallback' => false,
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
    'generated::w0tpJh7lWj4y5qs0' => 
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
        'as' => 'generated::w0tpJh7lWj4y5qs0',
      ),
      'fallback' => false,
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
    'generated::dtekxoQsBjuYK8sC' => 
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
        'as' => 'generated::dtekxoQsBjuYK8sC',
      ),
      'fallback' => false,
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
    'generated::kwdZJV4W32seK34J' => 
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
        'as' => 'generated::kwdZJV4W32seK34J',
      ),
      'fallback' => false,
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
    'generated::O2dZoz4gDfvLADnH' => 
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
        'as' => 'generated::O2dZoz4gDfvLADnH',
      ),
      'fallback' => false,
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
    'generated::e72k1WWWjnZgkTbZ' => 
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
        'as' => 'generated::e72k1WWWjnZgkTbZ',
      ),
      'fallback' => false,
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
    'generated::BFrvlmMxeF91zM3z' => 
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
        'as' => 'generated::BFrvlmMxeF91zM3z',
      ),
      'fallback' => false,
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
    'generated::hMOiIy4siucMdsoP' => 
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
        'as' => 'generated::hMOiIy4siucMdsoP',
      ),
      'fallback' => false,
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
    'generated::k7WBXqQBHM380iQq' => 
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
        'as' => 'generated::k7WBXqQBHM380iQq',
      ),
      'fallback' => false,
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
    'generated::9GFeKIS3Oy4h5vfP' => 
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
        'as' => 'generated::9GFeKIS3Oy4h5vfP',
      ),
      'fallback' => false,
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
    'generated::uYTVdtfus2dXBVOr' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000007b56393c000000000435676e";}";s:4:"hash";s:44:"0NDilGI0mhQ1xnKudAy7/P3wtS4xaO7SaM355ctbUGw=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uYTVdtfus2dXBVOr',
      ),
      'fallback' => false,
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
    'generated::Q2pGiK3QtaQK2GPj' => 
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
        'as' => 'generated::Q2pGiK3QtaQK2GPj',
      ),
      'fallback' => false,
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
    'generated::fuN5IvihQTLoyWE2' => 
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
        'as' => 'generated::fuN5IvihQTLoyWE2',
      ),
      'fallback' => false,
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
    'generated::yisiSaFoJJpvGHZa' => 
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
        'as' => 'generated::yisiSaFoJJpvGHZa',
      ),
      'fallback' => false,
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
