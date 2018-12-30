<?php 
session_start();
echo "<html><body> <style>
    body{
      font-size: 25px; 
      color: black;
      
      padding: 100px 50px 75px 100px;
   }
  </style></body></html>";
if(isset($_SESSION['name'])){
$v = $_SESSION['name'];
$x = $_SESSION['from'];
$y = $_SESSION['to'];
$w = $_POST['a'];
$z = $_POST['b'];
$u = $_SESSION['date'];
$r = $_SESSION['email'];
if($w<$z )
{	 echo "<script>";
     echo "alert('No. of kids should be less than total seats');";
     echo "window.location = 'plan.php';";
     echo "</script>";
}
if($w == 0 )
{  echo "<script>";
  echo "alert('Total no. of seats cant be zero');";
  echo "window.location = 'plan.php';";
  echo "</script>";
}
else
{mysql_connect("localhost","root","");
mysql_select_db("train");
$q1 = mysql_query("SELECT * FROM `trainschedule` WHERE `from` = '$x' && `to` = '$y'");
$row = mysql_fetch_array($q1);
$q2 = mysql_query("SELECT `cost` FROM `trainschedule` WHERE `from` = '$x' && `to` = '$y'");
$cost=mysql_fetch_array($q2);
$q9 = $w - $z;
$q3 = $q9 * $cost['cost'];
echo "your total cost is $q3";
echo"<br>";
echo "<br><br>";
$t = $row[1];
echo" train number is $row[1]";
$q4 = mysql_query("SELECT `available` FROM `trainschedule` WHERE `trainnumber` = $t");
$available=mysql_fetch_array($q4);
if($w <= $available[available])
{$query1 = mysql_query("INSERT INTO `trainsch` (trainname,trainnumber,name,`from`,`to`,
`date`,seats,email) VALUES('$row[0]','$row[1]','$v','$x','$y','$u','$w','$r')");
$e = $available[available] - $w;
$query2 = mysql_query("UPDATE `trainschedule` set `available` = '$e' WHERE `trainnumber` = '$row[1]'");
}
else
{
	 echo "<script>";
  echo "alert('No. of seats insufficient');";
  echo "window.location = 'plan.php';";
  echo "</script>";
}}
echo "<br><br>";
echo '<form method = "POST" action = "book.php"><input type = "submit" value ="home" 
style= "font-size:25px"></form>';}
else{header("location:form.php");}
?>