<h2>Informasi</h2>

<a href="<?php echo URL; ?>/informasis/input" class="btn">Input Informasi</a>

<table>
      <tr>
            <th>NO. </th>
            <th>Tanggal</th>
            <th>Pembuat</th>
            <th>Judul</th>
            <th>Foto</th>
            <th>Isi</th>
            <th>Aksi</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['tgl_info']; ?></td>
                  <td><?php echo $row['pembuat']; ?></td>
                  <td><?php echo $row['judul_info']; ?></td>
                  <td><?php echo $row['foto']; ?></td>
                  <td><?php echo $row['isi_info']; ?></td>
                  <td><a href="<?php echo URL; ?>/informasis/edit/<?php echo $row['id_info']; ?>" class="btn">Edit</a><br>
                        <a href="<?php echo URL;?>/informasis/delete/<?php echo $row['id_info'];?>" class="btn">Delete</a></td>
                  </td>
            </tr>
      <?php $no++;
      } ?>

</table>