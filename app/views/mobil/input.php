<h2>Input Mobil</h2>

<form action="<?php echo URL; ?>/mobil/simpan" method="post">
    <table>
    <tr>
            <td>ID MOBIL</td>
            <td><input type="text" name="id_mobil"></td>
        </tr>
        <tr>
            <td>NO PLAT</td>
            <td><input type="text" name="no_plat"></td>
        </tr>
        <tr>
            <td>MERK</td>
            <td><input type="text" name="merk"></td>
        </tr>
        <tr>
            <td>WARNA</td>
            <td><textarea name="warna" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>