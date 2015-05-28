<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['signin'] = "main/signin";
$route['users/signin'] = "users/signin";
$route['register'] = "main/register";
$route['logoff'] = "main";
$route['users/register'] = "users/register";
$route['dashboard/admin'] ="dashboards/admin";
$route['dashboard'] ="dashboards";

$route['users/new'] = "admins/add";
$route['admins/create'] = 'admins/create';
$route['admins/remove'] = 'admins/remove';

$route['users/edit/:num'] = "admins/edit";
$route['users/edit'] = "dashboards/edit";

$route['users/show/:num'] = "walls/index";

$route['users/edit/info'] = "users/edit_user";
$route['users/edit/pwd'] = "users/edit_pwd";
$route['users/edit/description'] = "users/edit_description";


$route['walls/post'] = "walls/post";
$route['walls/add/comment'] = "walls/add";











$route['404_override'] = '';

//end of routes.php