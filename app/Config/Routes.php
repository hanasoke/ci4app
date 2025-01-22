<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/coba', 'Home::coba');

$routes->get('/coba/(:any)/(:num)', 'Coba::about/$1/$2');


// $routes->get('/coba/about', 'Coba::about');
// $routes->get('/coba', function() {
//     echo "Hello World!";
// });
// $routes->get('/coba', 'Coba::index');