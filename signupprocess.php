<?php session_start();
include_once('includes/connection.php');
require('includes/User.php');
require('includes/Client.php');
require('includes/Employee.php');
require('includes/Admin.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
</head>
<body>
	<?php
	if (isset($_POST['submit']) and $_SESSION['logged_in']==false) {
		# code...
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$contact_no = $_POST['contact_no'];
		$pssword = sha1($_POST['psw']);
		//$repassword = sha1($_POST['repassword']);
		$psw = $_POST["psw"];
		$repsw = $_POST["repsw"];
		$pattern = '/^(?=.*[!@#$%^&*+=\/><.,:;])(?=.*[0-9])(?=.*[A-Z]).{5,}$/';

		$queryclient = "SELECT email FROM client WHERE email = '{$email}'";
		$resultclient = mysqli_query($connection, $queryclient);

		$queryemployee = "SELECT email FROM employee where email = '{$email}'";
		$resultemployee = mysqli_query($connection,$queryemployee);

		$queryadmin = "SELECT email FROM admin where email = '{$email}'";
		$resultadmin = mysqli_query($connection,$queryadmin);
			//while($recordemployee = mysqli_fetch_assoc($resultemployee) && $notlogged){
		if(mysqli_num_rows($resultclient)==0 && mysqli_num_rows($resultemployee)==0 && mysqli_num_rows($resultadmin)==0){

			if ($psw==$repsw && !preg_match('/\s/',$psw)){
				if (preg_match($pattern, $psw)){
					/*$query = "INSERT INTO client (first_name, last_name, email, contact_number, password) VALUES('{$first_name}', '{$last_name}', '{$email}', {$contact_number}, '{$password}')";
		
					mysqli_query($connection,$query);*/
					$current_user = new Client($firstname, $lastname, $email, $contact_no);
					$_SESSION['current_user'] = $current_user;
					$_SESSION['pssword'] = $pssword;
					header("Location:emailverification.php");
					// Method to go to next page - email verification page
				}
				else{
					$error = "Your Password should contain atleast a symbol, a digit and a block letter. Should have 5 or more characters without whitespaces.";			
					$_SESSION['alert']=$error; 
					echo "<script> window.history.back(); </script>";
					//header("Location:newclient.php");
					//header("Location:newclient.php?alert=".urlencode($error));
				}
			}
			else{
				$error ="Please input the same password in both places.";
				$_SESSION['alert']=$error;
				echo "<script> window.history.back(); </script>";
				//header("Location:newclient.php");
				//header("Location:newclient.php?alert=".urlencode($error));
			}
			/*if($password==$repassword){
				$query = "INSERT INTO employee (first_name, last_name, email, contact_number, password) VALUES('{$first_name}', '{$last_name}', '{$email}', {$contact_number}, '{$password}')";
		
			mysqli_query($connection,$query);
		
			header("Location:homepage.php?first_name={$first_name}&last_name={$last_name}");
			}
			else{
				header("Location:newemployee.php");
			}*/
		}
		else{
			$error ="There's an account created with this email address. Use a different email or login with your existing account.";
			$_SESSION['alert']=$error;
			echo "<script> window.history.back(); </script>";
			//header("Location:newclient.php");
			//header("Location:newclient.php?alert=".urlencode($error));
		}
	}
	else{
		header("Location: home.php");
	}
	?>
</body>
<html>