<h2>Karyawan</h2>

<a href="<?php echo URL; ?>/karyawan/input" class="btn">Input Karyawan</a>

<table>
      <tr>
            <th>ID KARYAWAN</th>
            <th>NAMA KARYAWAN</th>
            <th>ALAMAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_kar']; ?></td>
                  <td><?php echo $row['name_kar']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><a href="<?php echo URL; ?>/karyawan/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/karyawan/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>