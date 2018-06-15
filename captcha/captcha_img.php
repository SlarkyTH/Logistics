<?php
session_start();
include("captchaZDR.php");
$capt = new captchaZDR;
$capt->display();
?>
