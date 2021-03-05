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
// Routes Guru
$routes->get('/', 'Home::index');
$routes->get('/detailGuru/(:segment)', 'Guru::detail/$1');
// dibawah ini untuk routes guru 
$routes->get('/guruIndex', 'Guru::index');
$routes->get('/guruForms', 'Guru::formadd');
$routes->post('/guruTambah', 'Guru::save');
$routes->delete('/guruDelete/(:num)', 'Guru::Delete/$1');
// routes login
$routes->get('/log', 'Login::index');
// routes mapel 
$routes->get('/MapelView', 'Mapel::index');
$routes->get('/formMapel', 'Mapel::formadd');
$routes->post('/mapelTambah', 'Mapel::save');
$routes->get('/formEdit/Mapel/(:segment)', 'Mapel::editform/$1');
$routes->delete('/mapelDelete/(:num)', 'Mapel::delete/$1');
//route kelas
$routes->get('/kelasIndex', 'Kelas::index');
$routes->get('/formKelas', 'Kelas::formadd');
$routes->post('/logicTambah', 'Kelas::save');
$routes->get('/EditForm/Kelas/(:segment)', 'Kelas::editkelas/$1');
// deklarasikan 
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
