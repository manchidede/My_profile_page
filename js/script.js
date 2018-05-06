var pictures=["images/slide1.jpg","images/slide2.jpg","images/slide3.jpg","images/slide4.jpg","images/slide5.jpg"]
var imgslide = document.getElementById('slidediv').getElementsByTagName("img")[0];
var slidetext1 = document.getElementById("slidetext1");
var slidetext2 = document.getElementById("slidetext2");
var slidetext3 = document.getElementById("slidetext3");
var slidetext4 = document.getElementById("slidetext4");
var slidetext5 = document.getElementById("slidetext5");
function slide(){
    imgslide.src=pictures[0];
    imgslide.className = "fade1";
    slidetext1.style.display = "block";
    changepic(0);
}
function changepic(n){
    imgslide.src=pictures[n%pictures.length];
    switch(n%pictures.length) {
        case 0:
        imgslide.className = "fade1";
        slidetext1.style.display = "block";
        slidetext2.style.display = "none";
        slidetext3.style.display = "none";
        slidetext4.style.display = "none";
        slidetext5.style.display = "none";
            break;
        case 1:
        imgslide.className = "fade2";
        slidetext1.style.display = "none";
        slidetext2.style.display = "block";
        slidetext3.style.display = "none";
        slidetext4.style.display = "none";
        slidetext5.style.display = "none";
            break;
        case 2:
        imgslide.className = "fade3";
        slidetext1.style.display = "none";
        slidetext2.style.display = "none";
        slidetext3.style.display = "block";
        slidetext4.style.display = "none";
        slidetext5.style.display = "none";
        break;
        case 3:
        imgslide.className = "fade4";
        slidetext1.style.display = "none";
        slidetext2.style.display = "none";
        slidetext3.style.display = "none";
        slidetext4.style.display = "block";
        slidetext5.style.display = "none";
        break;
        case 4:
        imgslide.className = "fade5";
        slidetext1.style.display = "none";
        slidetext2.style.display = "none";
        slidetext3.style.display = "none";
        slidetext4.style.display = "none";
        slidetext5.style.display = "block";
        break;
        default:
        break;
    }
    setTimeout(function(){changepic(n+1);},3000);
}