<?php

function outputCarouselNav($markedButtonRing, $markedButtonEar, $markedButtonNeck, $markedButtonArm){
    echo '<div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-sm-10">
                    <a href="rings.php" class="galleri-buttons '.$markedButtonRing.'">Ringe</a>
                    <a href="earrings.php" class="galleri-buttons '.$markedButtonEar.'">Øreringe</a>
                    <a href="pendants.php" class="galleri-buttons '.$markedButtonNeck.'">Vedhæng</a>
                    <a href="bangles.php" class="galleri-buttons '.$markedButtonArm.'">Armringe</a>
                </div>
            </div>
        </div>';
}
function CarouselImages($imageOne, $imageTwo, $imageThree, $imageFour, $imageFive, $imageSix){
    echo '<div class="container text-center carousel-margin">
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block col-4 img-fluid" src="'.$imageOne.'">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block col-4 img-fluid" src="'.$imageTwo.'">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block col-4 img-fluid" src="'.$imageThree.'">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block col-4 img-fluid" src="'.$imageFour.'">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block col-4 img-fluid" src="'.$imageFive.'">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block col-4 img-fluid" src="'.$imageSix.'">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    
                    <!-- blur divs -->
                    <div class="hallooooo"></div>
                    <div class="hallooooo-right"></div>
                </div>
            </div>
        </div>';
}
function allImages($folder){
    $dirname = "img/$folder/";
    $images = glob($dirname."*.png"); 
    
    echo '<div class="container-fluid text-center my-5">
            <div class="row justify-content-sm-center">';

    foreach($images as $image) {
        echo '<div id="master" class="col-sm-3 margin-rows">
                <img class="fancy-border" src="'.$image.'" alt="">
            </div>';       
    }
    echo '</div></div>';
}

?>