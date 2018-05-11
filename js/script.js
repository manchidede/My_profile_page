var pictures=["images/slide1.jpg","images/slide2.jpg","images/slide3.jpg","images/slide4.jpg","images/slide5.jpg"]
var imgslide = document.getElementById('slidediv').getElementsByTagName("img")[0];
var slidetext1 = document.getElementById("slidetext1");
var slidetext2 = document.getElementById("slidetext2");
var slidetext3 = document.getElementById("slidetext3");
var slidetext4 = document.getElementById("slidetext4");
var slidetext5 = document.getElementById("slidetext5");
function slide(){
    //Like button
    var imglike=document.getElementById("imglike");
    var liketxt=document.getElementById("liketxt");
    imglike.onclick=function(){
        var numlike=parseInt(liketxt.innerHTML,10);
        liketxt.innerHTML= numlike+1;
        //Ajax number of likes
    var likedata={like:numlike+1}; 
    $.ajax({
        method:"post",
        data: likedata,
        url:"likerating.php",
        success: function(response){
            console.log(response);
        },
        error: function(e){
            console.log(e);
        }
    });
            
//End Ajax number of likes
    }

    //Star rating
    var starrate=document.getElementById("star").getElementsByTagName("img");
    var total=document.getElementById("total");
    var totalint;
    var average=document.getElementById("average");
    var averageint;
    var i;
    var starlen=starrate.length;


function starcalc(starid,num){
    var newnum=parseInt((document.getElementById(starid).innerHTML))+1;
    document.getElementById(starid).innerHTML=newnum;
            totalint=parseInt(total.innerHTML,10);
            totalint+=1
            total.innerHTML=totalint;

            averageint=parseFloat(average.innerHTML,10);
            average.innerHTML=(((num-averageint)/totalint)+averageint).toFixed(2);

            //Ajax
            var star=starid+'='+newnum;
            $.ajax({
                method:"post",
                data: star,
                url:"likerating.php",
                success: function(response){
                    console.log(response);
                },
                error: function(e){
                    console.log(e);
                }
            });
}

for (i = 0; i < starlen; i++) {
    starrate[i].onmouseover=function(){
        let curr=Array.prototype.indexOf.call(starrate,this);
        for(var x=0;x<=curr;x++){
            starrate[x].src="images/starfull.png";
    }
    }
    starrate[i].onmouseout=function(){
        let curr=Array.prototype.indexOf.call(starrate,this);
        for(var x=0;x<=curr;x++){
            starrate[x].src="images/starempty.png";
    }
    }

    starrate[i].onclick=function(){
        let curr=Array.prototype.indexOf.call(starrate,this);
        switch(curr){
            case 0:
            starcalc("star1",1);
            break;
            case 1:
            starcalc("star2",2);
            break;
            case 2:
            starcalc("star3",3);
            break;
            case 3:
            starcalc("star4",4);
            break;
            case 4:
            starcalc("star5",5);
            break;
            default:
            break;
        }
    }
}



 


    //slider
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