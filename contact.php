<?php require'action.php'; ?>




<!DOCTYPE html>
<html lang="ar">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include'link.php'; ?>
</head>
<body class="animsition">
	
	<!-- Header -->
	<?php include'header.php'; ?>

	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<span class="breadcrumb-item f1-s-2 cl9">
					إتصل بنا
				</span>
				<a href="index.php" class="breadcrumb-item f1-s-2 cl9">
					الرئيسية 
				</a>

				
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="بحث">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>

	<!-- Page heading -->
	<div class="container p-t-4 p-b-40">
		<h2 class="f1-l-1 cl2">
			تواصل معنا
		</h2>
		<!-----------php/ alert---------------->
        <?php if(isset($_SESSION['message'])){ ;?>
            <div class=" f1-m-2 alert alert-<?= $_SESSION['msg_type'];?>  alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b><?= $_SESSION['message'] ; ?></b>
            </div>
        <?php } unset($_SESSION['message']) ; ?>
        <!-----------php------------------------>
	</div>

	<!-- Content -->
	<section class="bg0 p-b-60">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-8 p-b-80">
					<div class="p-r-10 p-r-0-sr991">
						<form  action=" " method="POST">
							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-2 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="الإسم الكامل" required>

							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-2 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="البريد الإلكتروني" required>

							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-2 cl5 plh6 p-rl-18 m-b-20" type="text" name="subject" placeholder="الموضوع" required>

							<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-2 cl5 plh6 p-rl-18 p-tb-14 m-b-20" type="text" name="message" placeholder="اكتب رسالتك" required></textarea>

							<button type="submit" name="send" class="size-a-20 bg2 borad-3 f1-s-2 cl0 hov-btn1 trans-03 p-rl-15 m-t-20">
								ارسال
							</button>
						</form>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-5 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">
						<!-- Popular Posts -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									الأكثر متابعة
								</h3>
							</div><br>

							<ul>
								<li class="flex-wr-sb-s p-b-20">
									<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
										<img src="images/popular-post-01.jpg" alt="IMG">
									</a>
	
									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="#" class="f1-s-5 cl1 hov-cl10 trans-03">
												جائحة كورونا تجمع أساتذة قانون من المغرب والجزائر والعراق في ندوة افتراضية
											</a>
										</h6>
	
										<span class="f1-s-3 cl6">
											22 فبراير 2020
										</span>
									</div>
								</li>
	
								<li class="flex-wr-sb-s p-b-20">
									<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
										<img src="images/popular-post-02.jpg" alt="IMG">
									</a>
	
									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="#" class="f1-s-5 cl1 hov-cl10 trans-03">
												إشكالية التمييز بين خبرة التسيير والخبرة المحاسبية
											</a>
										</h6>
	
										<span class="f1-s-3 cl6">
											22 فبراير 2020
										</span>
									</div>
								</li>
	
								<li class="flex-wr-sb-s p-b-20">
									<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
										<img src="images/popular-post-03.jpg" alt="IMG">
									</a>
	
									<div class="size-w-5">
										<h6 class="p-b-5">
											<a href="#" class="f1-s-5 cl1 hov-cl10 trans-03">
												ورقة حول موضوع الشرعية الجنائية الإجرائية في زمن كورونا
											</a>
										</h6>
	
										<span class="f1-s-3 cl6">
											22 فبراير 2020
										</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<?php include'footer.php'; ?>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
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