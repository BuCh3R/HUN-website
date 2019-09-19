<?php
include 'Menu.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <!-- <script type="text/javascript" src="script.js"> -->
    <title>HUN | Galleri</title>
    <script>
////////////////////////// Slideshow ///////////////////////////
var minTimer;
function mortensfunction(){
  minTimer=setTimeout(nextslide, 6000);
}

function nextslide(){
  plusSlides(1);
}
function initSlideShow(){
  showSlides(slideIndex);
}
var slideIndex = 1;


function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  clearTimeout(minTimer);
  mortensfunction();
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</head>
<body onload="initSlideShow()">
  
<div class="slideshow-container">
<a href="#smyk1"><div class="mySlides fade-in gray">
  <div class="numbertext">1 / 4</div>
  <img src="img/Brillantvedh.png" style="width:100%">
  <div class="text">Vedhæng</div>
</div></a>

<a href="#smyk2"><div class="mySlides fade-in gray">
  <div class="numbertext">2 / 4</div>
  <img src="img/lillaring.png" style="width:100%">
  <div class="text">Ringe</div>
</div></a>

<a href="#smyk3"><div class="mySlides fade-in gray">
  <div class="numbertext">3 / 4</div>
  <img src="img/Øreringe 1.png" style="width:100%">
  <div class="text">Øreringe</div>
</div></a>

<a href="#smyk4"><div class="mySlides fade-in gray">
  <div class="numbertext">4 / 4</div>
  <img src="img/Armring.png" style="width:100%">
  <div class="text">Armringe</div>
</div></a>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>  
</div>


<p class="padding">Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet.</p>

<div id="smyk1" class="epic-div">
<div class="text overpos">Vedhæng</div>
    <img src="img/kædesq1.png" alt="HUN Vedhæng">
    <img src="img/kædesq2.png" alt="HUN Vedhæng">
    <img src="img/kædesq3.png" alt="HUN Vedhæng">
    <img src="img/kædesq4.png" alt="HUN Vedhæng">
</div>
<br>
<div id="smyk2" class="epic-div">
<div class="text overpos">Ringe</div>
    <img src="img/ringsq1.png" alt="HUN Ring">
    <img src="img/ringsq2.png" alt="HUN Ring">
    <img src="img/ringsq3.png" alt="HUN Ring">
    <img src="img/ringsq4.png" alt="HUN Ring">
</div>
<br>
<div id="smyk3" class="epic-div">
<div class="text overpos">Øreringe</div>
    <img src="img/øreringesq1.png" alt="HUN Øreringe">
    <img src="img/øreringesq2.png" alt="HUN Øreringe">
    <img src="img/øreringesq3.png" alt="HUN Øreringe">
    <img src="img/øreringesq4.png" alt="HUN Øreringe">
</div>
<br>
<div id="smyk4" class="epic-div">
<div class="text overpos">Armringe</div>
    <img src="img/armsq1.png" alt="HUN Armring">
    <!-- <img src="img/armsq2.png" alt="HUN Svendestykke"> -->
    <!-- <img src="img/epic3.jpg" alt="">
    <img src="img/epic4.jpg" alt=""> -->
</div>
<br>
</body>
<?php
include 'footer.php';
?>
</html>