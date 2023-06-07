<?php

namespace App\Controllers;

use App\Core\Controller;

class Customer extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Customer();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('customer/index', $data);
	}

	public function input()
	{
		$this->dashboard('customer/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('customer/edit');
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
