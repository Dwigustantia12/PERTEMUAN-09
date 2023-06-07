<?php

namespace App\Controllers;

use App\Core\Controller;

class Mobil extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Mobil();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('mobil/index', $data);
	}

	public function input()
	{
		$this->dashboard('mobil/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('mobil/edit');
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
