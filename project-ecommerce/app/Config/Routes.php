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

$routes->group('pages',['filters'=>'loginSession'],function(RouteCollection $routes){
    $routes->get('pelanggan','Pages::pelanggan');
    $routes->get('provinsi','Pages::provinsi');
    $routes->get('kabko','Pages::kabko');
    $routes->get('kecamatan','Pages::kecamatan');
    $routes->get('kelurahan','Pages::kelurahan');
    $routes->get('alamatpelanggan','Pages::alamatpelanggan');
    $routes->get('kategoriproduk','Pages::kategoriproduk');
    $routes->get('mitra','Pages::mitra');
    $routes->get('produk','Pages::produk');
    $routes->get('varianproduk','Pages::varianproduk');
    $routes->get('sysadmin','Pages::sysadmin');
    $routes->get('metodebayar','Pages::metodebayar');
    $routes->get('keranjang','Pages::keranjang');
    $routes->get('pemesanan','Pages::pemesanan');
    $routes->get('detailpemesanan','Pages::detailpemesanan');
    $routes->get('kurir','Pages::kurir');
    $routes->get('pengiriman','Pages::pengiriman');
    $routes->get('pembayaran','Pages::pembayaran');
    $routes->get('gambarproduk','Pages::gambarproduk');
});

$routes->group('login',['filters'=>'auth'] ,function(RouteCollection $routes){
    $routes->get('lupa','PenggunaController::viewLupaPassword');
    $routes->get('/','PenggunaController::viewLogin');
    $routes->post('/','PenggunaController::login');
    $routes->patch('/','PenggunaController::lupaPassword');
});

$routes->delete('logout','PenggunaController::logout');

// add more  route :v
$routes->group('pengguna',['filters'=>'loginSession'], function(RouteCollection $routes){
    $routes->get('/', 'PenggunaController::index');
    $routes->get('table', 'PenggunaController::tables');
    $routes->post('/','PenggunaController::store');
    $routes->patch('/','PenggunaController::update');
    $routes->delete('/','PenggunaController::delete');
    $routes->get('(:num)','PenggunaController::show/$1');
    $routes->get('pengguna','PenggunaController::pengguna');
    $routes->get('pelanggan','PenggunaController::pelanggan');
    $routes->get('provinsi','PenggunaController::provinsi');
    $routes->get('kabko','PenggunaController::kabko');
    $routes->get('kecamatan','PenggunaController::kecamatan');
    $routes->get('kelurahan','PenggunaController::kelurahan');
    $routes->get('alamatpelanggan','PenggunaController::alamatpelanggan');
    $routes->get('kategoriproduk','PenggunaController::kategoriproduk');
    $routes->get('mitra','PenggunaController::mitra');
    $routes->get('produk','PenggunaController::produk');
    $routes->get('varianproduk','PenggunaController::varianproduk');
    $routes->get('sysadmin','PenggunaController::sysadmin');
    $routes->get('metodebayar','PenggunaController::metodebayar');
    $routes->get('keranjang','PenggunaController::keranjang');
    $routes->get('pemesanan','PenggunaController::pemesanan');
    $routes->get('detailpemesanan','PenggunaController::detailpemesanan');
    $routes->get('kurir','PenggunaController::kurir');
    $routes->get('pengiriman','PenggunaController::pengiriman');
    $routes->get('pembayaran','PenggunaController::pembayaran');
    $routes->get('gambarproduk','PenggunaController::gambarproduk');
});
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
