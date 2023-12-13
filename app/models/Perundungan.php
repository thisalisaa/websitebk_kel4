<?php

namespace App\Models;

use App\Core\Model;

class Perundungan extends Model
{

        public function show()
        {
            $query = "SELECT * FROM tb_perundungan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
        }

        public function save()
        {
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $masalah = $_POST['masalah'];
            $pelapor = $_POST['pelapor'];


            $sql = "INSERT INTO tb_perundungan
                SET nama=:nama, kelas=:kelas, masalah=:masalah, pelapor=:pelapor";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":kelas", $kelas);
            $stmt->bindParam(":masalah", $masalah);
            $stmt->bindParam(":pelapor", $pelapor);

            $stmt->execute();
        }

        public function edit($id_pelapor)
        {
            $query = "SELECT * FROM tb_perundungan WHERE id_pelapor=:id_pelapor";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_pelapor", $id_pelapor);
            $stmt->execute();

            return $this->select($stmt);
        }

        public function update()
        {
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $masalah = $_POST['masalah'];
            $pelapor = $_POST['pelapor'];
            $id_pelapor = $_POST['id_pelapor'];

            $sql = "UPDATE tb_perundungan
            SET nama=:nama, kelas=:kelas, masalah=:masalah, pelapor=:pelapor WHERE id_pelapor=:id_pelapor";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":kelas", $kelas);
            $stmt->bindParam(":masalah", $masalah);
            $stmt->bindParam(":pelapor", $pelapor);
            $stmt->bindParam(":id_pelapor", $id_pelapor);

            $stmt->execute();
        }
        public function delete($id_pelapor)
        {
        try {
            $sql = "DELETE FROM tb_perundungan WHERE id_pelapor=:id_pelapor";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_pelapor", $id_pelapor);
            $stmt->execute();
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        }
    }
