<!-- <!DOCTYPE html> -->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        @media print {
            @page {
                margin: 5;
            }

            body {
                margin: 5px;
            }
        }
    </style>
    <?php
    include('../MySections/HeaderLinks.php');
    include("../Controller/configuration.php"); //configuration file
    include('../Controller/convertNumbertoWords.php');
    if (!isset($_GET['licenseId'])) {
        header('Location: ../logOut/?msg=error');
        exit;
    }

    $licenseId = $_GET['licenseId'];

    $businessid = $_GET['businessid'];

    ?>
</head>

<body onload="pr()">
    <div class="container">
        <div class="row" style="margin-top:370px; margin-left: 30px; margin-right: 30px;">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12" style="text-align: center;">
                        
                        <!-- <img src="../dist/img/smz_logo.png" style="width:150px; height:100px;"> -->
                    </div>
                </div>
                <h3 class="" style="font-weight: bold; text-align: center;">
                    <?php
                    //find bills service start
                    $json = file_get_contents($pubIP1 . 'mutm/api/getLincenseInforPrinting/' . $licenseId); //receive json from url

                    $arr =  (array)json_decode($json, TRUE); //covert json data into array format

                    $value['lnumber'] = $arr['lnumber'];
                    $value['licensetype'] = $arr['licensetype'];
                    $value['category'] = $arr['category'];
                    $value['amount'] = $arr['amount'];
                    $value['bname'] = $arr['bname'];
                    $value['paiddate'] = $arr['paiddate'];
                    $value['receiptnumber'] = $arr['receiptnumber'];
                    $value['shname'] = $arr['shname'];
                    

                    if ($value['licensetype'] == "") {
                    }

                    ?>

                    <!-- THE LIQUORS CONTROL ACT NO. 9/2020 -->
                    <br>
                    <!-- LIQUORS BAR LICENSE (Section 30) -->

                </h3>
                <br>
                <h3 style="font-weight: bold; text-align: center;">
                    <!-- <u>
                        <?php echo strtoupper($arr['category']); ?>
                    </u> -->
                </h3>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="" style="font-weight: bold; float: left; color:#0B57D0;">

                            <?php echo strtoupper($arr['lnumber']); ?>
                        </h3>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="" style="font-weight: bold; float: right; color:#0B57D0;">

                            Receipt No: <?php echo strtoupper($arr['receiptnumber']); ?>
                        </h3>
                    </div>


                </div>


                <div class="" style="font-weight: bold;">

                </div>

                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-12">

                        <h2 style="font-weight: normal;">
                            <b><?php echo strtoupper($arr['bname']); ?></b> is hereby authorized thereof to deliver intoxicating liquor from one place or premise to another in Zanzibar.
                        </h2>
                        <br>
                        <br>
                        <h2 style="font-weight: normal;">The premises situated at: <b><?php echo strtoupper($arr['shname']); ?></b></h2>
                        <br>
                        <br>
                        <h2 style="font-weight: normal;">
                            This permit issued subject to the Liquor Control Act, 2020 and its Regulations of 2020 and expire on the 31st DECEMBER 2025.
                        </h2>
                        <br>
                        <br>
                        <h2 style="font-weight: normal; text-align: center;">
                            Date&nbsp;:&nbsp;&nbsp;<?php 
                            $time = date( "d-m-Y", strtotime($arr['paiddate']));
                            $mydate=getdate(strtotime($time));
                            echo "$mydate[mday] this $mydate[month] day $mydate[weekday] $mydate[year]";
                            
                            ?>
                        </h2>
                        <br>
                        <br>
                        <h2 style="text-align: center;"> <b>FEE PAID TSH <?php echo number_format($arr['amount'],2). '/='; ?></b></h2>
                        <br>
                        <br>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function pr() {
            window.print();
            //   history.back();
        }

        // go to the previous page after printing
        window.onafterprint = function() {
            history.go(-1);
        }
    </script>

    <?php
    include('../MySections/footerLinks.php');
    ?>
</body>

</html>