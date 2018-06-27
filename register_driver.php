<?php
include("library/class.mysqldb.php");
include("library/config.inc.php");
if(isset($_POST["submit"])){
	$user_ref=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	mysql_query("INSERT INTO `driver` (
	`Driver_Id`, 
	`Driver_Name`, 
	`Driver_Lastname`, 
	`Driver_Nickname`, 
	`Driver_Birthday`, 
	`Driver_License`, 
	`Driver_Allowed`, 
  `Driver_Expired`,
	`Driver_Startwork`, 
  	) VALUES (
	NULL,
	'".$_POST["Driver_Name"]."', 
	'".$_POST["Driver_Lastname"]."', 
	'".$_POST["Driver_Nickname"]."', 
	'".$_POST["Driver_Birthday"]."', 
	'".$_POST["Driver_License"]."', 
	'".$_POST["Driver_Allowed"]."', 
  '".$_POST["Driver_Expired"]."', 
  '".$_POST["Driver_Startwork"]."', 
	'".$user_ref."'
	);");
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>TMS - Transport Management System</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="js/jquery-3.1.1.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
.selector-for-some-widget {
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
}
</style>
</head>

<body>
<div class="container-fluid">

	<nav class="breadcrumb">
      <a class="breadcrumb-item" href="index.php">Login</a>
    </nav>

	<div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Become Driver</h1>
        <p class="lead">Register the form to be Driver.</p>
        <p class="lead">
        <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">ชื่อ:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-fullname-input" placeholder="Name" name="Driver_Name" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">นามสกุล:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-address-input" placeholder="Surname" name="Driver_Lastname" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">ชื่อเล่น:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-district-input" placeholder="Nickname" name="Driver_Nickname" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">วัน/เดือน/ปี เกิด:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="date" id="example-area-input" name="Driver_Birthday" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">ใบขับขี่:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-Driver-License" placeholder="Driver License" name="Driver_License" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">วันออกใบอนุญาตขับขี่:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="date" id="example-code-input" placeholder="Driver Allowed" name="Driver_Allowed" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">วันหมดอายุใบขับขี่:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="date" id="example-tel-input" placeholder="Driver Expired" name="Driver_Expired" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">วันเริ่มทำงาน:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="date" id="example-fax-input" placeholder="Driver Startwork" name="Driver_Startwork">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">Register</button>
              </div>
            </div>
        </form>
        </p>
      </div>
	</div>
</div>
</body>
</html>