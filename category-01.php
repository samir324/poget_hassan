<?php require 'action.php'; 



?>


<!DOCTYPE html>
<html lang="ar">

<head>
	<title>category list</title>
	<?php include 'link.php'; ?>
</head>

<body class="animsition">

	<!-- Header -->
	<?php include 'header.php'; ?>

	<!-- Breadcrumb -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">

				<span class="breadcrumb-item f1-s-2 cl9">
					<!-- print name of category  -->
					<?= $sub;?>
				</span>
				<a href="blog-list-01.php?cat=<?= $row['id_parent'];?> " class="breadcrumb-item f1-s-2 cl9">
				<?= $row['id_parent'];?>
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
		<h2 class="f1-m-2 cl2">
		عرض الكل 
		</h2>
	</div>

	<!-- Feature post -->
	

	<!-- Post -->
	<section class="bg0 p-t-70 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="row">
				<!------------php --------------------->
					<?php 
					$sth= $mag->prepare($query);
					$sth->bindParam(':sub',$sub);
					$sth->execute();
					while ($row = $sth->fetch())
					{
						$id=$row['id_post'];
                        $title=$row['title_post'];
                        $category=$row['name_cat'];
                        $author=$row['author_post'];
                        $text=$row['text_post'];
                        $image=$row['img_post'];
                        $date=$row['date_post'];
						?>
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
						<!-- Item latest -->
							<div class="m-b-45">
								<a href="blog-detail-01.php?id=<?= $id;?>" class="wrap-pic-w hov1 trans-03">
									<img src="<?= $image;?>" alt="IMG">
								</a>
								<div class="p-t-16">
									<h5 class="p-b-5">
										<a href="blog-detail-01.php?id=<?= $id;?>" class="f1-m-3 cl2 hov-cl10 trans-03"><?= $title;?></a>
									</h5>
									<span class="cl8">
									<span class="f1-s-3">
											<?= $category;?>
										</span>
										<span class="f1-s-3">
											-
										</span>
										<span class="f1-s-3">
											<?= $date;?>
										</span>
									</span>
								</div>
							</div>
						</div> 

						<?php
						
						
					}
					?>	
                <!--------php --------------------->
						
					</div>

					<!-- Pagination -->
					<div class="flex-wr-s-c m-rl--7 p-t-15">
						<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
						<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>
					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">
						<!-- Subscribe -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
							<h5 class="f1-m-5 cl0 p-b-10">
								للإشتراك في المجلة
							</h5>

							<p class="f1-m-1 cl0 p-b-25">
								توصل بجديد المقالات و النصوص القانونية و الأنشطة العلمية المعلن عنها ، و ذلك من خلال إرسال التفاصيل إلى بريدكم الإلكتروني بشكل دوري 
							</p>

							<form  class="size-a-9 pos-relative">
								<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="البريد الإلكتروني">

                                <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
									<i class="fa fa-arrow-right"></i>
								</button>
							</form>
						</div>

						<!-- Most Popular -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									الأكثر متابعة
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										1
									</div>

									<a href="blog-detail-01.php" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										جائحة كورونا تجمع أساتذة قانون من المغرب والجزائر والعراق في ندوة افتراضية 
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										2
									</div>

									<a href="blog-detail-01.php" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										إشكالية التمييز بين خبرة التسيير والخبرة المحاسبية
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										3
									</div>

									<a href="blog-detail-01.php" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										ورقة حول موضوع الشرعية الجنائية الإجرائية في زمن كورونا
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										4
									</div>

									<a href="blog-detail-01.php" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										دور التحكيم الالكتروني في فض منازعات عقود التجارة الدولية
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
										5
									</div>

									<a href="blog-detail-01.php" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										تقرير للندوة العلمية عن بعد حول موضوع: تداعيات كوفيد 19 على الأسرة وحقوق أطرافها
									</a>
								</li>
							</ul>
						</div>

						<!--  -->
						<div class="flex-c-s p-b-50">
							<a href="#">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
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