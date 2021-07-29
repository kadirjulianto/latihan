<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {

        // $komik = $this->KomikModel->findAll();

        $data =
            [
                'title' => 'Daftar Komik',
                'komik' => $this->KomikModel->getKomik()
            ];


        return view('komik/index', $data);
    }
}
