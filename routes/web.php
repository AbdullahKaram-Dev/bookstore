<?php

use Core\Route;

$route = new Route;
$num = "([\d]+)";
$str = "([\w-]+)";


$route->get('','HomeController@index');
$route->get('books','BookController@index');
$route->get('contact-us','ContactController@index');