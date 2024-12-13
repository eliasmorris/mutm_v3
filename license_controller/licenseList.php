<table id="example1" class="table table-bordered table-striped small">
  <thead>
    <tr>
      <th>Namba ya Leseni</th>
      <th>Aina ya leseni</th>
      <th>Kategoria</th>
      <th>Jina la Biashara</th>
      <th>Kiwango</th>
      <th>Hali</th>
      <th>Hali2</th>
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
      if ($value['cstatus'] == 'PAID') {
        echo '<td class = "text-right">&nbsp;<button class="btn btn-sm btn-success" >PAID</button></td>';
      } else {
        echo '<td class = "text-right">&nbsp;<button class="btn btn-sm btn-warning">CREATED</button></td>';
      }
      
      //echo '<td>' . $value['cstatus'] . '</td>';
      if ($value['isapproved'] == true) {
        echo '<td class = "text-right">&nbsp;<button class="btn btn-sm btn-success" >Approved</button></td>';
      } else {
        
        echo '<td class = "text-right">&nbsp;<button class="btn btn-sm btn-warning">Not&nbsp;Approved</button></td>';
      }
      if ($value['isapproved'] != true) {
        echo '<td class="text-right">';
        echo '<div class="btn-group">';
        if ($_SESSION['urole'] == 'Muangalizi mkuu') {
          // echo '<a data-id="' . $value['lid'] . '" data-conf2="' . $value['lnumber'] . '" data-conf3="' . $value['licensetype'] . '" data-conf4="' . $value['bname'] . '" data-conf5="' . $value['amount'] . '" data-conf6="'.$value['businessid'].'" data-conf7="'.$value['category'].'" href="#editLicense" class="btn btn-xs btn-info open-editLicenseinfo" title="Bonyeza kubadili taariza za Leseni"><i class="fas fa-pencil-alt"></i></a>';
    ?>
          <a class="btn btn-sm btn-primary" onclick="approveLicenseinfo('<?php echo $value['lid']; ?>', '<?php echo $value['lnumber']; ?>')" title="Bonyeza kuhakiki Leseni">Approve</a>
          </div>
    <?php
        }
        echo '</td>';
      } else {
        echo '<td class="text-right">';
        echo '<div class="btn-group">';
        if ($_SESSION['urole'] == 'Afisa mapato') {

          echo '<a href="printLicense.php?licenseId=' . $value['lid'] . '&businessid=' . $value['businessid'] . '" target="_blank" class="btn btn-primary btn-xs" title="Bonyeza kuprint leseni"><i class="fas fa-print"></i>Print</a>';
          //echo '<td class="text-right">&nbsp;</td>';
        }
      }



      echo '</tr>';

      $num++;
    }
    ?>
  </tbody>
</table>