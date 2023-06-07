<h2>Input Customer</h2>

<form action="<?php echo URL; ?>/customer/simpan" method="post">
    <table>
    <tr>
            <td>ID CUSTOMER</td>
            <td><input type="text" name="id_cus"></td>
        </tr>
        <tr>
            <td>NAMA CUSTOMER</td>
            <td><input type="text" name="name_cus"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>