<?php

use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/user', 'UserController::index');

$routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile/$1/$2/$3');

$routes->get('/user/create', 'UserController::create');

$routes->post('/user/store', 'UserController::store');
$routes->delete('/user/(:num)', 'UserController::delete/$3');
$routes->get('user/(:any', [UserController::class, 'show']);