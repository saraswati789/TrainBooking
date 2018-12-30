<?php
session_start();
if(isset($_SESSION['name'])){
$name = $_SESSION['name'];
  echo '<html><head>
    <style>
    body{
      font-size: 25px; 
      color: black;
     
     padding: 100px 50px 75px 100px;
   }
  </style></head><body><center>';
  echo '</body></html>';
	mysql_connect("localhost","root","");
	mysql_select_db("train");
 $selectoption1 = $_POST['FROM_OPTIONS'];
 $selectoption2 = $_POST['TO_OPTIONS'];
 $date =date("Y-m-d");
 $new=date('Y-m-d',strtotime($_POST['date']));
if($selectoption1 == $selectoption2||$new <= $date )
{   echo "<script>";
  echo "alert('Please fill all the required fields correctly');";
  echo "window.location = 'book.php';";
  echo "</script>";
}
 echo "welcome  ".$name."";
   echo "<br><br>";
 $query1 = "SELECT * FROM `trainschedule` WHERE `from` = '$selectoption1' && `to` = '$selectoption2'";
 $result = mysql_query($query1);
 while($row = mysql_fetch_array($result))
 {
 	 echo "<table border='5' width='50' align = 'center'>";
 	 	echo "<tr>";
  echo "<th>TRAIN NAME</th>";
  echo "<th>TRAIN NUMBER</th>";
  echo "<th>FROM</th>";
  echo "<th>TO</th>";
  echo "<th>DAY</th>";
  echo "<th>DEP TIME</th>";
  echo "<th>ARR TIME</th>";
  echo "<th>AVAILABLE</th>";
  echo "<th>COST</th>";
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
 echo '<html><body><center>';
  echo "<br><br><br>";
 echo "<a href = 'plan.php'>BOOK HERE</a>";
 echo '</body></html>';
 $_SESSION['from'] = $selectoption1;
 $_SESSION['to'] = $selectoption2;
 $_SESSION['date'] = $date;
echo "<br><br><br>";
echo '<html><body><center>';
echo '<form method = "POST" action = "book.php" ><input type = "submit" value ="home"  style = "font-size :25px"></form>';
echo '</body></html>';
}
else{
  header("location:form.php");}
?>