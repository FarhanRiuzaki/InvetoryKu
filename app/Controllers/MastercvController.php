<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mastercv;

class MastercvController extends BaseController
{
	public function index()
	{

		$result = new Mastercv();

		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'CV']),
			'page_title' => view('partials/page-title', ['title' => 'Curriculum Vitae', 'li_1' => 'Curriculum Vitae', 'li_2' => 'List Curriculum Vitae']),
			'records' => $result->findAll()
		];

		return view('cv/index', $data);
	}
}
