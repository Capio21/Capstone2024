<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/Home', 'UserController::User');
$routes->get('/cart', 'UserController::cart');
$routes->get('/checkout', 'UserController::checkout');
$routes->get('/Landing', 'UserController::Landing');
$routes->get('/Workshop', 'UserController::Workshop');
$routes->get('/admin', 'UserController::Admin');
$routes->get('/registration', 'UserController::registration');


/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/signup', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);



//admin controller

// app/Config/Routes.php

$routes->get('members', 'MemberController::index');
$routes->get('members/create', 'MemberController::create');
$routes->post('members/store', 'MemberController::store');
$routes->get('members/edit/(:num)', 'MemberController::edit/$1');
$routes->post('members/update', 'MemberController::update');
$routes->get('members/delete/(:num)', 'MemberController::delete/$1');
