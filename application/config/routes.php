<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = 'user/index';
$route['404_override'] = '';

/*admin*/
$route['admin'] = 'user/index';
$route['admin/signup'] = 'user/signup';
$route['admin/create_member'] = 'user/create_member';
$route['admin/login'] = 'user/index';
$route['admin/logout'] = 'user/logout';
$route['admin/login/validate_credentials'] = 'user/validate_credentials';

$route['admin/products'] = 'admin_products/index';
$route['admin/products/add'] = 'admin_products/add';
$route['admin/products/update'] = 'admin_products/update';
$route['admin/products/update/(:any)'] = 'admin_products/update/$1';
$route['admin/products/delete/(:any)'] = 'admin_products/delete/$1';
$route['admin/products/(:any)'] = 'admin_products/index/$1'; //$1 = page number

$route['admin/manufacturers'] = 'admin_manufacturers/index';
$route['admin/manufacturers/add'] = 'admin_manufacturers/add';
$route['admin/manufacturers/update'] = 'admin_manufacturers/update';
$route['admin/manufacturers/update/(:any)'] = 'admin_manufacturers/update/$1';
$route['admin/manufacturers/delete/(:any)'] = 'admin_manufacturers/delete/$1';
$route['admin/manufacturers/(:any)'] = 'admin_manufacturers/index/$1'; //$1 = page number

$route['admin/roles'] = 'admin_roles/index';
//$route['admin/users/add'] = 'admin_users/add';
//$route['admin/users/update'] = 'admin_users/update';
//$route['admin/users/update/(:any)'] = 'admin_users/update/$1';
//$route['admin/users/delete/(:any)'] = 'admin_users/delete/$1';
//$route['admin/projects/(:any)'] = 'admin_users/index/$1'; //$1 = page number

$route['admin/users'] = 'admin_users/index';
$route['admin/users/add'] = 'admin_users/add';
$route['admin/users/update'] = 'admin_users/update';
$route['admin/users/update/(:any)'] = 'admin_users/update/$1';
$route['admin/users/delete/(:any)'] = 'admin_users/delete/$1';
//$route['admin/projects/(:any)'] = 'admin_users/index/$1'; //$1 = page number

$route['admin/projects'] = 'admin_projects/index';
$route['admin/projects/add'] = 'admin_projects/add';
$route['admin/projects/update'] = 'admin_projects/update';
$route['admin/projects/update/(:any)'] = 'admin_projects/update/$1';
$route['admin/projects/delete/(:any)'] = 'admin_projects/delete/$1';
//$route['admin/projects/(:any)'] = 'admin_projects/index/$1'; //$1 = page number

$route['admin/departments'] = 'admin_departments/index';
$route['admin/departments/add'] = 'admin_departments/add';
$route['admin/departments/update'] = 'admin_departments/update';
$route['admin/departments/update/(:any)'] = 'admin_departments/update/$1';
$route['admin/departments/delete/(:any)'] = 'admin_departments/delete/$1';
//$route['admin/projects/(:any)'] = 'admin_users/index/$1'; //$1 = page number

$route['admin/contractors'] = 'admin_contractors/index';
$route['admin/contractors/add'] = 'admin_contractors/add';
$route['admin/contractors/update'] = 'admin_contractors/update';
$route['admin/contractors/update/(:any)'] = 'admin_contractors/update/$1';
$route['admin/contractors/delete/(:any)'] = 'admin_contractors/delete/$1';
//$route['admin/projects/(:any)'] = 'admin_users/index/$1'; //$1 = page number

/* End of file routes.php */
/* Location: ./application/config/routes.php */