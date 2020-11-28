<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Index | M.Fadhil Azhari'
		];

		return view('pages/index', $data);
	}

	//--------------------------------------------------------------------

}
