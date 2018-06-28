<?php
include("library/class.mysqldb.php");
include("library/config.inc.php");
if(isset($_POST["submit"])){
	$user_ref=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	mysql_query("INSERT INTO `customer` (
	`Cus_Id`, 
	`Cus_Name`, 
	`Cus_Address`, 
	`Cus_District`, 
	`Cus_Area`, 
	`Cus_Province`, 
	`Cus_Code`, 
	`Cus_Tel`, 
	`Cus_Fax`, 
	`Cus_Email`, 
	`Cus_Website`, 
	`Cus_Contacts`,
	`Cus_Telcontacts`
	) VALUES (
	NULL, 
	'".$_POST["Cus_Name"]."', 
	'".$_POST["Cus_Address"]."', 
	'".$_POST["Cus_District"]."', 
	'".$_POST["Cus_Area"]."', 
	'".$_POST["Cus_Province"]."', 
	'".$_POST["Cus_Code"]."', 
	'".$_POST["Cus_Tel"]."', 
	'".$_POST["Cus_Fax"]."', 
	'".$_POST["Cus_Email"]."', 
	'".$_POST["Cus_Website"]."', 
	'".$_POST["Cus_Contacts"]."',
	'".$_POST["Cus_Telcontacts"]."'
	);");
	
	mysql_query("INSERT INTO `login` (`log_id`, `log_user`, `log_passwd`, `log_user_ref`, `log_user_type`) VALUES (NULL, '".$_POST["user"]."', '".$_POST["passwd"]."', '".$user_ref."', 'customer');");
	
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
        <h1 class="display-3">Become Customer</h1>
        <p class="lead">Register the form to be Customer.</p>
        <p class="lead">
        <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Username:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-text-input" placeholder="Username" name="user" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Password:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="password" id="example-password-input" placeholder="Password" name="passwd" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Full Name:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-fullname-input" placeholder="Full Name" name="Cus_Name" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Address:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-address-input" placeholder="Address" name="Cus_Address" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">District:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-district-input" placeholder="District" name="Cus_District" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Area:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-area-input" placeholder="Area" name="Cus_Area" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Province:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-province-input" placeholder="Province" name="Cus_Province" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Zip Code:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-code-input" placeholder="Zip Code" name="Cus_Code" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Telephone:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-tel-input" placeholder="Telephone" name="Cus_Tel" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Fax:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-fax-input" placeholder="Fax" name="Cus_Fax">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Email:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="email" id="example-email-input" placeholder="Email" name="Cus_Email" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Website:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-website-input" placeholder="http://www.website.com" name="Cus_Website">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Contacts:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-contacts-input" placeholder="Contacts" name="Cus_Contacts">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Telephone Contact:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-Telephone-Contacts-input" placeholder="Telephone Contacts" name="Cus_Telcontacts">
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