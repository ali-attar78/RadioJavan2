<?php

session_start();

$_SESSION["login_admin_status"]=false;
header("Location:index.php");

?>