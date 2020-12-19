<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'page';
$route['laporan/view/(:any)'] = 'laporan/view/$1';
$route['laporan/(:any)'] = 'laporan/$1';
$route['add'] = 'laporan/add';
$route['(:any)'] = 'page/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
