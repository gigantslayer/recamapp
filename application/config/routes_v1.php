<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'auth';


$route['login'] = 'auth/index';

$route['blocked'] = 'auth/blocked';

$route['admin'] = 'admin';
$route['manager']  = 'manager';

//Routes Halaman Admin
$route['listdepartemen'] = 'admin/listdepartemen';
$route['tambahdatadepartemen'] = 'admin/createdepartemen';
$route['editdatadepartemen/(:any)'] = 'admin/editdepartemen/$1';


$route['listkaryawan'] = 'admin/listkaryawan';
$route['tambahdatakaryawan'] = 'admin/createkaryawan';
$route['editdatakaryawan/(:any)'] = 'admin/editkaryawan/$1';

$route['listperizinan'] = 'admin/listperizinan';
$route['detaildataperizinan/(:any)'] = 'admin/detailperizinan/$1';
$route['downloadberkas/(:any)'] = 'admin/downloadberkas/$1';

$route['profile-admin'] = 'admin/profile';
$route['editprofile-admin'] = 'admin/edit';
$route['ubahpassword-admin'] = 'admin/changepassword';

//


//Routes Halaman Manager
$route['listadmin'] = 'manager/listadmin';
$route['tambahdataadmin'] = 'manager/createadmin';
$route['editdataadmin/(:any)'] = 'manager/editadmin/$1';

$route['profile-manager'] = 'manager/profile';
$route['ubahpassword-manager'] = 'manager/changepassword';
//



$route['profile'] = 'profile';
$route['editprofile'] = 'profile/edit';
$route['ubahpassword'] = 'profile/changepassword';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
