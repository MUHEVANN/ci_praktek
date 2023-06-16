<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('Login');
    }
    public function authenticate()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');


        $user = $userModel->where('email',$email)->first();

        if(!$user){
            return redirect()->to('/login')->with('error','user tidak ditemukan');
        }if(!password_verify($password,$user['password'])){
            return redirect()->to('/login')->with('error','password salah');
        }
        session()->set([
            'user_id'=> $user['id'],
            'email'=> $user['email'],
            'logged_in'=> true
        ]);
        return redirect()->to('/dashboard');
    }
}