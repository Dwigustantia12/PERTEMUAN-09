<h2>Edit KARYAWAN</h2>

<form action="<?php echo URL; ?>/karyawan/update" method="post">
    <table>
    <tr>
            <td>ID KARYAWAN</td>
            <td><input type="text" name="id_kar"></td>
        </tr>
        <tr>
            <td>NAMA KARYAWAN</td>
            <td><input type="text" name="name_kar"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>