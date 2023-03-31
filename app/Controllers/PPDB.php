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

    public function daftar($page = "index")
    {
        $data = [
            'title' => 'PPDB Online | Registrasi'
    ];
        return view("/siswa/daftar/$page",$data);
    }

    public function login()
    {
        $data = [
            'title' => 'PPDB Online | Login'
    ];
        return view('/siswa/login',$data);
    }
    public function dashboard()
    {
        $data = [
            'title' => 'PPDB Online | Dashboard',
            'dashbord'=>['dashboard'=>'dashboard'],
            'contentTitle'=>'Beranda',
            'name'=>'Fernanda',
    ];
        return view('/siswa/dashboard/dashboard',$data);
    }
}
