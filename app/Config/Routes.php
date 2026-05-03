<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Route Login
$routes->get('login', 'Auth::login');
$routes->post('login/attempt', 'Auth::attemptLogin');
$routes->get('logout', 'Auth::logout');

// Halaman Publik (Guest)
$routes->get('/', 'Home::index');
$routes->get('profil', 'Home::profil');
$routes->get('pendidikan', 'Home::pendidikan');
$routes->get('fasilitas', 'Home::fasilitas');
$routes->get('spcp', 'Home::spcp');
$routes->get('berita/detail/(:num)', 'Home::detail_berita/$1');

// Halaman Terproteksi (Admin Only)
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('dashboard', 'Admin::index');
    $routes->get('kuota', 'Admin::kuota');
    $routes->get('berita', 'Admin::berita');
    $routes->get('users', 'Admin::users');
});
