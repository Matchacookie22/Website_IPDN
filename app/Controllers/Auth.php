<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function attemptLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Akun Admin (Andrian)
        if ($username == 'admin' && $password == 'admin123') {
            $this->setSession($username, 'A. Andrian Fitzal R.', 'admin');
            return redirect()->to('/admin/dashboard');
        }

        // Akun User/Calon Praja (Simulasi)
        if ($username == 'praja' && $password == 'praja123') {
            $this->setSession($username, 'Mutiara Ramadhani', 'user'); // Simulasi user biasa
            return redirect()->to('/spcp'); // Arahkan ke menu pendaftaran
        }

        return redirect()->back()->with('error', 'Username atau Password salah!');
    }

    private function setSession($username, $nama, $role)
    {
        session()->set([
            'username'   => $username,
            'nama'       => $nama,
            'user_role'  => $role,
            'isLoggedIn' => true
        ]);
    }

    public function login()
    {
        // Kalau sudah login, jangan kasih halaman login lagi, lempar ke dashboard
        if (session()->get('isLoggedIn')) {
            return (session()->get('user_role') === 'admin')
                ? redirect()->to('/admin/dashboard')
                : redirect()->to('/spcp');
        }
        return view('auth/login');
    }

    public function logout()
    {
        // Hancurkan semua session
        session()->destroy();

        // Lempar balik ke login dengan pesan sukses
        return redirect()->to('/login')->with('success', 'Berhasil keluar sistem.');
    }
}
