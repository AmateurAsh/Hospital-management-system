<!DOCTYPE html>

<html>
<head> 
	<title>Staffs Table</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 80%
			color: #d96459;
			font-family: monospace;
			font-size: 20px;
			text-align: left;
		}

	</style>
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Contact</th>
		<th>Sex</th>
		<th>Salary</th>
		<th>Address</th>
		<th>Country</th>
	</tr>

	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cseproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = " SELECT * from staffs";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
	while ($row = $result-> fetch_assoc()){
		echo "<tr><td>". $row["sid"] . "</td><td>". $row["Firstname"] ."</td><td>". $row["Lastname"] ."</td><td>". $row["contact"] ."</td><td>". $row["Sex"] ."</td><td>". $row["Salary"] ."</td><td>". $row["Adress"] ."</td><td>". $row["Country"] ."</td></tr>";
	}
	echo "</table>";
}
else{
	$conn-> close();
}

	?>



</table>
</body>
</html>
