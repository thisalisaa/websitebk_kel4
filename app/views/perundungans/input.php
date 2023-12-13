<h2>Input Perundungan</h2>

<form action="<?php echo URL; ?>/perundungans/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>KELAS</td>
            <td><input type="text" name="kelas" required></td>
        </tr>
        <tr>
            <td>MASALAH</td>
            <td><input type="text" name="masalah" required></td>
        </tr>
        <tr>
            <td>NAMA PELAPOR</td>
            <td><input type="text" name="pelapor" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>