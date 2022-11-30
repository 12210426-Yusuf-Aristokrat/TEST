<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/','PenggunaController::index',['filters'=>'auth']);
// $routes->get('/', 'Pages::index');
$routes->delete('logout','PenggunaController::logout');

$routes->group('login',['filters'=>'auth'] ,function(RouteCollection $routes){
    $routes->get('lupa','PenggunaController::viewLupaPassword');
    $routes->get('/','PenggunaController::viewLogin');
    $routes->post('/','PenggunaController::login');
    $routes->patch('/','PenggunaController::lupaPassword');
});

// $routes->group('pages',['filters'=>'loginSession'],function(RouteCollection $routes){
//     $routes->get('pelanggan','Pages::pelanggan');
//     $routes->get('provinsi','Pages::provinsi');
//     $routes->get('kabko','Pages::kabko');
//     $routes->get('kecamatan','Pages::kecamatan');
//     $routes->get('kelurahan','Pages::kelurahan');
//     $routes->get('alamatpelanggan','Pages::alamatpelanggan');
//     $routes->get('kategoriproduk','Pages::kategoriproduk');
//     $routes->get('mitra','Pages::mitra');
//     $routes->get('produk','Pages::produk');
//     $routes->get('varianproduk','Pages::varianproduk');
//     $routes->get('sysadmin','Pages::sysadmin');
//     $routes->get('metodebayar','Pages::metodebayar');
//     $routes->get('keranjang','Pages::keranjang');
//     $routes->get('pemesanan','Pages::pemesanan');
//     $routes->get('detailpemesanan','Pages::detailpemesanan');
//     $routes->get('kurir','Pages::kurir');
//     $routes->get('pengiriman','Pages::pengiriman');
//     $routes->get('pembayaran','Pages::pembayaran');
//     $routes->get('gambarproduk','Pages::gambarproduk');
// });




// add more  route :v
$routes->group('pelanggan',['filters'=>'loginSession'], function(RouteCollection $routes){
    $routes->get('/', 'PelangganController::index');
    $routes->post('/', 'PelangganController::store');
    $routes->patch('/', 'PelangganController::update');
    $routes->delete('/', 'PelangganController::delete');
    $routes->get('(:num)', 'PelangganController::show/$1');
    $routes->get('all', 'PelangganController::all');
});

$routes->group('provinsi',['filters'=>'loginSession'], function(RouteCollection $routes){
    $routes->get('/', 'ProvinsiController::index');
    $routes->post('/','ProvinsiController::store');
    $routes->patch('/','ProvinsiController::update');
    $routes->delete('/','ProvinsiController::delete');
    $routes->get('(:num)','ProvinsiController::show/$1');
    $routes->get('all','ProvinsiController::all');
});

$routes->group('kabko',['filters'=>'loginSession'], function(RouteCollection $routes){
    $routes->get('/', 'KabkoController::index');
    $routes->post('/','KabkoController::store');
    $routes->patch('/','KabkoController::update');
    $routes->delete('/','KabkoController::delete');
    $routes->get('(:num)','KabkoController::show/$1');
    $routes->get('all','KabkoController::all');
});

$routes->group('kecamatan',['filters'=>'loginSession'], function(RouteCollection $routes){
    $routes->get('/', 'KecamatanController::index');
    $routes->post('/','KecamatanController::store');
    $routes->patch('/','KecamatanController::update');
    $routes->delete('/','KecamatanController::delete');
    $routes->get('(:num)','KecamatanController::show/$1');
    $routes->get('all','KecamatanController::all');
});

$routes->group('kelurahan',['filters'=>'loginSession'], function(RouteCollection $routes){
    $routes->get('/', 'KelurahanController::index');
    $routes->post('/','KelurahanController::store');
    $routes->patch('/','KelurahanController::update');
    $routes->delete('/','KelurahanController::delete');
    $routes->get('(:num)','KelurahanController::show/$1');
    $routes->get('all','KelurahanController::all');
});

$routes->group('alamatpelanggan',['filters'=>'loginSession'], function(RouteCollection $routes){
    $routes->get('/', 'AlamatPelangganController::index');
    $routes->post('/','AlamatPelangganController::store');
    $routes->patch('/','AlamatPelangganController::update');
    $routes->delete('/','AlamatPelangganController::delete');
    $routes->get('(:num)','AlamatPelangganController::show/$1');
    $routes->get('all','AlamatPelangganController::all');
});

$routes->group('kategoriproduk',['filters'=>'loginSession'], function(RouteCollection $routes){
    $routes->get('/', 'KategoriProdukController::index');
    $routes->post('/','KategoriProdukController::store');
    $routes->patch('/','KategoriProdukController::update');
    $routes->delete('/','KategoriProdukController::delete');
    $routes->get('(:num)','KategoriProdukController::show/$1');
    $routes->get('all','KategoriProdukController::all');
});

$routes->group('mitra',['filters'=>'loginSession'], function(RouteCollection $routes){
    $routes->get('/', 'MitraController::index');
    $routes->post('/','MitraController::store');
    $routes->patch('/','MitraController::update');
    $routes->delete('/','MitraController::delete');
    $routes->get('(:num)','MitraController::show/$1');
    $routes->get('all','MitraController::all');
});

$routes->group('produk',['filters'=>'loginSession'], function(RouteCollection $routes){
    $routes->get('/', 'ProdukController::index');
    $routes->post('/','ProdukController::store');
    $routes->patch('/','ProdukController::update');
    $routes->delete('/','ProdukController::delete');
    $routes->get('(:num)','ProdukController::show/$1');
    $routes->get('all','ProdukController::all');
});

// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
// $routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
//     $routes->get('/', 'PenggunaController::index');
//     $routes->get('table', 'PenggunaController::tables');
//     $routes->post('/','PenggunaController::store');
//     $routes->patch('/','PenggunaController::update');
//     $routes->delete('/','PenggunaController::delete');
//     $routes->get('(:num)','PenggunaController::show/$1');
//     $routes->get('all','PenggunaController::all');
// });
/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
