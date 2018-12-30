<?php
session_start();
$a = $_POST['x'];
$b = $_POST['y'];
$c = $_POST['z'];
if($a ==""||$b == "")
{
  echo "<script>";
  echo "alert('Enter all the required fields');";
  echo "window.location = 'form.php';";
  echo "</script>";
}
else {
  mysql_connect("localhost","root","");
  mysql_select_db("train");
  $query = "SELECT * FROM `userdetail` WHERE `name` = '$a' && `password` = '$b'";
  $result = mysql_query($query);
  $con = mysql_num_rows($result);
  if($con == 0)
  {
   echo "<script>";
  echo "alert('user doesnt exist');";
  echo "window.location = 'form.php';";
  echo "</script>";
  }
  else {
    echo "Welcome";
    $_SESSION['name'] = $a;
    $_SESSION['password'] = $b;
    $_SESSION['email'] = $c;
    header("location:book.php");}}
?>
