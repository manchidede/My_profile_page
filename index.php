<!Doctype html>
<html>
    <head>
            <meta charset="UTF-8">
        <title>Profile Page: Chidi</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>        
        <link rel="stylesheet" href="css/style.css" />
    </head>
    
        <body onload="slide();">
            <div class="body">
                <div class="container">
                <div class="profile">
                    <img src="images/chidi.jpg" alt="">
                    <div>
                    <h2>Okafor Callistus</h2><span><a href="#"><img id="imglike" src="images/like.png" alt=""></a><p id="liketxt">0</p></span>
                </div>
                    <h3>Skills</h3><br>
                    <p>Html/Css, Javascript, Php, Tensorflow</p><br>
                    <h3>Hobbies</h3><br>
                    <p>Video game, Swimming, Music.</p><br>
                    <h3>Bio</h3><br>
                    <p>Focused and dedicated to duty. <br>However, I don't like missing my break period.</p>
                </div>
                <div class="slider">
                        <div id="slidediv">
                                <img />
                                <span id="slidetext1">
                                <h2 class="firsth2">This is my first heading Slide</h2>
                                <p class="firstp">This is the first paragraph slide</p>
                                </span>
                            <span id="slidetext2">
                                <h2 class="secondh2">This is my second heading Slide</h2>
                                <p class="secondp">This is the second paragraph Slide</p>
                            </span>
                            <span id="slidetext3">
                                <h2 class="thirdh2">This is my Third heading Slide</h2>
                                <p class="thirdp">This is the Third paragraph Slide</p>
                            </span>
                            <span id="slidetext4">
                                <h2 class="fourthh2">This is my Fourth heading Slide</h2>
                                <p class="fourthp">This is the Fourth paragraph Slide</p>
                            </span>
                            <span id="slidetext5">
                                <h2 class="fifthh2">This is my Fifth heading Slide</h2>
                                <p class="fifthp">This is the Fifth paragraph Slide</p>
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
                    <div class="star">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <p><span id="average">0</span> average based on <span id="total">0</span> reviews.</p>
                        <Span>5 star <div><div id="bar1"></div></div> (<span id="star5">0</span>)</Span><br>
                        <Span>4 star <div><div id="bar1"></div></div> (<span id="star4">0</span>)</Span><br>
                        <Span>3 star <div><div id="bar1"></div></div> (<span id="star3">0</span>)</Span><br>
                        <Span>2 star <div><div id="bar1"></div></div> (<span id="star2">0</span>)</Span><br>
                        <Span>1 star <div><div id="bar1"></div></div> (<span id="star1">0</span>)</Span><br>
                    </div>
                    <h3>Drop your rating:</h3>
                    <div class="star" id="star">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                        <img src="images/starempty.png" alt="">
                    </div>
                </div>
                </div>
            </div>
            <script src="js/script.js"></script>
        </body>
</html>