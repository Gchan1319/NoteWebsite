<?php
$isi = file_get_contents("database.json");
$json = json_decode($isi, true);
$data = $json;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="this my note with html,css,and php">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Notes</title>
        <link rel="stylesheet" href="style.css" type="text/css" media="all" />
        <!-- bootstrap -->
        <link href="./framework/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="shortcut icon" href="icon.jpg" type="image/x-icon" />
        <script src="./framework/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        </head>
        <body id="body">
            <div id="noteList">
<?for($i = 1; $i < count($json); $i++) :?>
<div class="card card-note"><a href="<?= $data[$i]["hero"];?>">
<img class="card-img-top"src="<?=$data[$i]["hero"];?>"alt="<?= $data[$i]["title"];?>">
</a>
<div class="card-body" onclick="inspect(<?= $i;?>)">
<h5 class="card-title"><?= $data[$i]["title"];?></h5>
<p id="p_<?= $i?>" class="card-text"></p>
</div>
<div class="card-footer">
<small class="text-muted">Last updated <?=$data[$i]["LastUpdate"];?></small>
</div>
</div>
<? endfor; ?>
            </div>
            <div id="removeAll" class="button text-center">
                <a class="text-decoration-none" href="./login">
                    <p class="my-1 mx-2">Remove All</p>
                    </a>
                    </div>
            <div id="makeNote" class="button text-center">
                <a class="text-decoration-none" href="./create">
                    <p class="my-1 mx-2">create a notes</p>
                    </a>
                    </div>
 <script src="./framework/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <!-- popper error -->
  <script src="./framework/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="./framework/bootstrap4.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="./framework/chart.min.js" type="text/javascript" charset="utf-8"></script>
 <script src="Event.js" type="text/javascript" charset="utf-8"></script>
 </body>
  </html>