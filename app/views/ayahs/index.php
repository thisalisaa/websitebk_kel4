<h2>Informasi</h2>

<a href="<?php echo URL; ?>/ayahs/input" class="btn">Input Informasi</a>

<table>
      <tr>
            <th>NO. </th>
            <th>Nama</th>
            <th>Pendidikan</th>
            <th>Alamat</th>
            <th>Nomor</th>
            <th>Pekerjaan</th>
            <th>Penghasilan</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['pendidikan_terakhir']; ?></td>
                  <td><?php echo $row['alamat_lengkap']; ?></td>
                  <td><?php echo $row['nomor_telepon']; ?></td>
                  <td><?php echo $row['pekerjaan']; ?></td>
                  <td><?php echo $row['penghasilan']; ?></td>
                  <td><a href="<?php echo URL; ?>/Ayahs/edit/<?php echo $row['id_ayah']; ?>" class="btn">Edit</a><br>
                        <a href="<?php echo URL;?>/Ayahs/delete/<?php echo $row['id_ayah'];?>" class="btn">Delete</a></td>
                  </td>
            </tr>
      <?php $no++;
      } ?>

</table>