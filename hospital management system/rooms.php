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
  $pID = test_input($_POST["pID"]);
  $Available = test_input($_POST["Available"]);
  $Room_type = test_input($_POST["Room_type"]);


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "INSERT INTO rooms(Room_type,Available,pID)
VALUES ('$Room_type', '$Available', '$pID')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 