<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <title>HUN | Forside</title>
</head>
<body onload="loadfade('fadeId'); loadfade('fadeId2'); loadfade('fadeId3');">
<header>
    <?php include 'header.php'; ?>
</header>

<!-- Social media bar -->
<?php include 'socialmedia.php'; ?>

<!-- Fade animation -->
<script>
function loadfade(specificdiv){
    var slideSource = document.getElementById(specificdiv);
    slideSource.classList.toggle('fade');
}
</script>

<!-- OPRETTE ADMIN LOGIN -->



<!-- <form action="includes/signup.inc.php" method="post">
    <input class="form-control" type="text" name="name" placeholder="Name">
    <br>
    <input class="form-control" type="password" name="pwd" placeholder="Password">
    <button type="submit" name="signup-submit">opret</button>
</form> -->






<!-- Background -->
<img id="season" class="posss" src="" alt="">


<div class="container-fluid my-5">
    <div class="row justify-content-sm-center">
        <div id="text-wrap" class="col-sm-6 white-div">
            <img class="first-two-img" src="img/svendfp.png" alt="">
            <img class="first-two-img" src="img/ring4.png" alt="">
            <img class="special-wide" src="img/wideimg.png" alt="">
            <a href="rings.php"><div class="darken"><h1 class="headline-fp">Se galleriet</h1></div></a>
        </div>
        <div id="text-wrap" class="col-sm-6 white-div">
            <img class="fp-wide" src="img/widework.png" alt="">
            <a href="omhun.php"><div class="darken"><h1 class="headline-fp">Læs om HUN</h1></div></a>
        </div>
    </div>
</div>
<div class="container-fluid line-pos">
    <div class="row justify-content-sm-center">
        <div class="col-sm-5 logo-line">

        </div>
        <div class="col-sm-2 logo-div">
        <img src="img/hunlogo.png" alt="">
        </div>
        <div class="col-sm-5 logo-line2">

        </div>
    </div>
</div>
<?php
require 'includes/dbh.inc.php';

$sql ="SELECT * FROM textbox WHERE idText=1";
$result = $conn->query($sql);
if($row = mysqli_fetch_assoc($result)){
    $h1=$row['headline'];
    $text1=$row['textContent'];
}
$sql2 ="SELECT * FROM textbox WHERE idText=2";
$result2 = $conn->query($sql2);
if($row = mysqli_fetch_assoc($result2)){
    $h2=$row['headline'];
    $text2=$row['textContent'];
}

echo '<div class="container-fluid line-pos">
<div class="row justify-content-md-center">
    <div class="col-sm-12 frontpage-info-headline">
        <h1>Hans Ulrik Nielsen</h1>
    </div>
    <div class="w-100"></div>
    <div class="col-sm-5 fp-textbox">
        <h5>'.$h1.'</h5>
        <p>'.$text1.'</p>
    </div>
    <div class="col-sm-5 fp-textbox">
        <h5>'.$h2.'</h5>
        <p>'.$text1.'</p>
    </div>
</div>
</div>';
?>


















<!-- Frontpage content -->
    <!-- <div class="container con-pos">
        <div class="row justify-content-sm-center margin-rows-mobile">
            <div id="fadeId" class="fade-in-div col-sm-5">
                <a href="rings.php">
                    <img class="main-image" src="img/svendstyk.png" alt="">
                </a>
                <h1>Galleri</h1>
            </div>
            <div id="fadeId2" class="fade-in-div2 col-sm-5">
                <a href="aktivitet.php">
                    <img class="main-image2" src="img/aktivitet.png" alt="">
                </a>
                <h1>Aktivitet</h1>
            </div>
        </div>
        <br>
        <div class="row justify-content-sm-center margin-rows-mobile">
            <div id="fadeId2" class="fade-in-div2 col-sm-5">
                <a href="aktivitet.php">
                    <img class="main-image2" src="img/aktivitet.png" alt="">
                </a>
                <h1>Aktivitet</h1>
            </div>
        </div>
        <br>
        <div class="row justify-content-sm-center margin-rows">
            <div id="fadeId3" class="fade-in-div3 col-sm-5">
                <a href="omhun.php">
                    <img class="main-image3" src="img/hansulrik.png" alt="">
                </a>
                <h1>Om HUN</h1>
            </div>
            <div id="fadeId3" class="fade-in-div3 col-sm-5">
                <a href="omhun.php">
                    <img class="main-image3" src="img/hansulrik.png" alt="">
                </a>
                <h1>Om HUN</h1>
            </div>
        </div>
        <br>
    </div> -->
    <script src="season.js"></script>
</body>
</html>