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
    <title>HUN | Kontakt</title>
</head>
<body>
    <br>
<div id="map"></div> 
<script>
function initMap(){
    var location = {lat: 55.681180, lng: 12.583160};
    var map = new google.maps.Map(document.getElementById("map"),{
        zoom: 11,
        center: location
    });
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_U9TnzZC5Gudt8R6ZN2zEdN4mGIm-Ze4&callback=initMap"></script>
    <br>
    <div class="mail-div">
    <img src="img/mail.png" alt="mail icon">
    <p>E-mail</p>
    <a href="mailto:hun10@balbonet.dk">hun10@balbonet.dk</a>
    </div>

    <div class="phone-div">
    <img class="rotateimg180" src="img/phone.png" alt="phone icon">
    <p>Telefon</p>
    <p>29 47 00 23</p>
    </div>
    <br>
    <div class="adresse-div">
    <img src="img/house.png" alt="house icon">
    <p>Adresse</p>
    <p>Grønnegade 26, 1107 København</p>
    </div>
    <div class="opentime-div">
    <p>Åbningstider</p>
    <p>Man, Tir, Tor 07:30-16:00</p>
    <p>Fre 07:30-15:00</p>

    </div>
    <div class="doorimg">
    <img src="img/opendoors.png" alt="">
    </div>
    
    
    

</body>
</html>