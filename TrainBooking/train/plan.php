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
  <body><center>
    <form action="planning.php" method="post">
      enter the no. of seats you want to book :<br>
      <input type = "number" size = "30" name = "a" style="font-size:25px"><br>
      enter the no. of kids :<br>
      <input type = "number" size = "30" name = "b" style="font-size:25px"><br><br><br>
      <input type = "submit" value="Book Now" style="font-size:25px"><br>
      

    </form>
    <form method = "POST" action = "book.php" >
      <input type = "submit" value ="BACK" style = "font-size: 25px">
    </form>

  </body>
</html>
