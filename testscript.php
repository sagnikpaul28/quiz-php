<?php
$con=new mysqli("mysql.hostinger.in","u239826314_sp28","sagnikpaul28", "u239826314_dbtes");
if ($con->connect_error)
{
	die("Connection failed: ".$con->connect_error);
}
session_start();
$name=$_SESSION['name'];
$q=$_SESSION['ques'];
$i=$_SESSION['n'];
$ans=$_POST['choice'];
$sql = "UPDATE ".$name." SET ans='$ans' WHERE id='$i';"; 
mysqli_query($con, $sql) or die(mysqli_error);
$i=$i+1;
$_SESSION['n']=$i;
if ($i>10)
header("location: evaluate.php");
else
header("location: test.php");
?>