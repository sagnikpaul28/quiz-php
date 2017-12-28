<!DOCTYPE html>
<html>
    <head>
        <title>Result</title>
        <link rel="shortcut icon" href="images/favicon.png" type="image/gif">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/evaluate.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            window.onload = function(){
                setTimeout(function(){
                    var loader = document.getElementsByClassName("load")[0];
                    loader.className="load fadeout" ;
                    setTimeout(function(){loader.style.display="none"},1000)
                },1500)
            }
        </script>
        <?php
        session_start();
        if (!isset($_SESSION['topic'])){
            header('location:selectQuiz.php');
        }
        $topic = $_SESSION['topic'];
        if (strcmp($topic, "dc")==0)
        {
            echo "<script>";
            echo "$(document).ready(function(){";
            echo "$('body').css('background-image', 'url(images/dc_eval.jpg)');";
            echo "})";
            echo "</script>";
        }
        else if (strcmp($topic, "got")==0)
        {
            echo "<script>";
            echo "$(document).ready(function(){";
            echo "$('body').css('background-image', 'url(images/got_eval.jpg)');";
            echo "})";
            echo "</script>";
        }
        else if (strcmp($topic, "marvel")==0)
        {
            echo "<script>";
            echo "$(document).ready(function(){";
            echo "$('body').css('background-image', 'url(images/marvel_eval.jpg)');";
            echo "})";
            echo "</script>";
        }
        else if (strcmp($topic, "football")==0)
        {
            echo "<script>";
            echo "$(document).ready(function(){";
            echo "$('body').css('background-image', 'url(images/football_eval.jpg)');";
            echo "})";
            echo "</script>";
        }
        ?>
    </head>
    <body>
        <div class="load">
            <img src="images/loading%20(2).gif">
        </div>
        <center>
        <div id="layer">
            <?php
            echo "<br>";
            if (!isset($_SESSION['name'])){
                header('location:selectQuiz.php');
            }
            $name=$_SESSION['name'];
            $con=new mysqli("mysql.hostinger.in","u239826314_sp28","sagnikpaul28", "u239826314_dbtes");
            if ($con->connect_error)
            {
                die(mysqli_error($con));
            }
            $i=1;
            $score=0;
            $sql = "SELECT * FROM ".$name.";";
            $result= mysqli_query($con, $sql) or die(mysqli_error($con));
            $row = mysqli_fetch_array($result);
            for ($i=1;$i<=10;$i++)
            {
                $id=$row['id'];
                $q=$row['quesno'];
                $ans=$row['ans'];
                if (strcmp($_SESSION['topic'], "got")==0){
                    $sql1= "SELECT * FROM got_questions WHERE id='$q';";
                }
                else if (strcmp($_SESSION['topic'], "dc")==0){
                    $sql1= "SELECT * FROM dc_questions WHERE id='$q';";
                }
                else if (strcmp($_SESSION['topic'], "marvel")==0){
                    $sql1= "SELECT * FROM marvel_questions WHERE id='$q';";
                }
                else if (strcmp($_SESSION['topic'], "football")==0){
                    $sql1= "SELECT * FROM football_questions WHERE id='$q';";
                }
                $result1= mysqli_query($con, $sql1) or die(mysqli_error($con));
                $row1 = mysqli_fetch_array($result1);
                $ques=$row1['ques'];
                $corans=$row1['ans'];
                if ($corans=='a')
                    $corans=$row1['opt1'];
                else if ($corans=='b')
                    $corans=$row1['opt2'];
                else if ($corans=='c')
                    $corans=$row1['opt3'];
                else
                    $corans=$row1['opt4'];
                if ($ans==1)
                    $ans=$row1['opt1'];
                else if ($ans==2)
                    $ans=$row1['opt2'];
                else if ($ans==3)
                    $ans=$row1['opt3'];
                else if ($ans==4)
                    $ans=$row1['opt4'];
                else
                    $ans=" ";
                    
                echo "<h5 style='margin-top:3vh;color:aqua'><i><b>Question No ".$i."<b></i></h5>";
                echo "<h4  style='margin-top:1vh;color:rgb(42, 182, 170)'>".$ques."</h4>";
                if ($ans==" ")
                    echo "<h5 style='margin-top:1vh;color:rgb(230, 20, 20)'>Not answered</h5>";
                else
                    echo "<h5  style='margin-top:1vh;color:rgb(190, 190, 30)'>Your answer is ".$ans."</h5>";
                echo "<h5 style='margin-top:1vh;color:rgb(20, 180, 25)'>Correct answer is ".$corans."</h5><hr>";
                
                if ($ans==$corans)
                    $score++;
                $row = mysqli_fetch_array($result);
            }
            $name1=$_SESSION['name1'];
            echo "<h3 style='font-size:4.2vh;color:rgb(12, 142, 140)'><b>Your score is ".$score."/10</b></h3>";
            if (strcmp($_SESSION['topic'], "dc")==0){
                $sql="SELECT * FROM dc_score WHERE name='$name1'";
                $results = mysqli_query($con, $sql) or die(mysqli_error($con));
                if (mysqli_num_rows($results)==0){
                    $sql="INSERT INTO dc_score (name, score) VALUES ('$name1', '$score')";
                }
            }
            else if (strcmp($_SESSION['topic'], "got")==0){
                $sql="SELECT * FROM got_score WHERE name='$name1'";
                $results = mysqli_query($con, $sql) or die(mysqli_error($con));
                if (mysqli_num_rows($results)==0){
                    $sql="INSERT INTO got_score (name, score) VALUES ('$name1', '$score')";
                }
            }
            else if (strcmp($_SESSION['topic'], "marvel")==0){
                $sql="SELECT * FROM marvel_score WHERE name='$name1'";
                $results = mysqli_query($con, $sql) or die(mysqli_error($con));
                if (mysqli_num_rows($results)==0){
                    $sql="INSERT INTO marvel_score (name, score) VALUES ('$name1', '$score')";
                }
            }
            else if (strcmp($_SESSION['topic'], "football")==0){
                $sql="SELECT * FROM football_score WHERE name='$name1'";
                $results = mysqli_query($con, $sql) or die(mysqli_error($con));
                if (mysqli_num_rows($results)==0){
                    $sql="INSERT INTO football_score (name, score) VALUES ('$name1', '$score')";
                }
            }
            $result= mysqli_query($con, $sql) or die(mysqli_error($con));
            echo "<h5 style='padding:0vh;font-size:3.5vh;margin-top:1vh;margin-bottom:2vh;color:rgb(12, 142, 140);'>To check the Leaderboard <a href='leaderboard.php'>Click here</a></h5>";
            ?>
        </div>
        </center>
    </body>
</html>