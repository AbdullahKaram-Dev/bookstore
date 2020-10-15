<?php

use Core\Route;

$route = new Route;
$num = "([\d]+)";
$str = "([\w-]+)";

/* Main Root For Site */

$route->get('','HomeController@index');
$route->get('books','BookController@index');
$route->get('contact-us','ContactController@index');
$route->post('contact-us/send', 'ContactController@send');


/* Route Login And Register For Users */

$route->get('register','AuthController@register');
$route->post('do-register','AuthController@doRegister');

$route->get('login','AuthController@login');
$route->post('do-login','AuthController@doLogin');

$route->get('logout','AuthController@logout','UserAuth');
