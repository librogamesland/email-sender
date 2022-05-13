<?php

$servername = 'localhost';

$username = 'librogame_test';
$password = 'MYPASSWORD';

$database = "librogame_db";


// Create connection
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT email FROM jos_users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 echo $row["email"]. "<br>";
 }
} else {
 echo "0 results";
}
?>