<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('Home', 'Home::index');
$routes->get('/', 'UserController::User');
$routes->get('/cart', 'UserController::cart');
$routes->get('/checkout', 'UserController::checkout');
