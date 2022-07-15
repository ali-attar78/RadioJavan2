<?php
include "dataBase.php";
session_start();



if (isset($_POST["name"]) && isset($_POST["image"])) {

    $name=$_POST["name"];
    $image=$_POST["image"];


    //     image/artists/1.jpg

    $db->query("INSERT INTO artists(name,image) VALUES('$name','$image')");

header("Location:add_artist.php");
}






?>
