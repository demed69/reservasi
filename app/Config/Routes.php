<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/keranjang', 'Pages::keranjang');
$routes->post('/keranjang/tambah', 'pages::tambah');
$routes->get('/keranjang(:num)', 'pages::hapus/$1');



/*from login */

$routes->get('/login', 'Login::index');
$routes->get('/login/daftar', 'Login::daftar');
$routes->post('/daftar/process', 'Login::process');
$routes->post('/login/process', 'Login::loginProcess'); // untuk form login
$routes->get('/logout', 'Login::logout');

/**meja */
$routes->get('/meja', 'Admin::meja');
$routes->post('/meja/simpan', 'Admin::simpan');
$routes->get('/meja/hapus/(:num)', 'Admin::hapusMeja/$1');

/*category*/
$routes->get('/category', 'Admin::category');
$routes->post('category/tambah', 'Admin::TambahCategory');
$routes->get('category/delete/(:num)', 'Admin::deleteCategory/$1');

/*menu*/
$routes->get('/menu', 'Admin::menu');
$routes->post('/menu/save', 'Admin::save');
$routes->get('menu/delete/(:num)', 'Admin::delete/$1');
$routes->post('menu/edit/(:num)', 'Admin::edit/$1');


/*admin */
$routes->get('/admin', 'Admin::index');
$routes->get('/pesanan', 'Admin::pesanan');


$routes->get('/pemasukan', 'Admin::pemasukan');


/*pengeluaran*/
$routes->get('/pengeluaran', 'Admin::pengeluaran');
$routes->post('/pengeluaran/simpan', 'admin::simpanPengeluaran');

/*kariawan */
$routes->get('/kariawan', 'Admin::kariawan');
$routes->post('/kariawan/editkaryawan/(:num)', 'Admin::editKaryawan/$1');
$routes->post('karyawan/delete(:num)', 'Admin::deleteKaryawan/$1');


//profile
$routes->get('/profile', 'Admin::profile');
