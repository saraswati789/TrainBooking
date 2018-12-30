<?php
session_start();
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
mysql_connect("localhost","root","");
mysql_select_db("train");
$query="UPDATE net set phone='$z' WHERE name= '$x' AND password='$y'";
mysql_query($query);
echo "updated";


 ?>
