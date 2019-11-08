<?php 
include_once('includes/connection.php');
require('includes/User.php');
require('includes/Client.php');
require('includes/Employee.php');
session_start();
if (isset($_SESSION['current_user']) && $_SESSION['logged_in']==false) {
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Email Verification</title>
	</head>
	<body>
		<h1>Email Verification</h1>
		<p> <h3> Click on "Send Verification Code" to receive the verification code to your email </h3>
		<?php 
			$current_user = $_SESSION['current_user']; 
			echo "Your email address: " . $current_user->get_email(); ?>
			<br>
			<form action="send_mail.php" method="POST">
				<button type="submit" name="send_code"> Send Verification Code </button>
			</form></p>	

			<?php 
			//if (mail($to, "Email Verification by DocuLancer", $msg ,$header)){
				//echo "email sent successfully!";
			//}
			//else {
			//	echo "email sending failed";
			//}
		?>
		<br>
		<form action="emailverificationprocess.php" method="post">
			Verification Code <input type="text" name="veri_code" id="" required>
			<!--<input type="hidden" name="rand_num" value="<?php //echo $rand_num; ?>">
			<!--<input type="hidden" name="email" value="<?php //echo $email; ?>">-->	
			<div class="veributton">
			<a href=""><button type="submit" name="verify"> Verify </button></a>
			</div>
		</form>

		<?php if (isset($_SESSION["alert"])): ?>
			<script type="text/javascript">
				alert("<?php echo ($_SESSION["alert"]); ?>");
			</script>
			<?php unset($_SESSION['alert']); ?>
		<?php endif; ?>
	</body>
	</html>
<?php
}
else{
	if (isset($_SESSION['current_user'])){
		$current_user=$_SESSION['current_user'];
		if (get_class($current_user)=="Client"){
			//echo "<script> window.history.go(-3); </script>";
			header("Location: home.php");
		}
	}
	//header("Location: homepage.php");
}
?>