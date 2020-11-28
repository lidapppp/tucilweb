<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'login'
        ];
        return view('pages/login', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        return view('pages/about', $data);
    }
    public function home()
    {
        $data = [
            'title' => 'Index | M.Fadhil Azhari'
        ];

        return view('pages/index', $data);
    }

    public function produk()
    {
        $data = [
            'title' => 'Product '
        ];

        return view('pages/produk', $data);
    }
    public function admin()
    {
        $data = [
            'title' => 'Admin ',
            'content' => 'admin/v_dashboard'
        ];

        echo view('layout/v_wrapper', $data);
    }









    //--------------------------------------------------------------------

}
