<?php
$v = $_POST['a'];
$w = $_POST['b'];
$x = $_POST['c'];
$y = $_POST['d'];
$z = $_POST['e'];
if($v ==""||$w ==""||$x ==""||$y == ""||$z =="")
{
  echo "<script>";
  echo "alert('Enter all the required fields');";
  echo "window.location = 'form.php';";
  echo "</script>";}
else
{
  mysql_connect("localhost","root","");
  mysql_select_db("train");
  $query1 = "SELECT * FROM `userdetail` WHERE `name` ='$v' && `email` = '$w'";
  $result = mysql_query($query1);
  $con = mysql_num_rows($result);
  if($con != 0)
  {
  echo "<script>";
  echo "alert('user already exist');";
  echo "window.location = 'form.php';";
  echo "</script>"; }
  else {
  $query = "INSERT INTO `userdetail` VALUES ('$v','$w','$x','$y','$z')";
  mysql_query($query);
  echo "<script>";
  echo "alert('you have successfully registered.please login');";
  echo "window.location = 'form.php';";
  echo "</script>";
}}?>
