<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/project', 'Pages::project');
$routes->get('/project/(:num)', 'Pages::projectDetail/$1');
$routes->get('/contact', 'Pages::addSaran');
$routes->get('/profile', 'Pages::profile');
$routes->get('/blog', 'Pages::blog');
$routes->get('/backend', 'Admin::login');
$routes->get('/ngadaftar', 'Admin::signup');
$routes->get('/admin/project/new', 'Admin::addProject');
$routes->get('/admin/project/edit/(:num)', 'Admin::editProject/$1');
$routes->get('/admin/project/update/(:num)', 'Admin::updateProject($1)');
$routes->get('/admin/skill', 'Skill::index');
$routes->get('/admin/skill/add', 'Skill::addSkill');
$routes->get('/admin/skill/save', 'Skill::saveSkill');
$routes->get('/admin/org', 'Org::index');
$routes->get('/admin/org/add', 'Org::addOrg');
$routes->get('/admin/org/save', 'Org::saveOrg');
$routes->get('/admin/exp', 'Exp::index');
$routes->get('/admin/exp/add', 'Exp::add');
$routes->get('/admin/exp/edit', 'Exp::edit');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
