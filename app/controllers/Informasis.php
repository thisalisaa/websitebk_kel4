<?php

namespace App\Controllers;

use App\Core\Controller;

class Informasis extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Informasi();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('informasis/index', $data);
     }

     public function input()
     {
          $this->dashboard('informasis/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/informasis');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('informasis/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/informasis');
     }

     public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/informasis');
	}
}
