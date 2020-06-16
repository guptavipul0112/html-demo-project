<?php

require_once"try.html";

$name=$_POST['name'];
$RollNo=$_POST['RollNo'];

$servername = "localhost";
$username = "id10292872_cypher";
$password = "VinayGupta@123";
$database = "id10292872_demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("INSERT INTO demo VALUES (?, ?)");
$stmt->bind_param("ss", $name,$RollNo);
$stmt->execute();
echo "New record created successfully";


$conn->close();
$stmt->close();
?>