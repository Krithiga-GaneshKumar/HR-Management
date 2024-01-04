<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrmanagement";

// Get form data

$id=$_POST["t1"];
$name = $_POST["t2"];
$doj= $_POST["t3"];
$email = $_POST["t4"];
$phone=$_POST["t5"];
$dob=$_POST["t6"];
$role=$_POST["t7"];
$last=$_POST["t20"];
$profile=$_POST["t50"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert data into table
$sql = "INSERT INTO employee (eid,f_name,l_name,role,dob,doj,phone,email,profile) VALUES ('$id','$name','$last','$role', '$dob','$doj','$phone','$email','$profile')";

if ($conn->query($sql) === TRUE) {
   echo" <script>
alert(' Sucessfully Inserted!');
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
