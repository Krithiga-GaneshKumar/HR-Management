
<?php

// Get form data

$id=$_POST["t11"];

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

$sql = "DELETE FROM employee WHERE eid='$id'";



// SQL query to insert data into table

if ($conn->query($sql) === TRUE) {
    echo" <script>
 alert(' Sucessfully Deleted!');
 </script>
 <script>window.open('intro.php','_self')</script>";
 } else {
     echo"
     <script>
     alert(' Error!');
     </script>";
 }

// Close connection
$conn->close();
?>
