<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>SOSRO</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Crispy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
	<link href="<?php echo base_url('assets/layout/css/css_slider.css')?>" type="text/css" rel="stylesheet" media="all"><!-- slider css -->
    <link href="<?php echo base_url('assets/layout/css/bootstrap.css')?>" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="<?php echo base_url('assets/layout/css/style.css')?>" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="<?php echo base_url('assets/layout/css/font-awesome.min.css')?>" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- top header -->

<!-- //top header -->

<!-- //header -->
<header class="py-sm-3 pt-3 pb-2">
	<div class="container">
			<div id="logo">
				<h1> <a href="<?php echo base_url('index.php/index')?>"> SOSRO</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class="active"><a href="<?php echo base_url('index.php/index')?>">Home</a></li>
				<li class=""><a href="<?php echo base_url('index.php/ctrlpromo')?>">Promosi</a></li>\
				<li class=""><a href="<?php echo base_url('index.php/ctrlkwitansi')?>">Upload Kwitansi</li>
				<li class=""><a href="<?php echo base_url('index.php/ctrltesti')?>">Testimoni</a></li>
				<li class="active"><a href="<?php echo base_url('index.php/kritik')?>">Kritik dan Saran</a></li>
				<li class=""><a href="<?php echo base_url('index.php/ctrlkomplain')?>">Komplain</a></li>
			</ul>
			<div class="login-icon ml-2">
				<a class="user" href="<?php echo base_url('index.php/ctrllogin/logout')?>">Logout</a>
			</div>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="banner-text-agile">
				<div class="row">
					<div class="col-lg-6 p-0">
						<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Segar & Manis</span> SOSRO.</h3>
										<h4>Apapun Makanannya Minumnya Teh Botol Sosro </h4>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4"><span>Segar & Manis</span> SOSRO.</h3>
										<h4>Teh Botol Sosro Adalah Perusahaan Teh Siap Minum Dalam Kemasan Botol Dan Kardus Yang Pertama Dan Didunia</h4>
									</div>
								</div>
							</li>
							
						</ul>
						<div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
							</div>
						</div>
					</div>
					<!-- //banner slider-->

					</div>
					<div class="col-lg-6 col-md-8 mt-lg-0 mt-5">
						<img src="<?php echo base_url('assets/images/ikeh.jpg')?>" alt="" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- testimonials -->
<section class="feedback" id="testimonials">
	<div class="feedback-layer py-5">
		<div class="container py-lg-5">
		<h3 class="heading text-center mb-sm-5 mb-4">Testimonials</h3>
			<div class="row">
				<?php
				$x=1;
				foreach($cek as $ambil){?>
				<div class="col-lg-4 col-md-6">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<span class="fa fa-quote-right"></span> 
							<p> <?php echo $ambil->isi?></p>
							<div class="clearfix"></div>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
															</div>
							<div class="feedback-img-info">
								<h5><?php echo $ambil->nama?></h5>
								<h1><?php echo $ambil->penilaian?></h1>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<?php 
				}
				?>
				
			</div>
		</div>
	</div>
</section>
<!-- //testimonials -->

<!-- blog -->
<!-- //blog -->

<!-- appointment -->
<?php $this->load->view('footer')?>
<!-- //copyright -->
		
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
		</div>
			<form class="form-horizontal" action="<?php echo base_url('index.php/ctrllogin/auth')?>" method="post" enctype="multipart/form-data" role="form">
				<div class="modal-body">
					<div class="row">
						<div class="form-group">
							<div class="col-lg-4">
								<label>&nbsp;&nbsp;&nbsp;&nbsp;Username</label>
							</div>
							<div class="col-lg-7">
									<input type="text" class="form-control" name="username" value="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-lg-4">
								<label>&nbsp;&nbsp;&nbsp;&nbsp;Password</label>
							</div>
							<div class="col-lg-7">
								<input type="password" class="form-control" name="password" value="">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-info" type="submit"> Login&nbsp;</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
				</div>
			</form>
      </div>
    </div>
  </div>
</html>