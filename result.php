<title>Results</title>
<?php

$connection=mysqli_connect("localhost","pixelqua_tester","qxzpyr","pixelqua_phptest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if($_REQUEST['submit']){
$LastName = $_POST['LastName'];

echo "You searched for '$LastName'<br>";

if(empty($LastName)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM `books` WHERE `LastName` LIKE '%$LastName%'";
	
	echo "( <font size=1>". $sele . ")</font>";
	$result = mysqli_query($connection, $sele);//////////////

	}

}
if(!mysqli_error){
  while($row = mysqli_fetch_assoc($result)){
    // you can also use fetch_array or fetch_object if it is more practicable for you
    // print_r($row);
  }
}
////////////////////
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "<p>". $row["id"].  $row["LastName"]. ", " . $row["FirstName"]. "-- <i>"  .$row["Title"]. "</i>-- " . $row["Genre"]."<br>";
    }
} else {
    echo "0 results";
}
////////////////////




mysqli_close($connection);


?>
