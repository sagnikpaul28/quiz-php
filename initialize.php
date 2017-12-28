<?php
session_start();
$con=new mysqli("mysql.hostinger.in","u239826314_sp28","sagnikpaul28", "u239826314_dbtes");
if ($con->connect_error)
{
	die("Connection failed: ".$con->connect_error);
}
$topic=$_POST['quiz'];
$name=$_POST['name'];
$name=strip_tags($name);
$name1=mysqli_real_escape_string($con, $name);
$name= strtok($name1, " ");
$sql="CREATE TABLE ".$name."(id INT AUTO_INCREMENT PRIMARY KEY, quesno INT, ans INT);";
mysqli_query($con, $sql) or die("Table Not Created:".mysqli_error($con));
for ($i=1;$i<=10;$i++)
{
$r = rand(1, 20);
$sql="SELECT * FROM ".$name." WHERE quesno='$r';";
$result= mysqli_query($con, $sql) or die("Error in Selection:".mysqli_error($con));
$row = mysqli_fetch_array($result);
if ($row)
{
	$i--;
	continue;
}
else
{
$sql = "INSERT INTO ".$name." (quesno, ans) VALUES('$r', 0);";
mysqli_query($con, $sql) or die("Error in Selection:".mysqli_error($con));
}
}
$_SESSION['name1']=$name1;
$_SESSION['name']=$name;
$_SESSION['topic']=$topic;
$_SESSION['n']=1;
header("location:test.php");
?>