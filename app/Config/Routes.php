<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/coba', 'Home::coba');

$routes->get('/coba', 'Coba::index');
$routes->get('/coba/about', 'Coba::about');
