
let today = new Date();
let dd = String(today.getDate()).padStart(2, '0');
let mm = String(today.getMonth()+1).padStart(2, '0');
let yyyy = today.getFullYear();
let season = document.getElementById("season");
let spring = "url(img/spring.jpg) 30 30 round";
let summer = "url(img/summer.jpg) 30 30 round";
let autumn = "url(img/autumn.jpg) 30 30 round";
let winter = "url(img/winter.jpg) 30 30 round";

today = mm;
getSeason(today);

function getSeason(today) {

    if (3 <= today && today<= 5) {
        // console.log('spring');
        season.src = "img/spring.jpg";
        changeBorder('fancy-border', spring);
    }
    else if (6 <= today && today<= 8) {
        // console.log('summer');
        season.src = "img/summer.jpg";
        changeBorder('fancy-border', summer);
    }
    else if (9 <= today && today<= 11) {
        // console.log('fall'); 
        season.src = "img/autumn.jpg";
        changeBorder('fancy-border', autumn);
    }
    else{
        // console.log('winter');
        season.src = "img/winter.jpg";
        changeBorder('fancy-border', winter);
    }   
        
}
function changeBorder(className, imageBorder){
    var elements = document.getElementsByClassName(className);
    for(var i = 0, length = elements.length; i < length; i++) {
       if( elements[i].textContent == ''){
          elements[i].style.borderImage = imageBorder;
       } 
    }

  }
