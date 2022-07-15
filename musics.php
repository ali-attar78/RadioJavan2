<?php include "header_main.php";
include "dataBase.php";

$album_id=$_GET["album"];

$musics=$db->query("SELECT * FROM musics WHERE album_id=$album_id");



$albums=$db->query("SELECT * FROM albums WHERE id=$album_id")->fetch_assoc();

$artist_id=$albums["artists_id"];

$artist_name=$db->query("SELECT name FROM artists WHERE id=$artist_id");
$artist_name=$artist_name->fetch_assoc();
?>


    <div class="container ">
        <h2 class="text-light mt-3" >Musics of <?php echo $albums["name"];  ?> Album</h2>
        <hr class="text-light">
        </div>



<?php if($musics->num_rows==0):?>
    <div class="alert alert-dark " role="alert" style="text-align: center">
        <b>There are currently no music from this album</b>
    </div>
<?php else:?>
    <div class="row " dir="rtl">
        <div class="col-12 col-sm-5 col-lg-4" dir="ltr">
    <?php foreach ($musics as $music):?>

                <ul class="list-group musicList ">
                    <li class="list-group-item d-flex  align-items-center musicList" onclick="playMusic('<?php echo $music["mp3"];?>' , '<?php echo $music["image"];?>')">
                        <a style="display:flex" href="#">
                            <div  class="image-parent">
                                <img class="rounded-2" src="<?php echo $music["image"]?>" style="width: 55px">
                            </div>

                            <div class="text-light musicListName "  >
                                <h5 class="text-light" ><?php echo $artist_name["name"];?></h5>
                                <h6 class="text-light"><?php echo $music["name"];?></h6>
                            </div>
                        </a>
                    </li>
                </ul>

    <?php endforeach; ?>
        </div>

        <div class="col-12 col-sm-7 col-lg-8 d-block justify-content-center " style="text-align: center" >

            <img  id="music_image" src="<?php echo $albums["image"];?>" class="rounded mx-auto d-block rounded-4" alt="..." style="width: 400px;height: 400px">
            <audio id="music_player" class="mt-3 mb-3" src="mp3/1.mp3" controls ></audio>

    </div>
<?php endif;?>


<?php include "footer_main.php"; ?>

