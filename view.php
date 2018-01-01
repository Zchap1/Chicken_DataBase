<html>
<title>daily</title>
</html>
<a href="index.html"><p>Go Back Home</p></a>
<?php
require_once("connect.php");
$query = "SELECT eggs, date, initials FROM daily;"; #Chicken DataBase btw
$response = mysqli_query($dbc,$query);
if ($response){
  echo ' .
  <table align = "left"
  cellspacing = "5" cellpadding = "8">
  <tr><td align="left"><b>Eggs gathered</b></td>
  <td align="left"><b>Date</b></td>
  <td align="left"><b>Initials</b></td></tr>
  ';
while($row=mysqli_fetch_array($response)){
  echo '<tr><td align = "left">' .
  $row['eggs'] . '</td><td align = "left">' .
  $row['date'] . '</td><td align = "left">' .
  $row['initials'] . '</td><td align = "left">';
}


}


 ?>
