<!DOCTYPE html>
<html>
    <head>
        <title>Quiz</title>
        <link rel="shortcut icon" href="images/favicon.png" type="image/gif">
        <meta HTTP-EQUIV="REFRESH" content="10; url=testscript.php">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/test.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            var count=10;
            var counter=setInterval(timer, 1000); 
            function timer()
            {
                count=count-1;
                if (count <= 0)
                {
                    clearInterval(counter);
                    return;
                }
                document.getElementById("timer").innerHTML="Time remaining: "+count + " secs";
            }            
        </script>
        <script>
            window.onload = function(){
                setTimeout(function(){
                    var loader = document.getElementsByClassName("load")[0];
                    loader.className="load fadeout" ;
                    setTimeout(function(){loader.style.display="none"},1000)
                },1000)
            }
        </script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <?php
        session_start();
        $topic = $_SESSION['topic'];
        if (strcmp($topic, "dc")==0)
        {
            echo "<script>";
            echo "$(document).ready(function(){";
            echo "$('body').css('background-image', 'url(images/dc_test.jpg)');";
            echo "})";
            echo "</script>";
        }
        else if (strcmp($topic, "got")==0)
        {
            echo "<script>";
            echo "$(document).ready(function(){";
            echo "$('body').css('background-image', 'url(images/got_test.jpg)');";
            echo "})";
            echo "</script>";
        }
        else if (strcmp($topic, "marvel")==0)
        {
            echo "<script>";
            echo "$(document).ready(function(){";
            echo "$('body').css('background-image', 'url(images/marvel_test.jpg)');";
            echo "})";
            echo "</script>";
        }
        else if (strcmp($topic, "football")==0)
        {
            echo "<script>";
            echo "$(document).ready(function(){";
            echo "$('body').css('background-image', 'url(images/football_test.jpg)');";
            echo "})";
            echo "</script>";
        }
        ?>
    </head>
    <body>
        <div class="load">
            <img src="images/loading%20(2).gif">
        </div>
        <?php
        $con=new mysqli("mysql.hostinger.in","u239826314_sp28","sagnikpaul28", "u239826314_dbtes");
        if ($con->connect_error)
        {
            die("Connection failed: ".$con->connect_error);
        }
        if (!isset($_SESSION['n']))
            $_SESSION['n']=0;
        $i=$_SESSION['n'];
        if ($i==0)
        {
            header('location: selectQuiz.php');
        }
        else if ($i>10)
            header('location:leaderboard.php');
        else
        {
            $name=$_SESSION['name'];
            $sql="SELECT * FROM ".$name." WHERE id='$i'";
            $result= mysqli_query($con, $sql) or die(mysqli_error($con));
            $row = mysqli_fetch_array($result);
            $r=$row['quesno'];
            if (strcmp($_SESSION['topic'], "got")==0){
                $sql= "SELECT * FROM got_questions WHERE id='$r'";
            }
            else if (strcmp($_SESSION['topic'], "dc")==0){
                $sql= "SELECT * FROM dc_questions WHERE id='$r'";
            }
            else if (strcmp($_SESSION['topic'], "marvel")==0){
                $sql= "SELECT * FROM marvel_questions WHERE id='$r'";
            }
            else if (strcmp($_SESSION['topic'], "football")==0){
                $sql= "SELECT * FROM football_questions WHERE id='$r'";
            }
                
            $result= mysqli_query($con, $sql) or die(mysqli_error($con));
            $row = mysqli_fetch_array($result);
            $q=$row['ques'];
            $opta=$row['opt1'];
            $optb=$row['opt2'];
            $optc=$row['opt3'];
            $optd=$row['opt4'];
        }
        ?>
        <br>
        <div id="layer">
            <h4 align="right" id="timer">Time remaining: 10 secs</h4>
            <h3>
                <?php
                echo "Question No ".$i;
                ?>
            </h3>
            <hr>
            <h3>
                <?php
                echo $q;
                ?> 
            </h3>
            <hr>
            <form action="testscript.php" method="post">
                <div id="opta"><input type="radio" name="choice" value=1>
                <?php
                echo $opta;
                ?>
                </div>
                <div id="optb"><input type="radio" name="choice" value=2>
                <?php
                echo $optb;
                ?>
                </div>
                <div id="optc"><input type="radio" name="choice" value=3>
                <?php
                echo $optc;
                ?>
                </div>
                <div id="optd"><input type="radio" name="choice" value=4>
                <?php
                echo $optd;
                ?>
                </div>
                <button type="submit" class="button">Submit</button>
            </form>
        </div>
    </body>
</html>