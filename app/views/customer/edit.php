<h2>Edit CUSTOMER</h2>

<form action="<?php echo URL; ?>/customer/update" method="post">
    <table>
    <tr>
            <td>ID CUSTOMER</td>
            <td><input type="text" name="id_cus"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name_cus"></td>
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