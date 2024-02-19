<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "Connection success";
}else echo "no connection";

$db = mysqli_select_db($con,'whms');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "select * from adminlogin where user = '$username' and pass = '$password'";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			?>
			<script>
				alert("Login Succesful");
			</script>
		<?php
			//echo "Login Succesful";
			$_SESSION['user'] = $username;
			header('location:billing.php');
		}else{
			?>
			<script>
				alert("Login failed");
			</script>
		<?php
			echo "login failed";
			header('location:adminlogin.php');
			

		
	}
}

?>