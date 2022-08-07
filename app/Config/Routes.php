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
$routes->get('/team', 'Home::team');
$routes->get('/about', 'Home::about');

$routes->get('/blog', 'Blog::index');
$routes->get('/blogs', 'Blog::home');
$routes->get('blog/(:segment)', 'Blog::detail/$1');

$routes->add('/careers', 'Karir::index');
$routes->post('/jobs', 'Karir::daftar');

$routes->get('/webinar', 'Blog::webinar');

$routes->get('/SurveiSmartphone/(:any)', 'SurveiControl::index/$1');


// restful api
// $routes->get('/api/v1/', 'AjaxBlog::index');
// $routes->get('/api/v1/blogs', 'AjaxBlog::getList');
// $routes->post('/api/v1/artikel', 'AjaxBlog::postArtikel',);
// $routes->get('/api/v1/artikel', 'AjaxBlog::postArtikel', ['filter' => 'ApiFilter']);

// Admin Routes
$routes->get('/admin/home', 'Admin::crt_artikel', ['filter' => 'AdminFilter']);
$routes->get('/admin/crt_artikel', 'Admin::crt_artikel', ['filter' => 'AdminFilter']);
$routes->get('/admin/arsip_foto', 'Admin::arsip_foto', ['filter' => 'AdminFilter']);
$routes->get('/admin/arsip_arikel', 'Admin::arsip_arikel', ['filter' => 'AdminFilter']);
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
