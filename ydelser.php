<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <title>HUN | Ydelser</title>
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>

<!-- Social media bar -->
<?php include 'socialmedia.php'; ?>

<!-- Background -->
<img id="season" class="posss" src="" alt="">
<?php
function ydelser($headline, $txtContent){
    echo '<div class="col-sm-6 ydelser-div my-4">
            <h3>'.$headline.'</h3>
            <p>'.$txtContent.'</p>
        </div>
        ';
}
?>
<div class="container my-5">
    <div class="row">
        <?php ydelser("Bestillinger", "Vi fremstiller smykker som du selv kan være med til at designe. Har du gammelt guld liggende, eller har arvet, bruger vi guldet til dit personlige smykke.")?> 
        <div class="col-sm-6 center-stuff"><img src="img/workimg1.jpg" alt=""></div> 
        <div class="w-100"></div>
        <?php ydelser("Reparationer", "Mange års erfaring bliver lagt til grund, når et smykke med affektionsværdi skal repareres. Kom trygt og få en vurdering af om det kan betale sig.")?>    
        <div class="w-100"></div>
        <?php ydelser("Forgyldning", "Vi forgylder dine smykker op, hvis de er slidte eller anløbne.")?>
        <div class="col-sm-6 center-stuff"><img src="img/workimg2.jpg" alt=""></div>
        <div class="w-100"></div>
        <?php ydelser("Rhodinering", "De fleste hvidguldssmykker er blevet rhodineret, dvs har fået et lag af ædelmetallet rhodium, som gør at smykket fremtræder flot hvidt. Vi udfører en polering og rhodinering af f. eks. en ring for kr. 250,-.")?>
        <div class="w-100"></div>
        <?php ydelser("Vurdering", "Vi udfører vurderinger af dine smykker. Til brug ved forsikringssager. Få tingene vurderet inden uheldet er ude")?>
        <div class="col-sm-6 center-stuff"><img src="img/workimg3.jpg" alt=""></div>
        <div class="w-100"></div>
        <?php ydelser("Faglige råd og vejledning", "Vi er altid klar med et fagligt råd til kolleger som støder ind i vanskeligheder. Gensidig hjælp i form af fagsnak, er altid velkommen.")?>  
    </div> 
</div>

<script src="season.js"></script>
</body>
</html>