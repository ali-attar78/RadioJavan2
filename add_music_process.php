<?php
include "dataBase.php";
session_start();



if (isset($_POST["name"]) && isset($_POST["image"]) && isset($_POST["album_id"]) && isset($_POST["mp3"])) {

    $name=$_POST["name"];
    $image=$_POST["image"];
    $album_id=$_POST["album_id"];
    $mp3=$_POST["mp3"];

    //     image/albums/1.jpg

    $db->query("INSERT INTO musics(name,image,album_id,mp3) VALUES('$name','$image','$album_id','$mp3')");

    header("Location:add_music.php");
}


?>
