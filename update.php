<?php
    require_once"forget pass.html";
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
   if(isset($_POST['reset'])){
    $reset=$_POST['reset'];
    }
    if(isset($_POST['new'])){
    $new=$_POST['new'];
    }
      
      $sql = "UPDATE demo SET password = '$new' WHERE mobile = '$reset'";
      $result = mysqli_query($conn,$sql);
	echo '<script>
	window.location="signin.html";
	</script>';
?>
