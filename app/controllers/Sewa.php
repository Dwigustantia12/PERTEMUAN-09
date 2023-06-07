<?php

namespace App\Controllers;

use App\Core\Controller;

class Sewa extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Sewa();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('sewa/index', $data);
	}

	public function input()
	{
		$this->dashboard('sewa/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('sewa/edit');
	}

	public function update()
	{
		//
	}

	public function delete()
	{
		//
	}
}
