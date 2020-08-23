<?php
  $no = 1;
  foreach ($dataUsers as $data) {
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $data->nama; ?></td>
      <td><?php echo $data->username; ?></td>
      <td class="text-center" style="min-width:230px;">
          <button class="btn btn-warning update-dataUsers" data-id="<?php echo $data->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
          <button class="btn btn-danger konfirmasiHapus-kota" data-id="<?php echo $data->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
          <button class="btn btn-info detail-dataKota" data-id="<?php echo $data->id; ?>"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
      </td>
    </tr>
    <?php
    $no++;
  }
?>