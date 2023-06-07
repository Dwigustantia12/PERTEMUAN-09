<h2>Sewa</h2>

<a href="<?php echo URL; ?>/sewa/input" class="btn">Input Sewa</a>

<table>
      <tr>
            <th>ID SEWA</th>
            <th>ID KARYAWAN</th>
            <th>ID CUSTOMER</th>
            <th>ID MOBIL</th>
            <th>TANGGAL PINJAM</th>
            <th>TANGGAL KEMBALI</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_sewa']; ?></td>
                  <td><?php echo $row['id_kar']; ?></td>
                  <td><?php echo $row['id_cus']; ?></td>
                  <td><?php echo $row['id_mobil']; ?></td>
                  <td><?php echo $row['tgl_pinjam']; ?></td>
                  <td><?php echo $row['tgl_kembali']; ?></td>
                  <td><a href="<?php echo URL; ?>/sewa/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/sewa/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>