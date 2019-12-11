<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php'; ?>
    <title>HUN | Kontakt</title>
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>

<!-- Social media bar -->
<?php include 'socialmedia.php'; ?>

<!-- Background -->
<img id="season" class="posss" src="" alt="">
<div class="container">
    <div class="row justify-content-sm-center">
        <div class="col-sm-6 contact-div">
            <h3>Spørgsmål? - Send os en besked</h3>
            <p>Dit navn <i class="fas fa-star-of-life"></i></p>
            <form action="includes/email.php" method="POST">
                <input class="form-control" name="person-name" type="text" placeholder="Navn">
                <br>
                <p>Din e-mail <i class="fas fa-star-of-life"></i></span></p>
                <input class="form-control" name="person-mail" type="text" placeholder="E-mail">
                <br>
                <label for="comment">Besked</label>
                <textarea class="form-control resize-none" name="thisisit"></textarea>
                <label for="uploadfile">Hvis spørgsmål angående et ukendt smykke - vedhæft venligst billede</label>
                <input type="file" class="form-control-file" name="userFileName" id="uploadfile">
                <button class="btn btn-outline-dark float-right" type="submit" name="comment-submit">Send</button>   
            </form>  
        </div>
        <div class="col-sm-6">
            <div class="ring-op">
                <h3>Yderligere kontaktinformationer</h3>
                <p><i class="fas fa-door-open"></i> Åbent &nbsp;&nbsp;&nbsp; Man, Tir, Tor 07:30-16:00. &nbsp; Fre 07:30-15:00</p>
                <p><i class="fas fa-phone-alt"></i> Telefon &nbsp;&nbsp; 29 47 00 23</p>
                <p><i class="fas fa-at"></i> E-mail &nbsp; &nbsp; &nbsp;<a href="mailto:hun10@balbonet.dk">hun10@balbonet.dk</a></p>
                <p><i class="fas fa-map-marked-alt"></i> Adresse &nbsp; Grønnegade 26, 1107 København</p>
            </div>
            <div id="map"></div>
        </div>
    </div>
</div>
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
<script src="season.js"></script>
</body>
</html>