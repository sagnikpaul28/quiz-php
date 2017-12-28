<!DOCTYPE html>
<html>
    <head>       
        <title>Enter your details</title>
        <link rel="shortcut icon" href="images/favicon.png" type="image/gif">
        <link rel="stylesheet" href="css/enterDetails.css" type="text/css">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            window.onload = function(){
                setTimeout(function(){
                    var loader = document.getElementsByClassName("load")[0];
                    loader.className="load fadeout" ;
                    setTimeout(function(){loader.style.display="none"},1000)
                },1500)
            }
        </script>
    </head>
    <body>
        <div class="load">
            <img src="images/loading%20(2).gif">
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="500">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/marvel_1.jpg">
                </div>

                <div class="item">
                    <img src="images/marvel_2.jpg">
                </div>

                <div class="item">
                    <img src="images/marvel_3.jpg">   
                </div>
                
                <div class="item">
                    <img src="images/marvel_4.jpg">
                </div>

                <div class="item">
                    <img src="images/marvel_5.jpg">
                </div>
                
                <div class="item">
                    <img src="images/marvel_6.jpg">
                </div>

                <div class="item">
                    <img src="images/marvel_7.jpg">
                </div>
            </div>
        </div>
        
        <div id="layer"><center>
            <div id="form_part">
                <form action="initialize.php" method="post">
                    Enter your details<br><br>
                    Name: &nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Enter your name" required="true" autocomplete="off"><br><br>
                    <input type="hidden" name="quiz" value="marvel">
                    <button type="submit" class="button">Submit</button>
                </form>
            </div>
        </center></div>
    </body>
</html>