<?php
include 'dbconnect.php';
$sql = "SELECT * FROM edittable";
$result = $conn->query($sql);
foreach ($result as $row) {
    $profilepic=$row["Profilepic"];
    $skills=$row["skills"];
    $hobbies=$row["hobbies"];
    $bio=$row["bio"];
    $likes=$row["likes"];
    $star1=$row["star1"];
    $star2=$row["star2"];
    $star3=$row["star3"];
    $star4=$row["star4"];
    $star5=$row["star5"];
}
$totalrating= $star1+$star2+$star3+$star4+$star5;
$average=($star1+($star2*2)+($star3*3)+($star4*4)+($star5*5))/$totalrating;
if(is_nan($average)){
    $average=0;
}
$conn = null;
?>
<!Doctype html>
<html>
    <head>
            <meta charset="UTF-8">
        <title>Profile Page: Chidi</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">      
        <link rel="stylesheet" href="css/style.css" />
    </head>
    
        <body onload="slide();">
                <div class="container">
                <div class="profile">
                    <img src="<?php echo "$profilepic"; ?>" alt="">
                    <div>
                    <h2>Okafor Callistus</h2><span><img id="imglike" src="images/like.png" alt=""><p id="liketxt"><?php echo "$likes"; ?></p></span>
                </div>
                    <h3>Skills</h3><br>
                    <p><?php echo "$skills"; ?></p><br>
                    <h3>Hobbies</h3><br>
                    <p><?php echo "$hobbies"; ?></p><br>
                    <h3>Bio</h3><br>
                    <p><?php echo "$bio"; ?></p>
                </div>
                <div class="slider">
                <h2>Recent Projects Completed</h2>
                        <div id="slidediv">
                                <img id="img1" />
                                <span id="slidetext1">
                                <h2 class="firsth2" id="h1"></h2>
                                <p class="firstp" id="p1"></p>
                                </span>
                            </div>
                            <div class="social">
                                <div> <a href="#"> <img src="images/fb.png" alt=""></a></div>
                                <div> <a href="#"><img src="images/tw.png" alt=""></a></div>
                                <div> <a href="#"><img src="images/gp.png" alt=""></a></div>
                                <div><a href="#"><img src="images/in.png" alt=""></a></div>
                                <div> <a href="#"><img src="images/ld.png" alt=""></a></div>
                                <div> <a href="#"><img src="images/wp.png" alt=""></a></div>
                                <div> <a href="#"><img src="images/git.png" alt=""></a></div>
                            </div>
                </div>
                <div class="feedback">
                    <h2>Star Rating</h2>
                    <div class="star" id="starAverage">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <p><span id="average"><?php echo number_format((float)$average, 2, '.', ''); ?></span> average based on <span id="total"><?php echo "$totalrating"; ?></span> reviews.</p>
                        <Span>5 star <div class="progressbar"><div class="bar1"></div></div> (<span id="star5"><?php echo "$star5"; ?></span>)</Span><br>
                        <Span>4 star <div class="progressbar"><div class="bar1"></div></div> (<span id="star4"><?php echo "$star4"; ?></span>)</Span><br>
                        <Span>3 star <div class="progressbar"><div class="bar1"></div></div> (<span id="star3"><?php echo "$star3"; ?></span>)</Span><br>
                        <Span>2 star <div class="progressbar"><div class="bar1"></div></div> (<span id="star2"><?php echo "$star2"; ?></span>)</Span><br>
                        <Span>1 star <div class="progressbar"><div class="bar1"></div></div> (<span id="star1"><?php echo "$star1"; ?></span>)</Span><br>
                    </div>
                    <h3>Drop your rating:</h3>
                    <div class="star" id="star">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                    </div>
                    <button id="contactbutton">Contact Me</button>
                    <div id="contactform">
                    <input type="text" id="formname" placeholder="Name">
                    <input type="text" id="formemail" placeholder="Email">
                    <textarea id="formcontent" rows="7" placeholder="Message"></textarea><br>
                    <button id="formsubmit" >Send</button>
                    </div>
                </div>
                </div>
                <div class="footer">Chidi 2018 &copy;</div>
            <script src="js/script.js"></script>
        </body>
</html>