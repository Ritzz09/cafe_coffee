<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe_coffee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $no_of_coffees = $_POST['no_of_coffees'];
    $type_of_coffee = isset($_POST['type_of_coffee']) ? $_POST['type_of_coffee'] : '';
    $address = $_POST['address'];

    // Prepare SQL query
    $sql = "INSERT INTO order_coffee (name, email, mobile_no, no_of_coffees, type_of_coffee, address)
            VALUES ('$name', '$email', '$mobile_no', '$no_of_coffees', '$type_of_coffee', '$address')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
