<h2>Edit Perundungan</h2>

<form action="<?php echo URL; ?>/perundungans/update" method="post">
    <input type="hidden" name="id_pelapor" value="<?php echo $data['row']['id_pelapor']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>KELAS</td>
            <td><input type="text" name="kelas" value="<?php echo $data['row']['kelas'];?>" required></td>
        </tr>
        <tr>
            <td>MASALAH</td>
            <td><input type="text" name="masalah" value="<?php echo $data['row']['masalah'];?>" required></td>
        </tr>
        <tr>
            <td>NAMA PELAPOR</td>
            <td><input type="text" name="pelapor" value="<?php echo $data['row']['pelapor'];?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>