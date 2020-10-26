<?php
session_start();
include("./dbconnect.php");

	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array(); 
	// call the login() function if register_btn is clicked
	if (isset($_POST['submit'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location:index.php");
	}

	// LOGIN USER
	function login(){
		global $conn, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);
		$pass=md5($password);
		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if ($username == 'qwe' && $password == 'admin')
		{
		  $_SESSION['username']='Admin';
			header("Location:login.php");
		}
		if($username !== 'admin@gmail.com' && $password !== 'admin')
			{
				$q="SELECT * FROM user where user_name='$username' && password='$pass' && type='admin'";
				$result=mysqli_query($conn,$q);
				$num=mysqli_fetch_assoc($result);
				if($num>0)
				{
				  $_SESSION['username']=$num['fname'];
				  $_SESSION['userId']=$num['id'];
				 
					header('location:admindash.php');	exit;
		}
		if($username !== 'admin@gmail.com' && $password !== 'admin')
			{
				$q="SELECT * FROM user where user_name='$username' && password='$pass' && type='accountant'";
				$result=mysqli_query($conn,$q);
				$num=mysqli_fetch_assoc($result);
				if($num>0)
				{
				  $_SESSION['username']=$num['fname'];
				  $_SESSION['userId']=$num['id'];
				 
					header('location:stock.php');	exit;
		}
	// 	else {
	// 		array_push($errors, "The password or username you entered is incorrect");
	// 		// header('location: login.php');
	// 	}
	// }
	if($username !== 'admin@gmail.com' && $password !== 'admin')
			{
				$q="SELECT * FROM user where user_name='$username' && password='$pass' && type='pharmacist'";
				$result=mysqli_query($conn,$q);
				$num=mysqli_fetch_assoc($result);
				if($num>0)
				{
				  $_SESSION['username']=$num['fname'];
				  $_SESSION['userId']=$num['id'];
				 
					header('location:stock.php');	exit;
		}
		else {
			array_push($errors, "The password or username you entered is incorrect");
			// header('location: login.php');
		}
	}}
}
	else {
			array_push($errors, "The password or username you entered is incorrect");
			// header('location: login.php');
		}
	}
	
		// attempt login if no errors on form
		/*if (count($errors) == 0) {
			$password =($password);

			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($conn, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				// print_r($logged_in_user);
				// echo "</br>";
				
				if ($logged_in_user['usertype'] == 'admin') {

					$_SESSION['username'] = $logged_in_user['username'];
					$_SESSION['success']  = "You are now logged in";
					// echo "nayan - ".$_SESSION['username'];
					header('location: admindash.php');		  
				}else{
					$_SESSION['userename'] = $logged_in_user['username'];
					$_SESSION['success']  = "You are now logged in";

					header('location: admindash.php');
				}
			}
			else {
				array_push($errors, "The password or username you entered is incorrect");
				// header('location: login.php');
			}*/
	
	function isLoggedIn()
	{
		if (isset($_SESSION['username'])) {
			return true;
		}else{
			return false;
		}
	}

	/*function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}*/

	// escape string
	function e($val){
		global $conn;
		return mysqli_real_escape_string($conn, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="h6">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}
?>