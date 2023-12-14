<?php

namespace App\Models;

use App\Core\Model;

class Informasi extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_informasis";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $tgl_info = $_POST['tgl_info'];
          $pembuat = $_POST['pembuat'];
          $judul_info = $_POST['judul_info'];
          $foto = $_POST['foto'];
          $isi_info = $_POST['isi_info'];

          $sql = "INSERT INTO tb_informasis
            (tgl_info, pembuat, judul_info, foto, isi_info)
            VALUES (:tgl_info, :pembuat, :judul_info, :foto, :isi_info)";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":tgl_info", $tgl_info);
          $stmt->bindParam(":pembuat", $pembuat);
          $stmt->bindParam(":judul_info", $judul_info);
          $stmt->bindParam(":foto", $foto);
          $stmt->bindParam(":isi_info", $isi_info);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_informasis WHERE id_info=:id_info";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id_info", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $tgl_info = $_POST['tgl_info'];
          $pembuat = $_POST['pembuat'];
          $judul_info = $_POST['judul_info'];
          $foto = $_POST['foto'];
          $isi_info = $_POST['isi_info'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_informasis
          SET tgl_info=:tgl_info, pembuat=:pembuat, judul_info=:judul_info, foto=:foto, isi_info=:isi_info  WHERE id_info=:id_info";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":tgl_info", $tgl_info);
          $stmt->bindParam(":pembuat", $pembuat);
          $stmt->bindParam(":judul_info", $judul_info);
          $stmt->bindParam(":foto", $foto);
          $stmt->bindParam(":isi_info", $isi_info);
          $stmt->bindParam(":id_info", $id);

          $stmt->execute();
     }

     public function delete($id)
    {
        $query = "DELETE FROM tb_informasis WHERE id_info = :id_info";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id_info", $id);
        $stmt->execute();
    }
}
