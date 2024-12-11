<table id="example1" class="table table-bordered table-striped small">
  <thead>
    <tr>
      <th>Shehia Name</th>
      <th>Kitendo</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $num = 1;
    foreach ($arr as $key => $value) {

      echo '<td>' . $value['shname'] . '</td>';
      if ($_SESSION['urole'] == 'Msimamizi mkuu') {
        // if ($value['status'] == 'ACTIVE') {
        echo '<td class="text-right">';
        echo '<div class="btn-group">';

        echo '<a data-id="' . $value['ltid'] . '" data-conf2="' . $value['ltype'] . '" data-conf3="' . $value['price'] . '"  href="#editLicensetype" class="btn btn-xs btn-info open-editLicensetype" title="Bonyeza kubadili taariza za Leseni"><i class="fas fa-pencil-alt"></i></a>';
    ?>
        <a class="btn btn-xs btn-danger" onClick="deleteLicenseinfo('<?php echo $value['ltid']; ?>', '<?php echo $value['ltype']; ?>')" title="Bonyeza kufuta Aina Leseni"><i class="fas fa-trash"></i></a>
        </div>
    <?php
        echo '</td>';
        // } else {
        //   echo '<td class = "text-right">&nbsp;</td>';
        // }
      } else {
        echo '<td class="text-right">&nbsp;</td>';
      }

      echo '</tr>';

      $num++;
    }
    ?>
  </tbody>
  <tfoot>
    <th>Shehia Name</th>
    <th>Kitendo</th>
  </tfoot>
</table>