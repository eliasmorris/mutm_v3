<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MUTM | Leseni</title>

  <?php
    include('../MySections/HeaderLinks.php');
  ?>
</head>
<!-- (oncontextmenu="return false")for stoping inspect element -->
<body class="hold-transition sidebar-mini">
  <div id="loader" class="center"></div>
<div class="wrapper">
  <?php
    include('../MySections/NavBar.php');
    include('../MySections/SideBar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper text-monospace">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Leseni za Biashara</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard/">Nyumbani</a></li>
              <li class="breadcrumb-item active">Leseni</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <?php
                  if ($_SESSION['urole'] == 'Msimamizi mkuu') {
                    ?>
                    <div class="row">
                      <div class="col-sm-12 text-right">
                      <a href="../invoice/" class="btn btn-sm btn-success" title="View invoice">
                          <span class="fa fa-eye"></span>&nbsp;Invoice
                        </a>
                        &nbsp;
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#addlicense">
                          <span class="fa fa-plus"></span>&nbsp;Leseni ya Biashara
                        </button>
                      </div>
                    </div>
                    <?php
                  }elseif ($_SESSION['urole'] == 'Muangalizi mkuu') {
                    ?>
                    <div class="row">
                      <div class="col-sm-12 text-right">
                        <a href="../accountNo/" class="btn btn-sm btn-success" title="Orodha ya namba za malipo zilizosajiliwa">
                          <span class="fa fa-eye"></span>&nbsp;Namba za Malipo zilizosajiliwa
                        </a>
                      </div>
                    </div>
                    <?php
                  }
                ?>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body" id="listTable">
                <?php

                  // $json = file_get_contents($pubIP.'selectInstitutionInfo'); //receive json from url
                  $json = file_get_contents($publicIPConnent.'mutm/api/getAllLicense?pageNum=1&pageSize=10');
                  $arr = json_decode($json, true); //covert json data into array format

                  include('licenseList.php');
                ?>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include('../MySections/Footer.php');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php
  include('../MySections/FooterLinks.php');
  include('licenseModals.php');
  
?>

<script type="text/javascript" src="licenseScripts.js"></script>
</body>
</html>
