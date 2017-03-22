<?php
	
	session_start();
	include('dbconfig.php');
		$u_email = $_POST['email'];
		$u_pwd = $_POST['pwd'];

		

		$query = "SELECT * FROM users WHERE u_email = '$u_email' AND u_pwd = '$u_pwd'";

		$run = mysqli_query($con,$query);
		$count = mysqli_num_rows($run);
		if($count == 0){
			echo "<script>alert('Unsuccesfull Login')</script>";
			echo "<script>window.open('login.php','_self')</script>";
			
		}
		else{
			$_SESSION['email'] = $u_email;
			echo "<script>alert('Succesfull Login')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}



?>