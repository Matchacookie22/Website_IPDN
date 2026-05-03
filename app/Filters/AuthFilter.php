<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $path = $request->getUri()->getPath();

        // TAMBAHKAN 'logout' di sini biar bisa diakses tanpa dicegat
        if ($path === 'login' || $path === 'login/attempt' || $path === 'logout') {
            return;
        }

        // Cek Login Umum
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        // Proteksi area Admin (Hanya untuk role admin)
        if (strpos($path, 'admin') === 0 && session()->get('user_role') !== 'admin') {
            return redirect()->to('/')->with('error', 'Akses Admin Ditolak!');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Kosongin aja bro
    }
}
