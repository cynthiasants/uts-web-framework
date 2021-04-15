<?php

namespace App\Controllers;

class Fasilitas extends BaseController
{
	public function index()
	{
		return view('template.php', ['page' => 'fasilitas/fasilitas']);
	}
}
