<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::index');
$routes->get('pages/about', 'Pages::about');
$routes->get('pages/contact', 'Pages::contact');
$routes->get('project', 'Project::index');               
$routes->get('project/create', 'Project::create');      
$routes->post('project/save', 'Project::save');         
$routes->get('project/(:segment)', 'Project::detail/$1'); 




