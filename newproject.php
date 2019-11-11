<?php 
include_once 'includes/connection.php';
require 'includes/User.php';
require 'includes/Client.php';
require 'includes/Admin.php';
require 'includes/Employee.php';
session_start();
//$current_user = $_SESSION['current_user'];
//$id= $current_user->get_id();
 ?>
 
<!DOCTYPE HTML>
<html>

	<head>
		<title>CodeLab Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://kit.fontawesome.com/d977be036d.js" crossorigin="anonymous"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">CodeLab</a>
					<nav id="nav">
						<a href="index.php"><i class="fas fa-home"></i> Home</a>
						<a href="projects.php"><i class="fas fa-project-diagram"></i> Projects</a>
						<a href="contact.php"><i class="fas fa-address-card"></i> Contact Us</a>
						<a href="myaccount.php"><i class="fas fa-user-circle" style="font-size: 20px;"></i></a>
						<a href="logout.php"><i class="fas fa-sign-out-alt" style="font-size: 20px;"></i></a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		<!-- Footer -->
			<section id="footer">
				<div class="inner">
					<header>
						<h2>Place New Project</h2>
					</header>
					<form method="post" action="addp.php">
						<div class="field">
							<label for="title">Title</label>
							<input type="text" name="title" id="title" value="" />
						</div>
						<div class="field half first">
							<label for="status">Project Status</label>
							<input type="text" name="status" id="status" value="New" readonly />
						</div>
						<div class="field half">
							<label for="progress">Progress</label>
							<input type="text" name="progress" id="progress" value="0" readonly />
						</div>
						<div class="field">
							<label for="category">Category/Domain</label>
							<input type="text" name="category" id="category" value="" />
						</div>
						<div class="field">
							<label for="keywords">Keywords</label>
							<input type="text" name="keywords" id="keywords" value="" />
						</div>
						<div class="field">
							<label for="email">Documents</label>
							<input type="text" name="documents" id="documents" value="Essential/ Place Documentation Link or Attatchment" required="" />
						</div>
						<div class="field">
							<label for="email">Location</label>
							<input type="text" name="location" id="location" value="New" readonly/>
						</div>
						<div class="field">
							<label for="email">Due_Date</label>
							<input type="text" name="due_date" id="due_date" value="" required="" />
						</div>
						<ul class="actions">
							<li><input type="submit" value="Place Order" class="alt" /></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
