<?php

namespace App\Controllers;

class PPDB extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'PPDB Online | MTs. Wahid Hasyim Bangsri'
    ];
        return view('/siswa/home',$data);
    }
    public function login()
    {
        $data = [
            'title' => 'PPDB Online | Login'
    ];
        return view('/siswa/Login',$data);
    }
}
