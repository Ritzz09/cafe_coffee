<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe_coffee";

$name=$_POST['name'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile_no'];
$message=$_POST['message'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO reserve (name,email,mobile_no,message) VALUES('$name','$email','$mobile_no','$message')";

// Check connection
if ($conn->query($sql) === TRUE) {
  echo "Table Reserved Successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>