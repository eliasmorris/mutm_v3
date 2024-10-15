<table id="example1" class="table table-bordered table-striped small">
  <thead>
    <tr>
      <th>Namba ya Leseni</th>
      <th>Aina ya leseni</th>
      <th>Kategoria</th>
      <th>Jina la Biashara</th>
      <th>Kiwango</th>
      <th>Hali</th>
      <th>Kitendo</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $num = 1;
    foreach ($arr as $key => $value) {
      echo '<td>' . $value['lnumber'] . '</td>';
      echo '<td>' . $value['licensetype'] . '</td>';
      echo '<td>' . $value['category'] . '</td>';
      echo '<td>' . $value['bname'] . '</td>';
      echo '<td>' . $value['amount'] . '</td>';
      if ($value['status'] == 'INACTIVE') {
        echo '<td class="text-danger">' . $value['status'] . '</td>';
      } else {
        echo '<td>' . $value['status'] . '</td>';
      }

      if ($_SESSION['urole'] == 'Msimamizi mkuu') {
        // if ($value['status'] == 'ACTIVE') {
          echo '<td class="text-right">';
          echo '<div class="btn-group">';
          echo '<a data-id="' . $value['lid'] . '" data-conf2="' . $value['lnumber'] . '" data-conf3="' . $value['licensetype'] . '" data-conf4="' . $value['bname'] . '" data-conf5="' . $value['amount'] . '" data-conf6="'.$value['businessid'].'" data-conf7="'.$value['category'].'" href="#editLicense" class="btn btn-xs btn-info open-editLicenseinfo" title="Bonyeza kubadili taariza za Leseni"><i class="fas fa-pencil-alt"></i></a>';
    ?>
          <a class="btn btn-xs btn-danger" onClick="deleteLicenseinfo('<?php echo $value['lid']; ?>', '<?php echo $value['lnumber']; ?>')" title="Bonyeza kufuta Leseni"><i class="fas fa-trash"></i></a>
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
    <th>Namba ya Leseni</th>
    <th>Aina ya leseni</th>
    <th>Kategoria</th>
    <th>Jina la Biashara</th>
    <th>Kiwango</th>
    <th>Hali</th>
    <th>Kitendo</th>
  </tfoot>
</table>