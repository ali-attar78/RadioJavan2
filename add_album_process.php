<?php
include "dataBase.php";
session_start();



if (isset($_POST["name"]) && isset($_POST["image"]) && isset($_POST["artists_id"])) {

    $name=$_POST["name"];
    $image=$_POST["image"];
    $artists_id=$_POST["artists_id"];


    //     image/albums/1.jpg

    $db->query("INSERT INTO albums(name,image,artists_id) VALUES('$name','$image','$artists_id')");

    header("Location:add_album.php");
}



?>
