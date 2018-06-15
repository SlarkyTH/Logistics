<?php
include("library/class.mysqldb.php");
include("library/config.inc.php");
if(isset($_POST["submit"])){
	$user_ref=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	mysql_query("INSERT INTO `sender` (
	`sen_id`, 
	`sen_name`, 
	`sen_company`, 
	`sen_address`, 
	`sen_district`, 
	`sen_area`, 
	`sen_province`, 
	`sen_code`, 
	`sen_tel`, 
	`sen_fax`, 
	`sen_email`, 
	`sen_website`,
	`sen_user_ref`
	) VALUES (
	NULL, 
	'".$_POST["fullname"]."', 
	'".$_POST["company"]."', 
	'".$_POST["address"]."', 
	'".$_POST["district"]."', 
	'".$_POST["area"]."', 
	'".$_POST["province"]."', 
	'".$_POST["code"]."', 
	'".$_POST["tel"]."', 
	'".$_POST["fax"]."', 
	'".$_POST["email"]."', 
	'".$_POST["website"]."',
	'".$user_ref."'
	);");
	
	mysql_query("INSERT INTO `login` (`log_id`, `log_user`, `log_passwd`, `log_user_ref`, `log_user_type`) VALUES (NULL, '".$_POST["user"]."', '".$_POST["passwd"]."', '".$user_ref."', 'sender');");
	
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
        <h1 class="display-3">Become Sender</h1>
        <p class="lead">Register the form to be Sender.</p>
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
                <input class="form-control form-control-lg" type="text" id="example-fullname-input" placeholder="Full Name" name="fullname" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Company:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-company-input" placeholder="Company" name="company" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Address:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-address-input" placeholder="Address" name="address" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">District:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-district-input" placeholder="District" name="district" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Area:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-area-input" placeholder="Area" name="area" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Province:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-province-input" placeholder="Province" name="province" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Zip Code:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-code-input" placeholder="Zip Code" name="code" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Telephone:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-tel-input" placeholder="Telephone" name="tel" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Fax:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-fax-input" placeholder="Fax" name="fax">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Email:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-email-input" placeholder="Email" name="email" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Website:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-website-input" placeholder="http://www.website.com" name="website">
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