<?php

namespace App\Controllers;

use App\Core\Controller;

class Perundungans extends Controller
{
    public object $model;

    public function __construct()
    {
        parent::cekLogin();

        $this->model = new \App\Models\Perundungan();
    }

    public function index()
    {
        $data['rows'] = $this->model->show();
        $this->dashboard('perundungans/index', $data);
    }

    public function input()
    {
        $this->dashboard('perundungans/input');
    }

    public function save()
    {
        $this->model->save();
        header('location:' . URL . '/perundungans');
    }

    public function edit($id)
    {
        $data['row'] = $this->model->edit($id);
        $this->dashboard('perundungans/edit', $data);
    }

    public function update()
    {
        $this->model->update();
        header('location:' . URL . '/perundungans');
    }
    public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/perundungans');
	}
}
