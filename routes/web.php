<?php

use Core\Route;

$route = new Route;

/* Pattern For String And numbers */

$id = "([\d]+)";
$str = "([\w-]+)";

/* Main Root For Site */

$route->get('','HomeController@index');

/* Route books */

$route->get("books/page/$id",'BookController@index');
$route->get("books/show/$id","BookController@show");

/* Route category */

$route->get("books/category/$id","CategoryController@showBooksCategory");


/* Route cart */

$route->get("cart/add/$id",'CartController@add');
$route->get("cart",'CartController@index','UserAuth');
$route->post('cart/store','CartController@store','UserAuth');
$route->get('cart/empty','CartController@emptyCart','UserAuth');
$route->get("cart/remove-book/$id",'CartController@removeBook','UserAuth');
/* Route contact */

$route->get('contact-us','ContactController@index');
$route->post('contact-us/send', 'ContactController@send');

/* Route authors */

$route->get('authors','AuthorController@index');
$route->get("authors/show/$id",'AuthorController@showBooks');

/* Route Login And Register For Users */

$route->get('register','AuthController@register');
$route->post('do-register','AuthController@doRegister');
$route->get('login','AuthController@login');
$route->post('do-login','AuthController@doLogin');
$route->get('logout','AuthController@logout','UserAuth');




/* start admin route */

$route->get('dashboard','AdminHomeController@index',"AdminAuth");
$route->get('dashboard/books','AdminBookController@index',"AdminAuth");
$route->get('dashboard/books/create','AdminBookController@create',"AdminAuth");
$route->post('dashboard/books/store','AdminBookController@store',"AdminAuth");
$route->get("dashboard/books/delete/$id",'AdminBookController@delete',"AdminAuth");
$route->get("dashboard/books/show/$id",'AdminBookController@show',"AdminAuth");