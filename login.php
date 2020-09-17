<?php require'action.php'; ?>



<!DOCTYPE html>
<html lang="ar">
<head>
	<title>الدخول</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include'link.php'; ?>
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						
						<a href="login.php" class="left-topbar-item">
							الدخول
						</a>
						
						<a href="contact.php" class="left-topbar-item">
							إتصل بنا
						</a>
						<a href="droit-pub.php" class="left-topbar-item">
							سياسة النشر 
						</a>

						
					</div>

					<div class="right-topbar">
						<a href="https://www.facebook.com/OCIAEJ">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="https://www.youtube.com/channel/UChBRIuAYSgkGaaxioE4U9jw">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>

				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="index.php"><img src="images/logof.png" alt="IMG-LOGO"></a>
				</div>
	
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					

					<li class="left-topbar">

						<a href="login.php" class="left-topbar-item">
							الدخول
						</a>
						<a href="contact.php" class="left-topbar-item">
							إتصل بنا
						</a>
						<a href="droit-pub.php" class="left-topbar-item">
							سياسة النشر 
						</a>
					</li>

					<li class="right-topbar">
						<a href="https://www.facebook.com/OCIAEJ">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="https://www.youtube.com/channel/UChBRIuAYSgkGaaxioE4U9jw">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>


			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="index.php"><img src="images/logo.jpg" alt="LOGO"></a>
				</div>	

				<!-- Banner -->
				
			</div>	
			
			<!--  -->
				
		</div>
	</header>

<div class="container">
    <div id="login">
		<h3 class="f1-l-3 text-center text-dark pt-5 ">تسجيل الدخــــول</h3><br><br>
		<!-----------php/ alert---------------->
		<?php if(isset($_SESSION['message'])){ ;?>
            <div class=" f1-m-2 alert alert-<?= $_SESSION['msg_type'];?>  alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b><?= $_SESSION['message'] ; ?></b>
            </div>
        <?php } unset($_SESSION['message']) ; ?>

        <!-----------php------------------------>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
							
                            <div class="form-group">
                                <label for="username" class="text-dark f2-s-1">البريد الإلكتروني:</label><br>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark f2-s-1">كلمة السر:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-dark f2-s-1"><span>تذكرني</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-dark hov-cl10 btn-md f2-s-1" value="ارسال">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br>

	<!-- Footer -->
	<footer>
		

		<div class="bg11">
			<div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">
					Copyright © 2018 

					<a href="#" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</span>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>