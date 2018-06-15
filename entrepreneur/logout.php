<?php   
session_start(); 
session_destroy();
header("location: /logistic/index.php");
exit();
?>