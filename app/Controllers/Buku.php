<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Controllers\BaseController;

class Buku extends BaseController
{
    protected $BukuModel;
    public function __construct()
    {
        $this->BukuModel = new BukuModel;
    }
    public function index()
    {
        $data['bukus'] = $this->BukuModel->findAll();
        return view('Buku/index.php',$data);
    }
    public function create()
    {
        return view('Buku/create.php');
    }
    public function store()
    {
        $userModel = new BukuModel;
        $data = $this->request->getPost();
        $userModel->insert($data);
        return redirect()->to('/buku');
    }
}