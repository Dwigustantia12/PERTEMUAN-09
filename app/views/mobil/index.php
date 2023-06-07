<h2>Mobil</h2>

<a href="<?php echo URL; ?>/mobil/input" class="btn">Input Mobil</a>

<table>
      <tr>
            <th>ID MOBIL</th>
            <th>NO PLAT</th>
            <th>MERK</th>
            <th>WARNA</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_mobil']; ?></td>
                  <td><?php echo $row['no_plat']; ?></td>
                  <td><?php echo $row['merk']; ?></td>
                  <td><?php echo $row['warna']; ?></td>
                  <td><a href="<?php echo URL; ?>/mobil/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/mobil/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>