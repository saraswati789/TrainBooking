<?php
session_start();
if(isset($_SESSION['name'])){
$x = $_POST['a'];
$y = $_POST['b'];
mysql_connect("localhost","root","");
mysql_select_db("train");
$q1 = mysql_query("SELECT `seats` FROM `trainsch` WHERE `pnr` ='$y'");
$q2 = mysql_query("SELECT `available` FROM `trainschedule` WHERE `trainnumber` = '$x'");
$seats=mysql_fetch_array($q1);
$available=mysql_fetch_array($q2);
$total=$seats[seats] + $available[available];
$q4 = mysql_query("UPDATE `trainschedule` set `available` = '$total' WHERE `trainnumber` = '$x'");
$query1 = mysql_query("DELETE  FROM `trainsch` WHERE  `pnr` = '$y'");
echo"<script>";
echo"alert('your bookings are cancelled');";
echo"</script>";
header("location:book.php");
}
else{
	header("location:form.php");
}
?>