<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'Login';
//
$route['pessoa'] = 'Pessoa';
$route['edita_pessoa/(:num)'] = 'Pessoa/edita_pessoa/$1';
$route['deleta_pessoa/(:num)'] = 'Pessoa/deleta_pessoa/$1';
$route['recebe_dados'] = 'Pessoa/recebe_dados';
$route['get_pessoa'] = 'Pessoa/get_pessoa';
$route['listar'] = 'Listar';
$route['login'] = 'Login';
$route['home'] = 'Home';

