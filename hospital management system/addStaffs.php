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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Firstname = test_input($_POST["Firstname"]);
  $Lastname = test_input($_POST["Lastname"]);
  $Contact = test_input($_POST["Contact"]);
  $Gender = test_input($_POST["gender"]);
  $Salary = test_input($_POST["salary"]);
  $Adress = test_input($_POST["adress"]);
  $Country = test_input($_POST["country"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "INSERT INTO staffs(Firstname,Lastname,contact,Sex,Salary,Adress,Country)
VALUES ('$Firstname', '$Lastname', '$Contact', '$Gender', '$Salary', '$Adress', '$Country')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 