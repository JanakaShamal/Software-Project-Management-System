<?php include_once('includes/connection.php');
require('includes/User.php');
require('includes/Client.php');
require('includes/Employee.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
</head>
<body>
<h1>Log In</h1>
	<?php
	if ( (!isset($_SESSION['logged_in'])) or $_SESSION['logged_in']==false){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$queryclient = "SELECT client_id, first_name, last_name, email, contact_number, password FROM client where email = '{$email}'" ;
		$resultclient = mysqli_query($connection, $queryclient);
		$valid_email = false;
		$valid_pwd = false;
		//while($recordclient = mysqli_fetch_assoc($resultclient)){
		if(mysqli_num_rows($resultclient)==1){
			$valid_email = true;
			$recordclient = mysqli_fetch_assoc($resultclient);
			//if($['email'] == $email){
				if($recordclient['password']==sha1($password)){					
					$valid_pwd = true;
					$client_id = $recordclient['client_id'];
					$email = $recordclient['email'];
					$first_name = $recordclient['first_name'];
					$last_name = $recordclient['last_name'];
					$contact_number = $recordclient['contact_number'];
					$current_user = new Client($first_name, $last_name, $email, $contact_number);
					$current_user->set_id($client_id);
					//break;
				}
			//}
		}
		else{
			$queryemployee = "SELECT employee_id, first_name, last_name, email, contact_number, password FROM employee where email = '{$email}'";
			$resultemployee = mysqli_query($connection,$queryemployee);
			//while($recordemployee = mysqli_fetch_assoc($resultemployee) && $notlogged){
			if(mysqli_num_rows($resultemployee)==1){
				$valid_email = true;
				$recordemployee = mysqli_fetch_assoc($resultemployee);
				//if($recordemployee['email'] == $email){
				if($recordemployee['password']==sha1($password)){
					$valid_pwd = true;
					$employee_id = $recordemployee['employee_id'];
					$first_name = $recordemployee['first_name'];
					$last_name = $recordemployee['last_name'];
					$contact_number = $recordemployee['contact_number'];
					$email = $recordemployee['email'];
					$current_user = new Employee($first_name, $last_name, $email, $contact_number);
					$current_user->set_id($employee_id);
					//break;
				}
			}
			else{
				$queryadmin = "SELECT admin_id, first_name, last_name, email, contact_number, password FROM admin where email = '{$email}'";
				$resultadmin = mysqli_query($connection,$queryadmin);
				//while($recordemployee = mysqli_fetch_assoc($resultemployee) && $notlogged){
				if(mysqli_num_rows($resultadmin)==1){
					$valid_email = true;
					$recordadmin = mysqli_fetch_assoc($resultadmin);
					//if($recordemployee['email'] == $email){
					if($recordadmin['password']==sha1($password)){
						$valid_pwd = true;
						$admin_id = $recordadmin['employee_id'];
						$first_name = $recordadmin['first_name'];
						$last_name = $recordadmin['last_name'];
						$contact_number = $recordadmin['contact_number'];
						$email = $recordadmin['email'];
						$current_user = new Admin($first_name, $last_name, $email, $contact_number);
						$current_user->set_id($admin_id);
						//break;
					}
				}
			}
			/*else{
				$valid_email = false;
				//header("Location:login.php?alert=".urlencode("Invalid e-mail address"));
			}*/
			//}
		}
		//$_SESSION['password'] = sha1($password);
		$_SESSION['current_user'] = $current_user;
		if(!$valid_email){
			$_SESSION['alert']="Invalid e-mail address";
			//echo "<script> window.history.back(); </script>";
			header("Location:homepage.php");
			//header("Location:homepage.php?alert=".urlencode("Invalid e-mail address"));
		}		
		elseif(!$valid_pwd){
			$_SESSION['alert']="Invalid password";
			header("Location:homepage.php");
			//header("Location:homepage.php?alert=".urlencode("Invalid password"));
		}
		else{
			if (isset($_SESSION['current_user'])){
				$_SESSION['logged_in'] = True;
			}
			echo "<script> window.history.back(); </script>";
			//header("Location:homepage.php");
		}
	} ?>
</body>
</html>