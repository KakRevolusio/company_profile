<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Beranda::index');

$routes->get('/visi', 'Home::visi');
$routes->get('/latar', 'Home::latar');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/kebijakan', 'Home::kebijakan');
$routes->get('/kebijakan2', 'Home::kebijakan2');
$routes->get('/syarat', 'Home::syarat');
$routes->get('/alur', 'Home::alur');
$routes->get('/devisi', 'Home::devisi');
$routes->get('/kemitraan', 'Home::kemitraan');
///////////////////////////////////////////////////
$routes->get('/admin/blog', 'Blog::admin');
$routes->get('/blog', 'Blog::index');
$routes->get('/admin', 'Blog::admin');
$routes->get('/admin/blog/create', 'Blog::create');
$routes->post('/admin/store', 'Blog::store');
$routes->get('/admin/blog/edit/(:num)', 'Blog::edit/$1');
$routes->post('/admin/blog/update/(:num)', 'Blog::update/$1');
$routes->get('/admin/blog/delete/(:num)', 'Blog::delete/$1');

////////////////////////////////////////////////////////
$routes->get('/pertanyaan', 'Pertanyaan::index');
$routes->get('/admin/pertanyaan', 'Pertanyaan::admin');
$routes->get('/admin/pertanyaan/create', 'Pertanyaan::create');
$routes->post('/admin/pertanyaan/store', 'Pertanyaan::store');
$routes->get('/admin/pertanyaan/edit/(:num)', 'Pertanyaan::edit/$1');
$routes->post('/admin/pertanyaan/update/(:num)', 'Pertanyaan::update/$1');
$routes->get('/admin/pertanyaan/delete/(:num)', 'Pertanyaan::delete/$1');
//////////////////////////////////////////////////////////////////////////
$routes->get('/', 'Alat::index');
$routes->get('/admin/alat', 'Alat::admin');
$routes->get('/admin/alat/create', 'Alat::create');
$routes->post('/admin/alat/store', 'Alat::store');
$routes->get('/admin/alat/edit/(:num)', 'Alat::edit/$1');
$routes->post('/admin/alat/update/(:num)', 'Alat::update/$1');
$routes->get('/admin/alat/delete/(:num)', 'Alat::delete/$1');

//////////////////////////////////////////////////////////////////////////////////
$routes->get('/lapagan', 'Lapangan::index');
$routes->get('/admin/lapangan', 'Lapangan::admin');
$routes->get('/admin/lapangan/create', 'Lapangan::create');
$routes->post('/admin/lapangan/store', 'Lapangan::store');
$routes->get('/admin/lapangan/edit/(:num)', 'Lapangan::edit/$1');
$routes->post('/admin/lapangan/update/(:num)', 'Lapangan::update/$1');
$routes->get('/admin/lapangan/delete/(:num)', 'Lapangan::delete/$1');

////////////////////////////////////////////////////////////////////////////////
$routes->get('/marketing', 'Marketing::index');
$routes->get('/admin/marketing', 'Marketing::admin');
$routes->get('/admin/marketing/create', 'Marketing::create');
$routes->post('/admin/marketing/store', 'Marketing::store');
$routes->get('/admin/marketing/edit/(:num)', 'Marketing::edit/$1');
$routes->post('/admin/marketing/update/(:num)', 'Marketing::update/$1');
$routes->get('/admin/marketing/delete/(:num)', 'Marketing::delete/$1');

///////////////////////////////////////////////////////////////////////////////
$routes->get('/progamer', 'Progamer::index');
$routes->get('/admin/progamer', 'Progamer::admin');
$routes->get('/admin/progamer/create', 'Progamer::create');
$routes->post('/admin/progamer/store', 'Progamer::store');
$routes->get('/admin/progamer/edit/(:num)', 'Progamer::edit/$1');
$routes->post('/admin/progamer/update/(:num)', 'Progamer::update/$1');
$routes->get('/admin/progamer/delete/(:num)', 'Progamer::delete/$1');

///////////////////////////////////////////////////////////////////////////////
$routes->get('/perusahaan', 'Perusahaan::index');
$routes->get('/admin/perusahaan', 'Perusahaan::admin');
$routes->get('/admin/perusahaan/create', 'Perusahaan::create');
$routes->post('/admin/perusahaan/store', 'Perusahaan::store');
$routes->get('/admin/perusahaan/edit/(:num)', 'Perusahaan::edit/$1');
$routes->post('/admin/perusahaan/update/(:num)', 'Perusahaan::update/$1');
$routes->get('/admin/perusahaan/delete/(:num)', 'Perusahaan::delete/$1');
////////////////////////////////////////////////////////////////////////////////
$routes->get('/beranda', 'Beranda::index');
$routes->get('/admin/beranda', 'Beranda::admin');
$routes->get('/admin/beranda/create', 'Beranda::create');
$routes->post('/admin/beranda/store', 'Beranda::store');
$routes->get('/admin/beranda/edit/(:num)', 'Beranda::edit/$1');
$routes->post('/admin/beranda/update/(:num)', 'Beranda::update/$1');
$routes->get('/admin/beranda/delete/(:num)', 'Beranda::delete/$1');
////////////////////////////////////////////////////////////////////////////////
$routes->get('/tes', 'Tes::index');
$routes->get('/admin/tes', 'Tes::admin');
$routes->get('/admin/tes/create', 'Tes::create');
$routes->post('/admin/tesmony/store', 'Tes::store');
$routes->get('/admin/tes/edit/(:num)', 'Tes::edit/$1');
$routes->post('/admin/tes/update/(:num)', 'Tes::update/$1');
$routes->get('/admin/tes/delete/(:num)', 'Tes::delete/$1');
///////////////////////////////////////////////////////////////////////////////////
$routes->get('/video', 'Video::index');
$routes->get('/admin/video', 'Video::admin');
$routes->get('/admin/video/create', 'Video::create');
$routes->post('/admin/video/store', 'Video::store');
$routes->get('/admin/video/edit/(:num)', 'Video::edit/$1');
$routes->post('/admin/video/update/(:num)', 'Video::update/$1');
$routes->get('/admin/video/delete/(:num)', 'Video::delete/$1');
/////////////////////////////////////////////////////////////////////////////////////
$routes->get('/foto', 'Foto::index');
$routes->get('/admin/foto', 'Foto::admin');
$routes->get('/admin/foto/create', 'Foto::create');
$routes->post('/admin/foto/store', 'Foto::store');
$routes->get('/admin/foto/edit/(:num)', 'Foto::edit/$1');
$routes->post('/admin/foto/update/(:num)', 'Foto::update/$1');
$routes->get('/admin/foto/delete/(:num)', 'Foto::delete/$1');
/////////////////////////////////////////////////////////////////////////////////////
$routes->get('/acara', 'Acara::index');
$routes->get('/admin/acara', 'Acara::admin');
$routes->get('/admin/acara/create', 'Acara::create');
$routes->post('/admin/acara/store', 'Acara::store');
$routes->get('/admin/acara/edit/(:num)', 'Acara::edit/$1');
$routes->post('/admin/acara/update/(:num)', 'Acara::update/$1');
$routes->get('/admin/acara/delete/(:num)', 'Acara::delete/$1');
/////////////////////////////////////////////////////////////////////////////////////
$routes->get('/beritaterkini', 'Beritaterkini::index');
$routes->get('/admin/beritaterkini', 'Beritaterkini::admin');
$routes->get('/admin/beritaterkini/create', 'Beritaterkini::create');
$routes->post('/admin/beritaterkini/store', 'Beritaterkini::store');
$routes->get('/admin/beritaterkini/edit/(:num)', 'Beritaterkini::edit/$1');
$routes->post('/admin/beritaterkini/update/(:num)', 'Beritaterkini::update/$1');
$routes->get('/admin/beritaterkini/delete/(:num)', 'Beritaterkini::delete/$1');
////////////////////////////////////////////////////////////////////////////////////
$routes->get('/pencapaian', 'Pencapaian::index');

$routes->get('/admin/pencapaian', 'Pencapaian::admin');
$routes->get('/admin/pencapaian/create', 'Pencapaian::create');
$routes->post('/admin/pencapaian/store', 'Pencapaian::store');
$routes->get('/admin/pencapaian/edit/(:num)', 'Pencapaian::edit/$1');
$routes->post('/admin/pencapaian/update/(:num)', 'Pencapaian::update/$1');
$routes->get('/admin/pencapaian/delete/(:num)', 'Pencapaian::delete/$1');
//////////////////////////////////////////////////////////////////////////
// Pencapaian

$routes->get('/pencapaian', 'Pencapaian::index');
$routes->get('/admin/pencapaian', 'Pencapaian::admin');
$routes->get('/admin/pencapaian/create', 'Pencapaian::create');
$routes->post('/admin/pencapaian/store', 'Pencapaian::store');
$routes->get('/admin/pencapaian/edit/(:num)', 'Pencapaian::edit/$1');
$routes->post('/admin/pencapaian/update/(:num)', 'Pencapaian::update/$1');
$routes->get('/admin/pencapaian/delete/(:num)', 'Pencapaian::delete/$1');


// Forum
$routes->add('forum/simpan_pertanyaan', 'Forum::simpan_pertanyaan');
$routes->add('forum/simpan_jawaban', 'Forum::simpan_jawaban');
$routes->get('/admin/forum', 'Forum::admin');
$routes->get('admin/forum/edit/(:num)', 'Forum::edit/$1');
$routes->post('/admin/forum/update/(:num)', 'Forum::update/$1');
$routes->get('/admin/forum/delete/(:num)', 'Forum::delete/$1');
$routes->get('forum', 'Forum::index');




// Bantuan
$routes->get('/bantuan', 'Bantuan::index');


// Komentar
$routes->get('/komentar', 'Komentar::index');
$routes->get('komentar/index', 'Komentar::index');
$routes->post('komentar/index', 'Komentar::index');
$routes->post('komentar/store', 'Komentar::store');
$routes->delete('komentar/delete/(:num)', 'Komentar::delete/$1');

// Paket
$routes->get('paket', 'Paket::index');
$routes->get('/admin/paket', 'Paket::admin');
$routes->get('/admin/paket/create', 'Paket::create');
$routes->post('/admin/paket/store', 'Paket::store');
$routes->get('/admin/paket/edit/(:num)', 'Paket::edit/$1');
$routes->post('/admin/paket/update/(:num)', 'Paket::update/$1');
$routes->get('/admin/paket/delete/(:num)', 'Paket::delete/$1');
$routes->get('/paket', '/paket::index');


// Pesan
$routes->get('pesan', 'Pesan::index');
$routes->get('/admin/pesan', 'Pesan::admin');
$routes->get('/admin/pesan/create', 'Pesan::create');
$routes->post('/pesan/store', 'Pesan::store');
$routes->get('/admin/pesan/edit/(:num)', 'Pesan::edit/$1');
$routes->post('/admin/pesan/update/(:num)', 'Pesan::update/$1');
$routes->get('/admin/pesan/delete/(:num)', 'Pesan::delete/$1');
////////////////////////////////////////////////////////////////////////

$routes->get('/admin/pendaftaran', 'Pendaftaran::admin');
$routes->get('pendaftaran', 'Pendaftaran::create');
$routes->post('/admin/pendaftaran/store', 'Pendaftaran::store');
$routes->get('/admin/pendaftaran/edit/(:num)', 'Pendaftaran::edit/$1');
$routes->post('/admin/pendaftaran/update/(:num)', 'Pendaftaran::update/$1');
$routes->get('/admin/pendaftaran/delete/(:num)', 'Pendaftaran::delete/$1');


////////////////////////////////////////////////////////////////////////
$routes->get('/produk', 'ProductUserController::index');

$routes->get('admin/produk', 'ProductController::index');
$routes->add('admin/produk/create', 'ProductController::create');
$routes->add('admin/produk/update', 'ProductController::update');
$routes->add('admin/produk/delete/(:any)', 'ProductController::delete/$1');


////////////////////////////////////////////////////////////////////////
$routes->get('/kegiatan', 'ActivityUserController::index');

$routes->get('admin/kegiatan', 'ActivityController::index');
$routes->add('admin/kegiatan/create', 'ActivityController::create');
$routes->add('admin/kegiatan/update', 'ActivityController::update');
$routes->add('admin/kegiatan/delete/(:any)', 'ActivityController::delete/$1');

////////////////////////////////////////////////////////////////////////
$routes->get('/saran', 'SuggestionUserController::index');
$routes->post('/saran', 'SuggestionUserController::submit');

////////////////////////////////////////////////////////////////////////

$routes->get('/admin/saran', 'SuggestionController::index');


////////////////////////////////////////////////////////////////////////
$routes->get('admin/login', 'AdminLoginController::index');
$routes->get('admin/logout', 'AdminLoginController::logout');
$routes->post('admin/login', 'AdminLoginController::doLogin');


$routes->setAutoRoute(true);
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
