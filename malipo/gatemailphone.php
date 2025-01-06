<?php
//session_start();
include('../Controller/connect.php');
include("../Controller/configuration.php"); //configuration file

$fullname = $_POST['fullname'];
//$publicIp
$json = file_get_contents($pubIP1 . 'mutm/api/getBusinessByName/'.$fullname); //receive json from url
$arr = (array)json_decode($json, TRUE); //covert json data into array format
$value['email'] = $arr['email'];
$value['phonenumber'] = $arr['phonenumber'];
?>

<div class="col-sm-6">
    <div class="form-group">
        <label for="email">Baruapepe:</label>
        <span class="text-danger"></span>
        <input type="email" value="<?php echo $value['email']; ?>" name="email" id="email"  class="form-control" style="border: solid 1px green;" readonly>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <label for="phoneNumber">Namba ya Simu:</label>
        <span class="text-danger">*</span>
        <input type="tel" value="<?php echo $value['phonenumber']; ?>" name="phoneNumber" id="phoneNumber" class="form-control" pattern="[1-9]{1}[0-9]{8}" placeholder="eg: 773217012" minlength="9" maxlength="9" title="Phone number should not start with 0 and remaing 8 digits with 0-9" style="border: solid 1px green;" readonly>
    </div>
</div>