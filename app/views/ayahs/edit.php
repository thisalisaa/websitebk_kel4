<h2>Edit Ayah</h2>

<form action="<?php echo URL; ?>/Ayahs/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_ayah']; ?>">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
            <td>Pendidikan</td>
            <td><input type="text" name="pendidikan_terakhir" value="<?php echo $data['row']['pendidikan_terakhir']; ?>" required></td>
            <td>Alamat</td>
            <td><input type="text" name="alamat_lengkap" value="<?php echo $data['row']['alamat_lengkap']; ?>" required></td>
            <td>Nomor</td>
            <td><input type="text" name="nomor_telepon" value="<?php echo $data['row']['nomor_telepon']; ?>" required></td>
            <td>Pekerjaan</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $data['row']['pekerjaan']; ?>" required></td>
            <td>Penghasilan</td>
            <td><input type="text" name="penghasilan" value="<?php echo $data['row']['penghasilan']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>