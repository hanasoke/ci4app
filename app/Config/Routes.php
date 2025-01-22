<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/coba', 'Home::coba');

// $routes->get('/coba/(:any)/(:num)', 'Coba::about/$1/$2');

$routes->get('/coba/index', 'Coba::index');
$routes->get('/coba/about', 'Coba::about');
$routes->get('/coba/(:any)', 'Coba::about/$1');

$routes->get('/users', 'Admin\Users::index');

// $routes->get('/coba/about', 'Coba::about');
// $routes->get('/coba', function() {
//     echo "Hello World!";
// });
// $routes->get('/coba', 'Coba::index');