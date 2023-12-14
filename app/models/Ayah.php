<?php

namespace App\Models;

use App\Core\Model;

class Ayah extends Model
{

     public function show()
     {
          $query = "SELECT * FROM ayahs";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $nama = $_POST['nama'];
          $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
          $alamat_lengkap = $_POST['alamat_lengkap'];
          $nomor_telepon = $_POST['nomor_telepon'];
          $pekerjaan = $_POST['pekerjaan'];
          $penghasilan = $_POST['penghasilan'];

          $sql = "INSERT INTO ayahs
            (nama, pendidikan_terakhir, alamat_lengkap, nomor_telepon, pekerjaan, penghasilan)
            VALUES (:nama, :pendidikan_terakhir, :alamat_lengkap, :nomor_telepon, :pekerjaan, :penghasilan)";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":pendidikan_terakhir", $pendidikan_terakhir);
          $stmt->bindParam(":alamat_lengkap", $alamat_lengkap);
          $stmt->bindParam(":nomor_telepon", $nomor_telepon);
          $stmt->bindParam(":pekerjaan", $pekerjaan);
          $stmt->bindParam(":penghasilan", $penghasilan);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM ayahs WHERE id_ayah=:id_ayah";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id_ayah", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update($id)
     {
        $nama = $_POST['nama'];
        $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
        $alamat_lengkap = $_POST['alamat_lengkap'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $pekerjaan = $_POST['pekerjaan'];
        $penghasilan = $_POST['penghasilan'];

          $sql = "UPDATE ayahs
          SET nama=:nama, pendidikan_terakhir=:pendidikan_terakhir, alamat_lengkap=:alamat_lengkap, nomor_telepon=:nomor_telepon, pekerjaan=:pekerjaan, penghasilan=:penghasilan  WHERE id_ayah=:id_ayah";
 
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":pendidikan_terakhir", $pendidikan_terakhir);
          $stmt->bindParam(":alamat_lengkap", $alamat_lengkap);
          $stmt->bindParam(":nomor_telepon", $nomor_telepon);
          $stmt->bindParam(":pekerjaan", $pekerjaan);
          $stmt->bindParam(":penghasilan", $penghasilan);
          $stmt->bindParam(":id_ayah", $id);
          $stmt->execute();
     }

     public function delete($id)
    {
        $query = "DELETE FROM ayahs WHERE id_ayah = :id_ayah";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id_ayah", $id);
        $stmt->execute();
    }
}
