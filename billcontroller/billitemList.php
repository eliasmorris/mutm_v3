<?php
include('../Controller/connect.php');

$bussid = $_POST['bussid'];
// $json = file_get_contents($pubIP.'selectInstitutionInfo'); //receive json from url
echo $json = file_get_contents($publicIPConnent .'mutm/api/getBillItemByBussid/'.$bussid);
$arr = json_decode($json, true); //covert json data into array format


//include('billitemList.php');

?>

<table id="example1" class="table table-bordered table-striped small">
  <thead>
    <tr>
      <th>Maelezo</th>
      <th>Aina ya Malipo</th>
      <th>Malipo ya Form</th>
      <th>Malipo ya Ukaguzi</th>
      <th>Malipo ya Jumla</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $num = 1;
    foreach ($arr as $key => $value) {
      echo '<td>' . $value['description'] . '</td>';
      echo '<td>' . $value['billtype'] . '</td>';
      echo '<td>' . $value['formamount'] . '</td>';
      echo '<td>' . $value['inspectionamount'] . '</td>';
      echo '<td>' . $value['amount'] . '</td>';


      echo '</tr>';

      $num++;
    }
    ?>
  </tbody>
  <tfoot>
    <th>Maelezo</th>
    <th>Aina ya Malipo</th>
    <th>Malipo ya Form</th>
    <th>Malipo ya Ukaguzi</th>
    <th>Malipo ya Jumla</th>
  </tfoot>
</table>