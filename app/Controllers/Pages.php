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
            'title' => 'Home | M.Fadhil Azhari'
        ];

        return view('pages/home', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register'
        ];

        return view('pages/register', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];
        return view('pages/contact', $data);
    }






    //--------------------------------------------------------------------

}
