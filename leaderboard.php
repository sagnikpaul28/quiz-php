<!DOCTYPE html>
<html>
    <head>
        <title>Leaderboard</title>
        <link rel="shortcut icon" href="images/favicon.png" type="image/gif">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/leaderboard.css" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Share" rel="stylesheet">
        <script src="js/jquery.scrollify.js"></script>
        <script type="text/javascript">
            c=1;
            $(function() {
                $.scrollify({
                    section : "section",
                });
            });
        </script>
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
        $con=new mysqli("mysql.hostinger.in","u239826314_sp28","sagnikpaul28", "u239826314_dbtes");
        if ($con->connect_error)
        {
            die(mysqli_error($con));
        }
        session_start();
        if (isset($_SESSION['name']))
        {
            $name = $_SESSION['name'];
            $sql = "DROP TABLE IF EXISTS ".$name.";";
            $result = (mysqli_query($con, $sql)) or die(mysqli_error($con));
        }
        unset($_SESSION['name']);
        ?>
    </head>
    <body>
        <div class="load">
            <img src="images/loading%20(2).gif">
        </div>
        <center>
            <section id="dc">
            <div class="panel-body" style="background-color: rgba(0, 0, 0, 0.7);height: 100%;">
                <h2 style="color:aqua;font-family: 'Share', cursive;font-size: 6vmin;">DC Leaderboard</h2>
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-1">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin;">No</h3>
                    </div>
                    <div class="col-xs-5">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin">Name</h3>
                    </div>
                    <div class="col-xs-3">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin">Score</h3>
                    </div>
                </div>
                <?php
                $con=new mysqli("mysql.hostinger.in","u239826314_sp28","sagnikpaul28", "u239826314_dbtes");
                if ($con->connect_error)
                {
                    die(mysql_error($con));
                }
                $sql="SELECT * FROM dc_score ORDER BY score DESC";
                $result=mysqli_query($con, $sql) or die("Error in Selection:".mysqli_error($con));
                $row = mysqli_fetch_array($result);
                $i=1;
                while ($row)
                {
                    echo '<div class="row">';
                    echo '<div class="col-xs-2 col-xs-offset-1"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;font-size: 4.5vmin;">'.$i.'</h4></div>';
                    echo '<div class="col-xs-5"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;">'.$row["name"].'</h4></div>';
                    echo '<div class="col-xs-3"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;">'.$row["score"].'</h4></div>';
                    echo "</div>";
                    $row=mysqli_fetch_array($result);
                    $i++;
                }
                ?>
            </div>
            </section>
            <section id="marvel">
            <div class="panel-body" style="background-color: rgba(0, 0, 0, 0.7);height: 100%;">
                <h2 style="color:aqua;font-family: 'Share', cursive;font-size: 6vmin;">Marvel Leaderboard</h2>
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-1">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin;">No</h3>
                    </div>
                    <div class="col-xs-5">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin">Name</h3>
                    </div>
                    <div class="col-xs-3">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin">Score</h3>
                    </div>
                </div>
                <?php
                $con=new mysqli("mysql.hostinger.in","u239826314_sp28","sagnikpaul28", "u239826314_dbtes");
                if ($con->connect_error)
                {
                    die(mysql_error($con));
                }
                $sql="SELECT * FROM marvel_score ORDER BY score DESC";
                $result=mysqli_query($con, $sql) or die("Error in Selection:".mysqli_error($con));
                $row = mysqli_fetch_array($result);
                $i=1;
                while ($row)
                {
                    echo '<div class="row">';
                    echo '<div class="col-xs-2 col-xs-offset-1"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;font-size: 4.5vmin;">'.$i.'</h4></div>';
                    echo '<div class="col-xs-5"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;">'.$row["name"].'</h4></div>';
                    echo '<div class="col-xs-3"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;">'.$row["score"].'</h4></div>';
                    echo "</div>";
                    $row=mysqli_fetch_array($result);
                    $i++;
                }
                ?>
            </div>
            </section>
            <section id="got">
            <div class="panel-body" style="background-color: rgba(0, 0, 0, 0.7);height: 100%;">
                <h2 style="color:aqua;font-family: 'Share', cursive;font-size: 6vmin;">Game of Thrones Leaderboard</h2>
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-1">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin;">No</h3>
                    </div>
                    <div class="col-xs-5">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin">Name</h3>
                    </div>
                    <div class="col-xs-3">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin">Score</h3>
                    </div>
                </div>
                <?php
                $con=new mysqli("mysql.hostinger.in","u239826314_sp28","sagnikpaul28", "u239826314_dbtes");
                if ($con->connect_error)
                {
                    die(mysql_error($con));
                }
                $sql="SELECT * FROM got_score ORDER BY score DESC";
                $result=mysqli_query($con, $sql) or die("Error in Selection:".mysqli_error($con));
                $row = mysqli_fetch_array($result);
                $i=1;
                while ($row)
                {
                    echo '<div class="row">';
                    echo '<div class="col-xs-2 col-xs-offset-1"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;font-size: 4.5vmin;">'.$i.'</h4></div>';
                    echo '<div class="col-xs-5"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;">'.$row["name"].'</h4></div>';
                    echo '<div class="col-xs-3"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;">'.$row["score"].'</h4></div>';
                    echo "</div>";
                    $row=mysqli_fetch_array($result);
                    $i++;
                }
                ?>
            </div>
            </section>
            <section id = "football">
            <div class="panel-body" style="background-color: rgba(0, 0, 0, 0.7);height: 100%;">
                <h2 style="color:aqua;font-family: 'Share', cursive;font-size: 6vmin;">Football Leaderboard</h2>
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-1">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin;">No</h3>
                    </div>
                    <div class="col-xs-5">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin">Name</h3>
                    </div>
                    <div class="col-xs-3">
                        <h3 style="color:aqua;font-family: 'Share', cursive;font-size: 5vmin">Score</h3>
                    </div>
                </div>
                <?php
                $con=new mysqli("mysql.hostinger.in","u239826314_sp28","sagnikpaul28", "u239826314_dbtes");
                if ($con->connect_error)
                {
                    die(mysql_error($con));
                }
                $sql="SELECT * FROM football_score ORDER BY score DESC";
                $result=mysqli_query($con, $sql) or die("Error in Selection:".mysqli_error($con));
                $row = mysqli_fetch_array($result);
                $i=1;
                while ($row)
                {
                    echo '<div class="row">';
                    echo '<div class="col-xs-2 col-xs-offset-1"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;font-size: 4.5vmin;">'.$i.'</h4></div>';
                    echo '<div class="col-xs-5"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;">'.$row["name"].'</h4></div>';
                    echo '<div class="col-xs-3"><h4 style="color:aqua;font-size: 3.5vmin;font-family: "Share", cursive;">'.$row["score"].'</h4></div>';
                    echo "</div>";
                    $row=mysqli_fetch_array($result);
                    $i++;
                }
                ?>
            </div>
            </section>
        </center>
    </body>
</html>
