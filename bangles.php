<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; include 'galleri.php';?>
    
    <title>HUN | Armringe</title>
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
outputCarouselNav("white-background", "white-background", "white-background", "opacity-background");
CarouselImages("img/arm1.png", "img/arm2.png", "img/arm3.png", "img/arm4.png", "img/arm5.png", "img/arm6.png");
allImages("bangles");
?>

<!-- Content animations and functions -->
<script src="carousel.js"></script>
<script src="season.js"></script>

</body>
</html>