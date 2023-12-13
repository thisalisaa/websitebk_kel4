<?php

namespace App\Controllers;

use App\Core\Controller;

class Datasiswas extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Datasiswa();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('datasiswas/index', $data);
     }

     public function input()
     {
          $this->dashboard('datasiswas/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/datasiswas');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('datasiswas/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/datasiswas');
     }
     public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/datasiswas');
	}
}
