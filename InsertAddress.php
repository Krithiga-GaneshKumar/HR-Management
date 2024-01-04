<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrmanagement";

// Get form data

$id=$_POST["a1"];
$door = $_POST["a2"];
$area= $_POST["a3"];
$street = $_POST["a4"];
$city=$_POST["a5"];
$state=$_POST["a6"];
$pincode=$_POST["a7"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert data into table
$sql = "INSERT INTO address (eid,door,street,area,city,pincode,state) VALUES ('$id','$door','$area','$street','$city','$pincode','$state')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Data inserted successfully</h1>";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>
