<?php

// Get form data
$id = $_POST["t11"];
$pay = intval($_POST["t12"]);

$da = 0.1 * $pay;
$hra = 0.08 * $pay;
$pf = 0.04 * $pay;

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrmanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = "SELECT * FROM salary where eid='$id'";
$result = $conn->query($stmt);
if ($result->num_rows > 0) {
    $sql = "Update salary set da='$da',hra='$hra',pf='$pf',basic='$pay' where eid='$id'";
} else {
    $sql = "INSERT INTO salary (eid,da,hra,pf,basic) VALUES ('$id','$da','$hra', '$pf','$pay')";
}

// SQL query to insert data into table
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('updating data')</script>";
} else {
    echo "<script>alert('Error updating data')</script>" . $conn->error;
}

// Close connection
$conn->close();
?>
