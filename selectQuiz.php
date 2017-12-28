<!DOCTYPE html>
<html>
    <head>
        <title>Select Your Quiz</title>
        <link rel="shortcut icon" href="images/favicon.png" type="image/gif">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=PT+Mono|Rock+Salt" rel="stylesheet">
        <link rel="stylesheet" href="css/selectQuiz.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            window.onload = function(){
                setTimeout(function(){
                    var loader = document.getElementsByClassName("load")[0];
                    loader.className="load fadeout" ;
                    setTimeout(function(){loader.style.display="none"},1000)
                },1500)
            }
        </script>
        <script>
        $(document).ready(function(){
            $("#got").hover(function(){
                $("#got").stop(true, false).animate({
                    width: '70vw',
                    marginLeft: '0vw',
                }, "slow");
                $("#dc").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '70vw',
                }, "slow");
                $("#marvel").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '80vw',
                }, "slow");
                $("#football").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '90vw',
                }, "slow");
            }, function(){
                $("#got").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '0vw',
                }, "slow");
                $("#dc").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '25vw',
                }, "slow");
                $("#marvel").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '50vw',
                }, "slow");
                $("#football").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '75vw',
                }, "slow");
            });
            
            $("#dc").hover(function(){
                $("#got").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '0vw',
                }, "slow");
                $("#dc").stop(true, false).animate({
                    width: '70vw',
                    marginLeft: '10vw',
                }, "slow");
                $("#marvel").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '80vw',
                }, "slow");
                $("#football").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '90vw',
                }, "slow");
            }, function(){
                $("#got").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '0vw',
                }, "slow");
                $("#dc").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '25vw',
                }, "slow");
                $("#marvel").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '50vw',
                }, "slow");
                $("#football").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '75vw',
                }, "slow");
            });
            
            $("#marvel").hover(function(){
                $("#got").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '0vw',
                }, "slow");
                $("#dc").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '10vw',
                }, "slow");
                $("#marvel").stop(true, false).animate({
                    width: '70vw',
                    marginLeft: '20vw',
                }, "slow");
                $("#football").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '90vw',
                }, "slow");
            }, function(){
                $("#got").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '0vw',
                }, "slow");
                $("#dc").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '25vw',
                }, "slow");
                $("#marvel").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '50vw',
                }, "slow");
                $("#football").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '75vw',
                }, "slow");
            });
            
            $("#football").hover(function(){
                $("#got").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '0vw',
                }, "slow");
                $("#dc").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '10vw',
                }, "slow");
                $("#marvel").stop(true, false).animate({
                    width: '10vw',
                    marginLeft: '20vw',
                }, "slow");
                $("#football").stop(true, false).animate({
                    width: '70vw',
                    marginLeft: '30vw',
                }, "slow");
            }, function(){
                $("#got").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '0vw',
                }, "slow");
                $("#dc").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '25vw',
                }, "slow");
                $("#marvel").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '50vw',
                }, "slow");
                $("#football").stop(true, false).animate({
                    width: '25vw',
                    marginLeft: '75vw',
                }, "slow");
            });
        });
        </script>
    </head>
    <body>
        <div class="load">
            <img src="images/loading%20(2).gif">
        </div>
        <div id="got">
            <div id="content">
                <center>
                    <h1><span>G A M E</span> &nbsp; <span>O F</span> &nbsp; <span>T H R O N E S</span></h1>
                    <a href="enterDetailsGot.php"><div id="button">
                        <h1>Take Quiz</h1>
                    </div>
                    </a>
                </center>
            </div>
            <div id="layer">
            </div>
        </div>
        <div id="dc">
            <div id="content">
                <center>
                    <h1>D C &nbsp; C O M I C S</h1>
                    <a href="enterDetailsDc.php"><div id="button">
                        <h1>Take Quiz</h1>
                    </div>
                    </a>
                </center>
            </div>
            <div id="layer"></div>
        </div>
        <div id="marvel">
            <div id="content">
                <center>
                    <h1>M A R V E L</h1>
                    <a href="enterDetailsMarvel.php"><div id="button">
                        <h1>Take Quiz</h1>
                    </div>
                    </a>
                </center>
            </div>
            <div id="layer"></div>
        </div>
        <div id="football">
            <div id="content">
                <center>
                    <h1>F O O T B A L L</h1>
                    <a href="enterDetailsFootball.php"><div id="button">
                        <h1>Take Quiz</h1>
                    </div>
                    </a>
                </center>
            </div>
            <div id="layer"></div>
        </div>
    </body>
</html>