<table id="example1" class="table table-bordered table-striped small">
  <thead>
    <tr>
      <th>Business Name</th>
      <th>Business Type</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Shehia</th>
      <th>Hali</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $num = 1;
        foreach ($arr as $key => $value) {
          echo '<td>'.$value['bname'].'</td>';
          echo '<td>'.$value['btype'].'</td>';
          echo '<td class="font-weight-bold">'.$value['email'].'</td>';
          echo '<td>'.$value['phonenumber'].'</td>';
          echo '<td>'.$value['shehia'].'</td>';
          
            
          echo '</tr>';

          $num++;
        }
      ?>
  </tbody>
  <tfoot>
    <th>Business Name</th>
    <th>Business Type</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Shehia</th>
    <th>Hali</th>
    <th>&nbsp;</th>
  </tfoot>
</table>