<?php
session_start();
include('../Controller/connect.php');

$fullname = $_POST['fullname'];
//$publicIp
$json = file_get_contents($pubIP1 . 'mutm/api/getAllBusinessById/' . $fullname); //receive json from url
$arr = json_decode($json, true); //covert json data into array format

?>

<div class="col-sm-6">
    <div class="form-group">
        <label for="email">Baruapepe:</label>
        <span class="text-danger"></span>
        <input type="email" readonly name="email" id="email" class="form-control" style="border: solid 1px green;">
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <label for="phoneNumber">Namba ya Simu:</label>
        <span class="text-danger">*</span>
        <input type="tel" readonly name="phoneNumber" id="phoneNumber" class="form-control" pattern="[1-9]{1}[0-9]{8}" placeholder="eg: 773217012" minlength="9" maxlength="9" title="Phone number should not start with 0 and remaing 8 digits with 0-9" style="border: solid 1px green;">
    </div>
</div>