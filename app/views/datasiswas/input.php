<h2>Data Siswa</h2>

<form action="<?php echo URL; ?>/datasiswas/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name_sis" required></td>
        </tr>
        <tr>
            <td>NISN</td>
            <td><input type="text" name="nisn" required></td>
        </tr>
        <tr>
            <td>KELAS</td>
            <td><input type="text" name="kelas" required></td>
        </tr>
        <tr>
            <td>TANGGAL LAHIR</td>
            <td><input type="date" name="tanggal_lahir" required></td>
        </tr>
        <tr>
            <td>AGAMA</td>
            <td><input type="text" name="agama" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>