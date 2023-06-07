<?php

namespace App\Controllers;

use App\Core\Controller;

class Karyawan extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Karyawan();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('karyawan/index', $data);
	}

	public function input()
	{
		$this->dashboard('karyawan/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('karyawan/edit');
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
