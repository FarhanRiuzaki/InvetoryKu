<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mastercv;

class MastercvController extends BaseController
{
	public function index()
	{
		$result = Mastercv::findAll();

		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Stock']),
			'page_title' => view('partials/page-title', ['title' => 'Stock Barang', 'li_1' => 'Stock Barang', 'li_2' => 'List Stock Barang']),
			'records' => $result
		];

		return view('stock/index', $data);
	}
}
