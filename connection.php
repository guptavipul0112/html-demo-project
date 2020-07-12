<?php

require_once"index.html";

$uname=$_POST['uname'];
$pass=$_POST['pass'];
$mobile=$_POST['mobile'];


$servername = "localhost";
$username = "id14055858_localhost";
$password = "Vip@8600684381";
$database = "id14055858_login_form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("INSERT INTO demo VALUES (?, ?, ?)");
$stmt->bind_param("sss", $uname,$pass,$mobile);
$stmt->execute();
echo '<script>
    window.location="signin.html";
    </script>';


$conn->close();
$stmt->close();
?>
