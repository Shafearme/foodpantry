<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test php</title>
</head>

<body>
<p>version 101</p>
<?php
$connection=mysqli_connect("localhost","pixelqua_tester","qxzpyr","pixelqua_phptest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


// $result = mysqli_query($connection,  "SELECT * FROM books ");

$result = mysqli_query($connection, "SELECT * FROM `books` WHERE `Genre` = 'Fantasy'");
if(!mysqli_error){
  while($row = mysqli_fetch_assoc($result)){
    // you can also use fetch_array or fetch_object if it is more practicable for you
    // print_r($row);
  }
}

echo "<h3>Books in the fantasy genre:</h3>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["id"].  $row["LastName"]. ", " . $row["FirstName"]. "-- "  .$row["Title"]."<br>";
    }
} else {
    echo "0 results";
}

$connection->close();



?>


</body>
</html>