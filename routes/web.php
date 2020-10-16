<?php

use Core\Route;

$route = new Route;
$id = "([\d]+)";
$str = "([\w-]+)";

/* Main Root For Site */
$route->get('','HomeController@index');

$route->get("books/page/$id",'BookController@index');
$route->get("books/show/$id","BookController@show");

$route->get("books/category/$id","CategoryController@showBooksCategory");

$route->get('contact-us','ContactController@index');
$route->post('contact-us/send', 'ContactController@send');

$route->get('authors','AuthorController@index');

/* Route Login And Register For Users */

$route->get('register','AuthController@register');
$route->post('do-register','AuthController@doRegister');

$route->get('login','AuthController@login');
$route->post('do-login','AuthController@doLogin');

$route->get('logout','AuthController@logout','UserAuth');
