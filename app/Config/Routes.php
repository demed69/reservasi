<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/keranjang', 'Pages::keranjang');


/*from login */

$routes->get('/login', 'Login::index');
$routes->get('/login/daftar', 'Login::daftar');




/*admin */
$routes->get('/admin', 'Admin::index');
$routes->get('/meja', 'Admin::meja');
$routes->get('/menu', 'Admin::menu');
$routes->get('/pesanan', 'Admin::pesanan');
$routes->get('/pemasukan', 'Admin::pemasukan');
$routes->get('/pengeluaran', 'Admin::pengeluaran');
$routes->get('/kariawan', 'Admin::kariawan');
