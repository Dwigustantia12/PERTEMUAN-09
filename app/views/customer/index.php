<h2>Customer</h2>

<a href="<?php echo URL; ?>/customer/input" class="btn">Input Customer</a>

<table>
      <tr>
            <th>ID CUSTOMER</th>
            <th>NAMA CUSTOMER</th>
            <th>ALAMAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_cus']; ?></td>
                  <td><?php echo $row['name_cus']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><a href="<?php echo URL; ?>/customer/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/customer/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>