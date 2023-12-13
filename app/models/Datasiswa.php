<?php

namespace App\Models;

use App\Core\Model;

class Datasiswa extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_datasiswas";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $name_sis = $_POST['name_sis'];
          $nisn = $_POST['nisn'];
          $kelas = $_POST['kelas'];
          $tanggal_lahir = $_POST['tanggal_lahir'];
          $agama = $_POST['agama'];

          $sql = "INSERT INTO tb_datasiswas
          SET name_sis=:name_sis,nisn=:nisn,kelas=:kelas,tanggal_lahir=:tanggal_lahir,agama=:agama";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":name_sis", $name_sis);
          $stmt->bindParam(":nisn", $nisn);
          $stmt->bindParam(":kelas", $kelas);
          $stmt->bindParam(":tanggal_lahir", $tanggal_lahir);
          $stmt->bindParam(":agama", $agama);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_datasiswas WHERE id_sis=:id_sis";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id_sis", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $id = $_POST['id'];
          $name_sis = $_POST['name_sis'];
          $nisn = $_POST['nisn'];
          $kelas = $_POST['kelas'];
          $tanggal_lahir = $_POST['tanggal_lahir'];
          $agama = $_POST['agama'];


          $sql = "UPDATE tb_datasiswas
          SET name_sis=:name_sis,nisn=:nisn,kelas=:kelas,tanggal_lahir=:tanggal_lahir,agama=:agama WHERE id_sis=:id_sis";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":name_sis", $name_sis);
          $stmt->bindParam(":nisn", $nisn);
          $stmt->bindParam(":kelas", $kelas);
          $stmt->bindParam(":tanggal_lahir", $tanggal_lahir);
          $stmt->bindParam(":agama", $agama);
          $stmt->bindParam(":id_sis", $id);

          $stmt->execute();
     }

     public function delete($id)
     {
     $sql = "DELETE FROM tb_datasiswas WHERE id_sis=:id_sis";
     $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id_sis", $id);
          $stmt->execute();
     }
}

