<h2>Input Informasi</h2>

<form action="<?php echo URL; ?>/Ayahs/save" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
            <td>Pendidikan</td>
            <td><input type="text" name="pendidikan_terakhir" required></td>
            <td>Alamat</td>
            <td><input type="text" name="alamat_lengkap" required></td>
            <td>Nomor</td>
            <td><input type="text" name="nomor_telepon" required></td>
            <td>Pekerjaan</td>
            <td><input type="text" name="pekerjaan" required></td>
            <td>Penghasilan</td>
            <td><input type="text" name="penghasilan" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>