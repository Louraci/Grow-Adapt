<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/agriculteur', 'Home::agriculteur');
$routes->get('/planteform', 'Home::planteform');
$routes->get('/planteresult', 'Home::planteresult');
$routes->post('/user', 'Home::user');
$routes->post('login', 'register::register');





