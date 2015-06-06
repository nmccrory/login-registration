<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'users';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['check'] = 'main/checkSession';
$route['login'] = 'users/login';
$route['register'] ='users/create';
$route['welcome'] = 'welcome'
?>