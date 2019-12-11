<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; include 'galleri.php';?>
    
    <title>HUN | Øreringe</title>
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
outputCarouselNav("white-background", "opacity-background", "white-background", "white-background");
CarouselImages("img/ring1.png", "img/ring2.png", "img/ring3.png", "img/ring4.png", "img/ring5.png", "img/ring6.png");
allImages("rings");
?>

<!-- Content animations and functions -->
<script src="carousel.js"></script>
<script src="season.js"></script>

</body>
</html>