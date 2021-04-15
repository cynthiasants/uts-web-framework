<?php

namespace App\Controllers;

class Profile extends BaseController
{
	public function VisiMisiTujuan()
	{
		return view('template.php', ['page' => 'profile/visi-misi-tujuan']);
	}
	public function Akreditasi()
	{
		return view('template.php', ['page' => 'profile/akreditasi']);
	}
}
