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
$routes->get('/Admin', 'UserController::Admin');


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

