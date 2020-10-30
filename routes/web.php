<?php

use Core\Route;

$route = new Route;

/* Pattern For String And numbers */

$id = "([\d]+)";
$tags = "([\w-]+)";

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

/* start route admin-book  */

$route->get('dashboard','AdminHomeController@index',"AdminAuth");
$route->get('dashboard/books','AdminBookController@index',"AdminAuth");
$route->get('dashboard/books/create','AdminBookController@create',"AdminAuth");
$route->post('dashboard/books/store','AdminBookController@store',"AdminAuth");
$route->get("dashboard/books/delete/$id",'AdminBookController@delete',"AdminAuth");
$route->get("dashboard/books/show/$id",'AdminBookController@show',"AdminAuth");
$route->get("dashboard/books/edit/$id",'AdminBookController@edit',"AdminAuth");
$route->post("dashboard/books/update/$id",'AdminBookController@update',"AdminAuth");

/* end route book */


/* start route admin-category */

$route->get('dashboard/categories',"AdminCategoryController@index","AdminAuth");
$route->get("dashboard/category/change-status/$id/$tags","AdminCategoryController@changeStatusCategory","AdminAuth");
$route->get("dashboard/category/show/$id","AdminCategoryController@show","AdminAuth");
$route->get("dashboard/category/edit/$id",'AdminCategoryController@edit',"AdminAuth");
$route->post("dashboard/category/update/$id",'AdminCategoryController@update',"AdminAuth");
$route->get("dashboard/category/delete/$id","AdminCategoryController@delete","AdminAuth");
$route->get("dashboard/category/create","AdminCategoryController@create","AdminAuth");
$route->post("dashboard/category/store","AdminCategoryController@store","AdminAuth");

/* end route admin-category */

/* start route authors */

$route->get('dashboard/authors',"AdminAuthorController@index","AuthAdmin");

/* end route authors */