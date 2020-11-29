<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'auth';
$route['login/p'] = 'auth/process';
$route['logout'] = 'auth/logout';
//user route
$route['user'] = 'user';
$route['user/edit/(:num)'] = 'user/edit/$1';
$route['user/edit/simpan/(:num)'] = 'user/edit_simpan/$1';
$route['user/tambah'] = 'user/tambah';
$route['user/tambah/simpan'] = 'user/tambah_simpan';
$route['user/hapus/(:num)'] = 'user/hapus/$1';
//artikel user
$route['artikel'] = 'artikel';
$route['artikel/yourartikel'] = 'artikel/artikel';
$route['artikel/lihat/(:num)'] = 'artikel/lihat/$1';
$route['artikel/yourartikel/edit/(:any)'] = 'artikel/edit/$1';
$route['artikel/yourartikel/edit/simpan/(:any)'] = 'artikel/edit_simpan/$2';
$route['artikel/yourartikel/tambah'] = 'artikel/tambah';
$route['artikel/yourartikel/tambah/simpan'] = 'artikel/tambah_simpan';
$route['artikel/yourartikel/hapus/(:num)'] = 'artikel/hapus/$1';
//all artikel
$route['artikel/edit/(:num)'] = 'artikel/edit/$1';
$route['artikel/edit/simpan/(:num)'] = 'artikel/edit_simpan/$1';
$route['artikel/tambah'] = 'artikel/tambah';
$route['artikel/lihat/(:num)'] = 'artikel/lihat/$1';
$route['artikel/tambah/simpan'] = 'artikel/tambah_simpan';
$route['artikel/hapus/(:num)'] = 'artikel/hapus/$1';
