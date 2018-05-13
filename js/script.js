var img1 = document.getElementById("img1");
var h1 = document.getElementById("h1");
var p1 = document.getElementById("p1");
var slidetext1 = document.getElementById("slidetext1");


function slide(){



//Like button
    var imglike=document.getElementById("imglike");
    var liketxt=document.getElementById("liketxt");
    imglike.onclick=function(){
        var numlike=parseInt(liketxt.innerHTML,10);
        liketxt.innerHTML= numlike+1;


//Ajax send number of likes
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
//Like button ends


//Star rating

    var starrate=document.getElementById("star").getElementsByTagName("img");
    var staraverageimg=document.getElementById("starAverage").getElementsByTagName("img");
    var total=document.getElementById("total");
    var totalint;
    var average=document.getElementById("average");
    var averageint;
    var newaverage;
    var i;
    var starlen=starrate.length;


//Set progress bar onload
totalint=parseInt(total.innerHTML,10);
function progressb(id,n){
    var width=(parseInt(document.getElementById(id).innerHTML,10)/totalint)*100;
    console.log(document.getElementById(id).innerHTML);
document.getElementsByClassName("bar1")[n].style.width= width + '%';
}
progressb("star1",4);
progressb("star2",3);
progressb("star3",2);
progressb("star4",1);
progressb("star5",0);
//Set progress bar onload ends

function starcalc(starid,num){
    var newnum=parseInt((document.getElementById(starid).innerHTML))+1;
    document.getElementById(starid).innerHTML=newnum;
            totalint=parseInt(total.innerHTML,10);
            totalint+=1
            total.innerHTML=totalint;

            averageint=parseFloat(average.innerHTML,10);
            newaverage=(((num-averageint)/totalint)+averageint).toFixed(2);
            average.innerHTML=newaverage;

//star img full script
function starimgfullfunct(n){
//reset star to empty
for(var x=0;x<=4;x++){
    staraverageimg[x].src="images/starempty.png";
}
//set star
    for(var x=0;x<=n;x++){
        staraverageimg[x].src="images/starfull.png";
}
}
    if(newaverage>=4.5){
        starimgfullfunct(4);
    }
    if(newaverage>=3.5 && newaverage<4.5){
        starimgfullfunct(3);
    }
    if(newaverage>=2.5 && newaverage<3.5){
        starimgfullfunct(2);
    }
    if(newaverage>=1.5 && newaverage<2.5){
        starimgfullfunct(1);
    }
    if(newaverage<1.5){
        starimgfullfunct(0);
    }

//progress bar
//reset progress bar
for(var x=0;x<=4;x++){
    document.getElementsByClassName("bar1")[x].style.width = '0%';
}
//set progress bar onclick
function progressbar(id,n){
    var width=(parseInt(document.getElementById(id).innerHTML,10)/totalint)*100;
    console.log(document.getElementById(id).innerHTML);
document.getElementsByClassName("bar1")[n].style.width= width + '%';
}
progressbar("star1",4);
progressbar("star2",3);
progressbar("star3",2);
progressbar("star4",1);
progressbar("star5",0);

//Ajax star rating
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

//Contact form
$("#contactbutton").click(function(){
    $("#contactform").toggle();
    
});

//contact form ajax
$("#formsubmit").click(function(){
    var formname=$("#formname").val();
var formemail=$("#formemail").val();
var formcontent=$("#formcontent").val();
var formdata={name:formname, email:formemail,content:formcontent};
            $.ajax({
                method:"post",
                data: formdata,
                url:"contactform.php",
                success: function(response){
                    alert(response);
                },
                error: function(e){
                    console.log(e);
                }
            });

            $("#contactform").toggle();
    
});



//slider Ajax
$.ajax({
    method:"post",
    dataType: "json",
    url:"sliderfetch.php",
    success: function(data){
        h1.innerHTML=data[0][0];
        p1.innerHTML=data[0][1];
        img1.src=data[0][2];
        img1.className = "fade1";
        changepic(0,data);

    },
    error: function(e){
        console.log(e);
    }
});
 
}
//Resume and pause function
function Timer(callback, delay) {
    var timerId, delay;

    this.pause = function() {
        window.clearTimeout(timerId);
    };

    this.resume = function() {
        window.clearTimeout(timerId);
        timerId = window.setTimeout(callback, delay);
    };

    this.resume();
}
// Ends Resume and pause function

function changepic(n,data){
    h1.innerHTML=data[n%5][0];
    p1.innerHTML=data[n%5][1];
    img1.src=data[n%5][2];

function classChange(img,h,p){
    img1.className = img;
        h1.className=h;
        p1.className=p;
}

    switch(n%5) {
        case 0:
        classChange("fade1","firsth2","firstp");
            break;
        case 1:
        classChange("fade2","secondh2","secondp");
            break;
        case 2:
        classChange("fade3","thirdh2","thirdp");
        break;
        case 3:
        classChange("fade4","fourthh2","fourthp");
        break;
        case 4:
        classChange("fade5","fifthh2","fifthp");
        break;
        default:
        break;
    }
// setTimeout(function(){changepic(n+1,data);},3000);
    var timer = new Timer(function() {
        changepic(n+1,data);
    }, 3000);

//Pause slider
    $("#slidediv").mouseover(function(){
        timer.pause();
        $("#previous").show();
        $("#next").show();
    });
//Resume slider
    $("#slidediv").mouseleave(function(){
        timer.resume();
        $("#previous").hide();
        $("#next").hide();
    });


    //Toggle next button
    
// $("#next").click(function(){
//     var timer = new Timer(function() {
//         changepic(n+1,data);
//     }, 3000);
// });
//Toggle previous button
// if(n==0){}else{
// $("#previous").click(function(){
//     changepic(n-1,data)
// });
// }

}
