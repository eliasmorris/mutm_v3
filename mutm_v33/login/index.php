<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MUTM | Log in</title>

  <?php
    // include('../MySections/HeaderLinks.php');
    include('../Controller/connect.php');
  ?>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <!-- <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css"> MABORESHO -->
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- MUTM CSS -->
  <link rel="stylesheet" href="../MySections/mutmCss.css">
</head>
<!-- <body class="hold-transition login-page" onload="setTimeout(hideMsg, 10000)" oncontextmenu="return false"> -->

<body class="hold-transition login-page"> 
  <div id="loader" class="center"></div>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary" style="border-radius: 10px; border-bottom: solid 1px blue;">
    <div class="card-header text-center" style="background-color: #009688;">
      <div class="row">
        <div class="col-sm-12 text-center">
          <img src="../dist/img/smz_logo.webp" width="156.96" height="99.98" alt="SMZ-LOGO" style="max-width: 100%; height: 100px;" class="img-rounded">
        </div>
      </div>
      <a href="https://tamisemim.go.tz/" target="_blank" class="h3"><b>OR-TMSMIM SMZ</b></a>
    </div>
    <div class="card-body">
    	<h3 class="login-box-msg">MUTM</h3>
      	<span class="text-danger" id="logErrss">&nbsp;</span>

      <form id="loginForm" method="POST">
        <div class="input-group mb-3">
          <input type="email" id="username" name="username" class="form-control" placeholder="Baruapepe" style="border: solid 1px green;" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="uPwd" name="uPwd" class="form-control" placeholder="Neno la Siri" style="border: solid 1px green;" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button class="btn btn-primary btn-block">Ingia</button>
          </div>
        </div>
      </form>
      <div id="result"></div>
      <p class="mb-0">&nbsp;</p>
      <p class="mb-0 text-center">
        <a href="#" class="text-center text-danger font-weight-bold" data-toggle="modal" data-target="#forgetPassword" title="Bonyeza hapa kama umesahau neno la siri">
          Umesahau neno la siri?
        </a>
      </p>

      <hr/>

      <p class="mb-0 text-center">
        <a href="#" class="text-center">
          &copy;&nbsp;<?php echo date('Y') ?> &nbsp;Haki zote zimehifadhiwa.
        </a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<?php
  include('../forget_password/forgetPasswordModal.php');
?>

<script type="text/javascript" src="login.js"></script>
<script type="text/javascript" src="../forget_password/forget_password.js"></script>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- disable Ctr+u & refresh options -->
<!--  <script src="../dist/js/hide.js"></script> -->

<script>
  //spinner js
  document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
      document.querySelector(
        "body").style.visibility = "";
      document.querySelector(
        "#loader").style.visibility = "visible";
    } else {
      document.querySelector(
        "#loader").style.display = "none";
      document.querySelector(
        "body").style.visibility = "visible";
      }
  };
</script>
</body>
</html>
