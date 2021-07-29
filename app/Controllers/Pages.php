<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'MK. Juliansyah'
            ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data =
            [
                'title' => 'About Me'
            ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data =
            [
                'title' => 'Contact Us',
                'alamat' =>
                [
                    [
                        'tipe' => 'Rumah',
                        'alamat' => 'JL. Manggarai No. 12',
                        'kota' => 'Bandung'
                    ],
                    [
                        'tipe' => 'Kantor',
                        'alamat' => 'JL. Kirun No. 45',
                        'kota' => 'Jakarta'
                    ]
                ]
            ];
        return view('pages/contact', $data);
    }
}
