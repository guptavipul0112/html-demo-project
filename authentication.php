<?php
    require_once"signin.html";
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
   if(isset($_POST['uname'])){
    $uname=$_POST['uname'];
    }
    if(isset($_POST['pass'])){
    $pass=$_POST['pass'];
    }
      
      $sql = "SELECT * FROM demo WHERE Username = '$uname' and password = '$pass'";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0)
{
	echo '<script>
	window.location="form.html";
	</script>';
}
else
{
 	echo '<script>
 	alert("Wrong username or password!");
 	</script>';
}
?>
