<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/project', 'Project::index');
$routes->get('/project/create', 'Project::create');
$routes->patch('/project/edit/(:num)', 'Project::create/$1');
