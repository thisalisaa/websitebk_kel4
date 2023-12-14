<h2>Edit Category</h2>

<form action="<?php echo URL; ?>/Datasiswas/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_sis']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name_sis" value="<?php echo $data['row']['name_sis']; ?>" required></td>
        </tr>
        <tr>
            <td>NISN</td>
            <td><input type="number" name="nisn" value="<?php echo $data['row']['nisn']; ?>" required></td>
        </tr>
        <tr>
            <td>KELAS</td>
            <td><input type="text" name="kelas" value="<?php echo $data['row']['kelas']; ?>" required></td>
        </tr>
        <tr>
            <td>TANGGAL LAHIR</td>
            <td><input type="date" name="tanggal_lahir" value="<?php echo $data['row']['tanggal_lahir']; ?>" required></td>
        </tr>
        <tr>
            <td>AGAMA</td>
            <td><input type="text" name="agama" value="<?php echo $data['row']['agama']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>