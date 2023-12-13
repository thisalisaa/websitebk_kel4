<?php

namespace App\Controllers;

use App\Core\Controller;

class Ayahs extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Ayah();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('ayahs/index', $data);
     }

     public function input()
     {
          $this->dashboard('ayahs/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/ayahs');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('ayahs/edit', $data);
     }

     public function update($id)
     {
          $this->model->update($id);
          header('location:' . URL . '/ayahs');
     }

     public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/ayahs');
	}
}
