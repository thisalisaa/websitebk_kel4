
<h2>Data Siswa</h2>
<a href="<?php echo URL; ?>/datasiswas/input" class="btn">Create Datasiswa</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NISN</th>
            <th>KELAS</th>
            <th>TANGGAL LAHIR</th>
            <th>AGAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>

      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['name_sis']; ?></td>
                  <td><?php echo $row['nisn']; ?></td>
                  <td><?php echo $row['kelas']; ?></td>
                  <td><?php echo $row['tanggal_lahir']; ?></td>
                  <td><?php echo $row['agama']; ?></td>
                  <td><a href="<?php echo URL; ?>/datasiswas/edit/<?php echo $row['id_sis']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/datasiswas/delete/<?php echo $row['id_sis']; ?>" class="btn">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>