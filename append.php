<html>
<head>
<title>Chicken DB</title>
</head>
<body>
<a href="index.html"><p>Go Back Home</p></a>
<?php
require_once('connect.php');
$eggs = $_POST["eggs"];
$date = $_POST["date"];
$initials = $_POST["initials"];
require_once('connect.php');
$query = "INSERT INTO daily (eggs, date, initials) VALUES ($eggs,'$date','$initials');";
echo $query;
if (mysqli_query($dbc, $query)) {
    echo "<h1>New record created successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
}
?>
<form action="append.php" method="post">
<br>Add daily chicken gatherings to database</br>
<p>Number of eggs collected
<input type="text" name="eggs" size="30" value="# of eggs" />
</p>
<p>Date of eggs
<input type="text" name="date" size="30" value="31/12/17" />
</p>
<p>Initials of gatherer
<input type="text" name="initials" size="30" value="Initials" />
</p>
<p>
<input type="submit" name="submit" value="Submit" />
</p>
</form>
<a href="index.html"><p>Go Back Home</p></a>
</body>
</html>
