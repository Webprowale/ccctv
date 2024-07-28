<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/about', 'AboutController::index');
$routes->get('/service', 'ServiceController::index');
$routes->get('/project', 'ProjectController::index');
$routes->get('/contact', 'ContactController::index');
$routes->get('/blog', 'BlogController::index');

