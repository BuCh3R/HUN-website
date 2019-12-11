<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; include 'galleri.php';?>
    
    <title>HUN | Vedhæng</title>
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>

<!-- Social media bar -->
<?php include 'socialmedia.php'; ?>

<!-- Background -->
<img id="season" class="posss" src="" alt="">

<!-- Content -->
<?php
outputCarouselNav("white-background", "white-background", "opacity-background", "white-background");
CarouselImages("img/vedh1.png", "img/vedh2.png", "img/vedh3.png", "img/vedh4.png", "img/vedh5.png", "img/vedh6.png");
allImages("pendants");
?>

<!-- Content animations and functions -->
<script src="carousel.js"></script>
<script src="season.js"></script>

</body>
</html>