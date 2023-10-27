<?php

use App\Controllers\UserController;
use App\Controllers\KelasController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/user', 'UserController::index');

$routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile/$1/$2/$3');

$routes->get('/user/create', [UserController::class,'create']);
$routes->post('/user/store', [UserController::class,'store']);
$routes->get('/user/(:any)/edit', [UserController::class,'edit']);
$routes->put('/user/(:any)', [UserController::class,'update']);
$routes->delete('/user/(:any)', [UserController::class,'destroy']);

$routes->get('/user/(:any)', [UserController::class, 'show']);

$routes->get('/kelas/create', [KelasController::class,'create']);
$routes->post('/kelas/store', [KelasController::class,'store']);
$routes->get('/kelas', [KelasController::class,'index']);
$routes->get('/kelas/(:any)/edit', [KelasController::class,'edit']);
$routes->put('/kelas/(:any)', [KelasController::class,'update']);
$routes->delete('/kelas/(:any)', [KelasController::class,'destroy']);