<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'AuthController::login');
$routes->get('test-db', 'Home::testDatabaseConnection');

// Authentication Routes
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::register');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

// Contact Management Routes (only accessible if logged in)
$routes->get('/contacts', 'ContactController::index', ['filter' => 'auth']);
$routes->get('/contacts/create', 'ContactController::create', ['filter' => 'auth']);
$routes->post('/contacts/create', 'ContactController::create', ['filter' => 'auth']);
$routes->get('/contacts/edit/(:num)', 'ContactController::edit/$1', ['filter' => 'auth']);
$routes->post('/contacts/update/(:num)', 'ContactController::update/$1', ['filter' => 'auth']);
$routes->get('/contacts/delete/(:num)', 'ContactController::delete/$1', ['filter' => 'auth']);

$routes->get('logs', "LogViewerController::index");

