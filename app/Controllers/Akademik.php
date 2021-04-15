<?php

namespace App\Controllers;

class Akademik extends BaseController
{
	public function JalurPenerimaan()
	{
		return view('template.php', ['page' => 'akademik/jalur-penerimaan']);
	}
}
