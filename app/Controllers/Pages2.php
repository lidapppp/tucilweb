<?php

namespace App\Controllers;

class Pages2 extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'register'
        ];
        return view('pages/register', $data);
    }
}
