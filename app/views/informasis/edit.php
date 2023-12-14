<h2>Edit Informasi</h2>

<form action="<?php echo URL; ?>/Informasis/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_info']; ?>">
    <table>
        <tr>
            <td>Tanggal Informasi</td>
            <td><input type="text" name="tgl_info" value="<?php echo $data['row']['tgl_info']; ?>" required></td>
            <td>Pembuat</td>
            <td><input type="text" name="pembuat" value="<?php echo $data['row']['pembuat']; ?>" required></td>
            <td>Judul Informasi</td>
            <td><input type="text" name="judul_info" value="<?php echo $data['row']['judul_info']; ?>" required></td>
            <td>Foto</td>
            <td><input type="text" name="foto" value="<?php echo $data['row']['foto']; ?>" required></td>
            <td>Isi Informasi</td>
            <td><input type="text" name="isi_info" value="<?php echo $data['row']['isi_info']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>