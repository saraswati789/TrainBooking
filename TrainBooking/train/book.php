<?php
session_start();

if(isset($_SESSION['name'])){
$user = $_SESSION['name'];
mysql_connect("localhost","root","");
mysql_select_db("train");

$sql=mysql_query("select * from userdetail where name='$user' ");

echo '<html><body align="center"><table align="center" border="5" size="25px"><tbody >';
while ($row = mysql_fetch_array($sql))
    {
      
      echo '<tr>
          <th> NAME</th>
          <td>'.$row[0].'</td>
          </tr>
          <tr>
          <th>E-MAIL</th>
          <td>'.$row[1].'</td>
          </tr>
           
          <tr>
          <th>PHONE</th>
          <td>'.$row[3].'</td>
          </tr>
          <tr>
          <th>CITY</th>
          <td>'.$row[4].'</td>
          </tr>
         
          
        ';
      
      
    }
    echo '</tbody></table></body></html>';}

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
    <meta charset="utf-8">
    <title></title>
  </head>
  <body align = "center" style = "font-size:25px;" >
    
    <form method = "POST" action = "trainavailable.php">
      <!-- <label  for = "FROM" name = "a"></label> -->
      <br><br>FROM:<br>
    <select name = "FROM_OPTIONS" style = "width:200px; font-size:25px;" >
      <option value = "New Delhi">NewDelhi</option>
      <option value = "Mumbai Central">MumbaiCentral</option>
      <option value = "Lucknow">Lucknow</option>
      <option value = "Saharanpur">Saharanpur</option>
      <option value = "Gaya">Gaya</option>
    </select><br>
    TO:<br>
    <select name = "TO_OPTIONS" style = "width:200px; font-size:25px;">
      <option value = "New Delhi">NewDelhi</option>
      <option value = "Mumbai Central">MumbaiCentral</option>
      <option value = "Lucknow">Lucknow</option>
      <option value = "Saharanpur">Saharanpur</option>
      <option value = "Gaya">Gaya</option>
      
    </select><br>
    DATE:<br>
    <input type = "date" name = "date" style="font-size:20px"><br>
   


   <br><br> <input type="submit" value="search" style="font-size:25px">
  </form>
  <a href = "bookings.php">See your bookings</a><br>
<form method="POST" action="logout.php">
<input type="submit" value="logout" style="font-size:25px">
</form>
</body>
</html>
