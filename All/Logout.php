<?php 
require_once('../Code/confHeader.inc');
$_SESSION["Me"]->invalidate();
$LoginType = "Logout";
$Conf->confirmMsg("You have been logged out, but you can log in again if you'd like.");
include('login.php');
?>