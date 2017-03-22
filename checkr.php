<?php
	
	include('dbconfig.php');
		$u_name = $_POST['u_name'];
		$l_name = $_POST['l_name'];
		$u_email = $_POST['u_email'];
		$u_pwd = $_POST['u_pwd'];
		$u_address = $_POST['u_address'];
		$u_pin = $_POST['u_pin'];
		$u_contact = $_POST['u_contact'];

		

		$check_cart = "SELECT * FROM users where u_email = '$u_email'";

		$run_check = mysqli_query($con , $check_cart);



		if(mysqli_num_rows($run_check)>=1)
						{
							echo "<script>alert('Sorry This email is already Registered')</script>";
							echo "<script>window.open('register.php','_self')</script>";
						}
						else
						{
							$insert = "INSERT INTO users (u_name,l_name,u_email,u_pwd,u_address,u_pin,u_contact) VALUES ('$u_name','$l_name','$u_email','$u_pwd','u_address','u_pin','u_contact')";
							$run = mysqli_query($con,$insert);

							echo "<script>alert('Succesfull Registered')</script>";
							echo "<script>window.open('login.php','_self')</script>";
						}

		



?>