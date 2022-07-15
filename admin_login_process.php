<?php
session_start();
$userName=$_POST["username"];
$password=$_POST["password"];

if ($userName=="ali" && $password=="123456"){
    $_SESSION["login_admin_status"]=true;
    header("Location: dashboard_admin.php");
}
else{
    header("Location: index.php");
}


?>

