<?php require 'action.php';?>


<!DOCTYPE html>
<html lang="ar">
<head>
	<title>عرض المنشور </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'link.php'; ?>
</head>
<body class="animsition">
	
	<!-- Header -->
	<?php include 'header.php'; ?>

	<!-- Breadcrumb -->
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<span class="breadcrumb-item f1-s-2 cl9">	 
				<?= $title;?>
							
				</span>
				<a href="category-01.php?sub=<?= $categories;?>" class="breadcrumb-item f1-s-2 cl9">
				<?= $categories;?> 
				</a>
				
		
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="Search" placeholder="بحث">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>

	<!-- Content -->
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class=" col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div  class="p-b-70">

							<h3 class="f1-m-3 cl2 p-b-16 p-t-33 respon2">
							<?= $title;?>
							</h3>
							
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<span>
									<?= $date;?>
									</span>
								</span>

								
							</div>

							<div class="wrap-pic-max-w p-b-30">
								<img src="<?= $image?>" alt="IMG">
							</div>

							<h3 class="f1-m-3 cl18 p-b-16 p-t-33 respon2">
							<?= $author;?>
							</h3>
                            
							<pre  class="f1-m-4 cl6 p-b-25 ">
								<?= $text;?>
                            </pre>

							<!-- Tag -->
							<div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-2 cl5 m-r-8">
									علامات :
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="category-01.php" class="f1-s-2 cl8 hov-link1 m-r-15">
										قوانين
									</a>

									
								</div>
							</div>

							<!-- Share -->
							<div class="flex-s-s">
								<span class="f1-s-2 cl5 p-t-1 m-r-15">
									شارك:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-facebook-f m-r-7"></i>
										Facebook
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-twitter m-r-7"></i>
										Twitter
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-google-plus-g m-r-7"></i>
										Google+
									</a>
								</div>
							</div>
						</div>

						<!-- Leave a comment -->
						
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">						
						<!-- Category -->
						<div class="p-b-60">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									الأقســــام 
								</h3>
							</div><br>

							<ul class="m-t--12">
								<li class="how-bor1 p-rl-5 p-tb-10">
									<a href="blog-list-01.php" class="f1-s-5 cl1 hov-cl10 trans-03 p-tb-8">
										فضاء التشريع (22)
									</a>
								</li>
	
								<li class="how-bor1 p-rl-5 p-tb-10">
									<a href="blog-list-01.php" class="f1-s-5 cl1 hov-cl10 trans-03 p-tb-8">
										مقالات قانونية  (22)
									</a>
								</li>
	
								<li class="how-bor1 p-rl-5 p-tb-10">
									<a href="blog-list-01.php" class="f1-s-5 cl1 hov-cl10 trans-03 p-tb-8">
										إجتهاد القضائي (22)
									</a>
								</li>
	
								<li class="how-bor1 p-rl-5 p-tb-10">
									<a href="blog-list-01.php" class="f1-s-5 cl1 hov-cl10 trans-03 p-tb-8">
										أنشطة علمية (22)
									</a>
								</li>
	
								<li class="how-bor1 p-rl-5 p-tb-10">
									<a href="blog-grid.php" class="f1-s-5 cl1 hov-cl10 trans-03 p-tb-8">
										صوت و صورة (22)
									</a>
								</li>
							</ul>
						</div>

						<!-- Archive -->
						<div class="p-b-37">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									الأرشيــــف
								</h3>
							</div>

							<ul class="p-t-32">
								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-5 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											يوليوز 2018
										</span>

										<span>
											(9)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-5 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											يونيو 2018
										</span>

										<span>
											(39)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-5 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											ماي 2018
										</span>

										<span>
											(29)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-5 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											ابريل  2018
										</span>

										<span>
											(35)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-5 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											مارس 2018
										</span>

										<span>
											(22)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-5 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											فبراير 2018
										</span>

										<span>
											(32)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-5 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											يناير 2018
										</span>

										<span>
											(21)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-5 text-uppercase cl2 hov-cl10 trans-03">
										<span>
		                                    دجنبر2017  
										</span>

										<span>
											(26)
										</span>
									</a>
								</li>
							</ul>
						</div>

						<!-- Popular Posts -->
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
							       الأكثر متابعــة
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="images/popular-post-04.jpg" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
												دور التحكيم الالكتروني في فض منازعات عقود التجارة الدولية 

											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												دراسات
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												11 فبراير 2020 
											</span>
										</span>
									</div>
								</li>

								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="images/popular-post-05.jpg" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
												إشكالية التمييز بين خبرة التسيير والخبرة المحاسبية											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												تعليق على قرار
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												12 فبراير 2020
											</span>
										</span>
									</div>
								</li>

								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="images/popular-post-06.jpg" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-01.php" class="f1-s-5 cl3 hov-cl10 trans-03">
												تعليق على قرار محكمة النقض المغربية  شرط عدم المنافسة  في إطار عقد الشغل											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												تعليق على قرار
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												23 يناير 2020

											</span>
										</span>
									</div>
								</li>
							</ul>
						</div>

						<!-- Tag -->
						<div class="p-b-55">
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									علامات 
								</h3>
							</div>

							<div class="flex-wr-s-s m-rl--5">
								
								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									دراسات 
								</a>

								<a   href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									تعليق على قرار
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									وجهة نظر
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									قانون
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									إتفاقيات
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									فعاليات
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									تقارير
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									مرئيات
								</a>
								
							</div>	
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