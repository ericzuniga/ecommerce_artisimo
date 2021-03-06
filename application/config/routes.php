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

$route['default_controller'] = "users";
$route['register_user'] = "users/register_user";
$route['login_user'] = "users/login_user";
$route['logout_user'] = "users/logout_user";
$route['main'] = 'index/main_page';
$route['addmerch'] = "merchandise/add";
$route['editmerch'] = "merchandise/edit";
$route['merchandise/create_item'] = "merchandise/create_item";
$route['merchandise/edit_item'] = "merchandise/edit_item";
$route['products'] = "products";
// $route['products/(:any)'] = "products/$1";
$route['product/(:any)'] = "products/show_product_info/$1";
$route['shopping_cart'] = "index/cart";
$route['checkout'] = 'orders/checkout_order';
$route['maintest'] = 'index/main_page';

//route for adding to cart
// $route['add_to_cart'] = 'orders/add_to_cart';
$route['add_to_cart'] = '/orders/add_to_cart';
$route['cart_delete/(:any)'] = '/orders/cart_delete/$1';

$route['product_page/(:any)'] = 'products/product_page/$1';
$route['edit_qty'] = 'orders/edit_cart';
// route used to test functions
$route['test_admin'] = 'index/test_admin';
// admin routes
$route['admin'] = 'admins/admin_page';
$route['view_orders'] = 'admins/view_orders';

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */