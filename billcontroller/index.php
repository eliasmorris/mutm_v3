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
              <h1>Bill Items</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../dashboard/">Nyumbani</a></li>
                <li class="breadcrumb-item active">Bill Items</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
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
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#addBill">
                          <span class="fa fa-plus"></span>&nbsp;Bill Item
                        </button>
                      </div>
                    </div>
                  <?php
                  } elseif ($_SESSION['urole'] == 'Muangalizi mkuu') {
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
                  <div class="row">
                    <?php
                    //if ($_SESSION['urole'] == 'Msimamizi mkuu' || $_SESSION['urole'] == 'Muangalizi mkuu') {
                    //if wizara
                    $json = file_get_contents($publicIPConnent . 'mutm/api/getAllBusiness?pageNum=1&pageSize=100'); //receive json from url
                    $arr = json_decode($json, true); //covert json data into array format
                    ?>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="instituteidmk">Biashara
                          <span class="text-danger">*</span>
                        </label>
                        <select class="form-control" id="bussid" name="bussid" required="required" style="border: solid 1px green;" onchange="getBillItems()">
                          <option value="">chagua Biashara</option>
                          <?php
                          foreach ($arr as $key => $value) {
                            echo '<option value="' . $value['bussid'] . '">' . $value['bname'] . '</option>';
                          }
                          ?>

                        </select>
                      </div>
                    </div>

                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-body" id="billitems">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Mwezi</th>
                        <th>Kiasi</th>
                      </tr>
                    </thead>


                  </table>
                </div>
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
  include('billitemModals.php');
  ?>

  <script type="text/javascript" src="billitemScripts.js"></script>
</body>

</html>