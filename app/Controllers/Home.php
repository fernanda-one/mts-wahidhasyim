<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'tes'
    ];
        return view('/layouts/template',$data);
    }
}
