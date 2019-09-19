<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Tinos&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Russo+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Istok+Web&display=swap" rel="stylesheet">

<script>
  function openSlideMenu(){
    document.getElementById('menu').style.width = '230px';
    document.getElementById('content').style.marginLeft = '0px';
  }
  function closeSlideMenu(){
    document.getElementById('menu').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
  }
</script>
</head>
<body>
  <div id="content">

    <span class="slide">
      <a onclick="openSlideMenu()">
        <i class="fas fa-bars"></i>
      </a>
    </span>
    <div id="menu" class="nav">
      <a class="close" onclick="closeSlideMenu()">
        <i class="fas fa-times"></i>
      </a>
      <br>
      <br>
      <br>
      <p><a href="index.php#">Forside</a></p>
      <br>
      <p><a href="galleri.php">Galleri</a></p>
      <br>
      <p><a href="ydelser.php">Ydelser</a></p>
      <br>
      <p><a href="ommig.php">Om mig</a></p>
      <br>
      <p><a href="kontakt.php">Kontakt</a></p>
      
    </div>

  </div>
  <div class="container red topBotomBordersOut">
  <a href="index.php#">Forside</a>
  <a href="galleri.php">Galleri</a>
  <a href="ydelser.php">Ydelser</a>
  <a href="ommig.php">Om mig</a>
  <a href="kontakt.php">Kontakt</a>
</div>
<div class="middle-bg">

</div>
<br>
<br>
</body>
</html>