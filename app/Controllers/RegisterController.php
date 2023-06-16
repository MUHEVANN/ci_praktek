<?php

namespace App\Controllers;

use App\Models\RegisterModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('Register');
    }
    public function register()
    {
        // Mendapatkan data input dari formulir registrasi
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Membuat instance model User
        $userModel = new RegisterModel();

        // Mencari user berdasarkan email
        $existingUser = $userModel->where('email', $email)->first();

        // Jika user dengan email yang diinput sudah ada
        if ($existingUser) {
            // Email sudah terdaftar
            return redirect()->back()->with('error', 'Email sudah terdaftar.');
        } else {
            // Membuat hash password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Menyimpan data pengguna baru ke dalam basis data
            $userModel->save([
                'email' => $email,
                'nama' => $nama,
                
                'password' => $hashedPassword
            ]);

            // Registrasi berhasil
            // Lakukan tindakan yang diperlukan, seperti menyimpan data sesi pengguna
            return redirect()->to('/dashboard')->with('success', 'Registrasi berhasil.');
        }
    }
}