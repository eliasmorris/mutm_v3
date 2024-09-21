<table id="example1" class="table table-bordered table-striped small">
  <thead>
    <tr>
      <th>Business Name</th>
      <th>Business Type</th>
      <th>Email</th>
      <th>Phone</th>
      <!-- <th>Shehia</th> -->
      <th>Shehia Name</th>
      <th>Namba ya Mgahawa</th>
      <th>Hali</th>
      <th>Kitendo</th>
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
          // echo '<td>'.$value['shehia'].'</td>';
          echo '<td>'.$value['shname'].'</td>';
          echo '<td>'.$value['restaurentnumber'].'</td>';
          // echo '<td>'.$value['status'].'</td>';
          if ($value['status'] == 'INACTIVE') {
            echo '<td class="text-danger">'.$value['status'].'</td>';
          }else{
            echo '<td>'.$value['status'].'</td>';
          }
            
             if ($_SESSION['urole'] == 'Msimamizi mkuu') {
               if ($value['status'] == 'ACTIVE') {
                 echo '<td class="text-right">';
                  echo '<div class="btn-group">';
                     echo '<a data-id="'.$value['bussid'].'" data-conf2="'.$value['bname'].'" data-conf3="'.$value['btype'].'" data-conf4="'.$value['email'].'" data-conf5="'.$value['restaurentnumber'].'" data-conf6="'.$value['phonenumber'].'" data-conf7="'.$value['shname'].'" data-conf8="'.$value['shehia'].'"  href="#editBusinessinfo" class="btn btn-xs btn-info open-editBusinessinfo" title="Bonyeza kubadili taariza za biashara"><i class="fas fa-pencil-alt"></i></a>';
                      ?>
                       <a class="btn btn-xs btn-danger" onClick="deleteBiashara('<?php echo $value['bussid']; ?>', '<?php echo $value['bname']; ?>')" title="Bonyeza kufuta biashara"><i class="fas fa-trash"></i></a>
                   </div> 
                   <?php
                 echo'</td>';
               }else{
                echo '<td class = "text-right">&nbsp;</td>';
               }
              
            }else{
              echo '<td class="text-right">&nbsp;</td>';
            }
            
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
    <!-- <th>Shehia</th> -->
    <th>Shehia Name</th>
    <th>Namba ya Mgahawa</th>
    <th>Hali</th>
    <th>Kitendo</th>
  </tfoot>
</table>