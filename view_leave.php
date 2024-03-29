
<!DOCTYPE html>
<html>
<head>
	<title>Leave Details</title>
	<style>
		body {
           
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.5;
			color: #333;
		}

        table {
			border-collapse: collapse;
			margin: 20px auto;
		        background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
		}

		table th, table td {
			padding: 8px;
			border: 1px solid black;
		}

		table th {
            background-color: #f24970;
			font-weight: bold;
			color: white;
		}

		table tr:nth-child(even) {
            background-color: #f5f5f5;
          
		}

		table tr:hover {
			background-color: #ddd;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			color: #333;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
            background-color: #f0e9a2;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
			border-radius: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Leave Details</h1>
		<table>
			<thead>
				<tr>
					<th>Employee ID</th>
					<th>Reason</th>
					<th>No.of Days</th>
					<th>Status</th>
                    <th>Remaining Days</th>
					<th>Approval</th>
				</tr>
			</thead>
			<tbody>
				<?php
					// Database connection details
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

					// SQL query to fetch data from the table
					$sql = "SELECT * FROM vacation where status='no'";

					// Execute the query and get the result set
					$result = $conn->query($sql);

					// Loop through the result set and display the data in the table
					if ($result->num_rows > 0) {
					    while($row = $result->fetch_assoc()) {
					        echo "<tr>";
					        echo "<td>" . $row["eid"] . "</td>";
					        echo "<td>" . $row["reason"] . "</td>";
					        echo "<td>" . $row["days"] . "</td>";
					        echo "<td>" . $row["remaining"] . "</td>";
                            echo "<td>" . $row["status"] . "</td>";
                            echo "<td> <a href='leave_update.php'>Approve</a> </td>";
					        echo "</tr>";
					    }
					} else {
					    echo "0 results";
					}

					// Close the database connection
					$conn->close();
				?>
			</tbody>
		</table>
	</div>
</body>
</html>


