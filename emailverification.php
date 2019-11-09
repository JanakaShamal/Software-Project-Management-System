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
	
		<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!--<link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">-->
  <meta name="description" content="">
  
 	<title>Email Verification</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/styles.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
	</head>
	<body>
		<section class="carousel slide cid-rASKeBMenI" data-interval="false" id="slider1-6">

    

    <div class="full-screen">
      <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
          <li data-app-prevent-settings="" data-target="#slider1-6" class=" active" data-slide-to="0"></li>
          <li data-app-prevent-settings="" data-target="#slider1-6" data-slide-to="1"></li>
          <li data-app-prevent-settings="" data-target="#slider1-6" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/mbr-1920x1278.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <div class="mbr-overlay">
                </div>
                <img src="assets/images/mbr-1920x1278.jpg" title="FULL SCREEN SLIDER">
                <div class="carousel-caption justify-content-center">
                  <div class="col-10 align-center">
                    <h2 class="mbr-fonts-style display-1">CODELAB</h2>
                    <p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.
                    </p>
                    
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/1-970x450.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <div class="mbr-overlay">
                  
                </div>
                <img src="assets/images/1-970x450.jpg" title="FULL SCREEN SLIDER">
                <div class="carousel-caption justify-content-center">
                  <div class="col-10 align-center">
                    <h2 class="mbr-fonts-style display-1">CODELAB</h2>
                    <p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/2-910x411.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <div class="mbr-overlay">
                  
                </div>
                <img src="assets/images/2-910x411.jpg" title="FULL SCREEN SLIDER"><div class="carousel-caption justify-content-center">
                  <div class="col-10 align-center">
                    <h2 class="mbr-fonts-style display-1">CODELAB</h2>
                    <p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-6">
          <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-6">
          <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div  class="form-popup-verification" id="emailverificationfom">
    	<div class="form-containeremailverification-popup">
		<h2>Email Verification</h2>
		<p> <h3> Click on "Send Verification Code" to receive the verification code to your email </h3><br>
		<?php 
			$current_user = $_SESSION['current_user'];
			echo "Your email address: " . $current_user->get_email(); ?>
			<br>
			<form action="send_mail.php" method="POST" class="form-containeremailverification">
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
		<form action="emailverificationprocess.php" class="form-containeremailverification" method="post">
			Verification Code <input type="text" name="veri_code" id="" required>
			<!--<input type="hidden" name="rand_num" value="<?php //echo $rand_num; ?>">
			<!--<input type="hidden" name="email" value="<?php //echo $email; ?>">-->	
			<div class="veributton">
			<a href=""><button type="submit" name="verify"> Verify </button></a>
			</div>
		</form>
		</div>

		<?php if (isset($_SESSION["alert"])): ?>
			<script type="text/javascript">
				alert("<?php echo ($_SESSION["alert"]); ?>");
			</script>
			<?php unset($_SESSION['alert']); ?>
		<?php endif; ?>
		</div>
	</section>
	<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/js/script.js"></script>
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