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
$routes->post('project/delete/(:num)', 'Project::delete/$1');
$routes->delete('project/delete/(:num)', 'Project::delete/$1');
$routes->get('project/edit/(:segment)', 'Project::edit/$1');
$routes->get('project/(:any)', 'Project::detail/$1');
$routes->post('project/update/(:num)', 'Project::update/$1');
$routes->get('project/edit/(:num)', 'Project::edit/$1');










