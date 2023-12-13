<h2>Input Informasi</h2>

<form action="<?php echo URL; ?>/informasis/save" method="post">
    <table>
        <tr>
            <td>Tanggal</td>
            <td><input type="date" name="tgl_info" required></td>
            <td>Pembuat</td>
            <td><input type="text" name="pembuat" required></td>
            <td>Judul</td>
            <td><input type="text" name="judul_info" required></td>
            <td>Foto</td>
            <td><input type="file" name="foto" required></td>
            <td>Isi</td>
            <td><input type="text" name="isi_info" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>