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
  $Age = test_input($_POST["age"]);
  $Contact = test_input($_POST["Contact"]);
  $Gender = test_input($_POST["gender"]);
  $Disease = test_input($_POST["disease"]);
  $Adress = test_input($_POST["adress"]);
  $Country = test_input($_POST["country"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "INSERT INTO patients(Firstname,Lastname,Age,contact,Sex,Disease,Adress,Country)
VALUES ('$Firstname', '$Lastname', '$Age','$Contact', '$Gender', '$Disease', '$Adress', '$Country')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 