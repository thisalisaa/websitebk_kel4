<h2>Lapor Perundungan</h2>

<a href="<?php echo URL; ?>/perundungans/input" class="btn">Input Perundungan</a>

    <table>
        <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>MASALAH</th>
                <th>NAMA PELAPOR</th>
                <th>EDIT</th>
                <th>DELETE</th>
        </tr>

        <?php $no = 1;
        foreach ($data['rows'] as $row) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['kelas'];?></td>
                    <td><?php echo $row['masalah'];?></td>
                    <td><?php echo $row['pelapor'];?></td>
                    <td><a href="<?php echo URL; ?>/perundungans/edit/<?php echo $row['id_pelapor']; ?>" class="btn">Edit</a></td>
                    <td><a href="<?php echo URL;?>/perundungans/delete/<?php echo $row['id_pelapor'];?>" class="btn">Delete</a></td>
                </tr>
        <?php $no++;
        } ?>


</table>