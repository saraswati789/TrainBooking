<?php
session_start();
if(isset($_SESSION['name'])){

$x=$_SESSION['name'];
$y=$_SESSION['password'];
$z=$_SESSION['email'];
mysql_connect("localhost","root","");
mysql_select_db("train");
$query="SELECT * FROM `trainsch` WHERE `name` ='$x' && `email`='$z'";
$result=mysql_query($query);
echo'<html><body align="center">';
while($row=mysql_fetch_array($result))
{
  echo "<table border='5' align='center'>";
  echo "<tr>";
  echo "<th>TRAIN NAME</th>";
  echo "<th>TRAIN NO.</th>";
  echo "<th>NAME</th>";
  echo "<th>FROM</th>";
  echo "<th>TO</th>";
  echo "<th>DATE</th>";
  echo "<th>SEATS</th>";
  echo "<th>PNR</th>";
  echo "<th>E-MAIL</th>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
  echo "<td>".$row[4]."</td>";
  echo "<td>".$row[5]."</td>";
  echo "<td>".$row[6]."</td>";
  echo "<td>".$row[7]."</td>";
  echo "<td>".$row[8]."</td>";
  echo "</tr>";
  echo "</table>";
}
echo'</body></html>';}
else{
	header("location:form.php");
}
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    body{
      font-size: 25px; 
      color: black;
     
      padding: 100px 50px 75px 100px;
   }
  </style>
  </head>
  <body align ="center">
    <form action="cancellation.php" method="POST">
      Enter your train number:<br>
      <input type = "text" size = "30" name = "a" style="font-size:25px"><br>
      Enter your PNR number:<br>
      <input type = "text" size = "30" name = "b" style="font-size:25px"><br>
      <input type="submit" value = "cancel" style="font-size:25px"><br>
      </form>
 </body>
</html>
<?php
 echo'
<form method="POST" action="logout.php">
<input type="submit" value="logout" style="font-size:25px">
</form>';
echo "<form method = 'POST' action ='book.php'><input type = 'submit' value ='home' style='font-size:25px'></form>";
?>
