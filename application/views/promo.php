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
				<li class=""><a href="<?php echo base_url('index.php/ctrlpromo')?>">Promosi</a></li>
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
<section class="blog py-5">
	<div class="container py-md-5 py-3">
		<h3 class="heading text-center mb-sm-5 mb-4"><br>Promo</h3>
		<div class="row blog-grids">
		<?php foreach($kritik as $promo){?>
			<div class="col-lg-7 mb-lg-5 blog-img1">
				<img src="<?php echo base_url('assets/gambar_promo/'.$promo->gambar.'')?>" alt="" class="img-fluid"/>
				
			</div>
			<div class="col-lg-5 mb-lg-5 mb-4">
				<h5><?php echo $promo->tgl_input?></h5>
				<h4 class="my-3"><?php echo $promo->judul?></h4>
				<p class="my-3"><?php echo $promo->isi?> </p>
			</div>
			
				<?php }?>
		</div>
	</div>
</section>
<!-- //banner -->
<!-- testimonials -->

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
	<?php foreach($kritik as $promo){?>
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="promo-sosro" width="75%" class="modal fade">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
			                <h4 class="modal-title">Insert Data</h4>
			            </div>
			            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" role="form">
				            <div class="modal-body">
				                    <div class="form-group">
				                        <label class="col-lg-3 col-sm-1">No Order</label>
				                        <div class="col-lg-12">
				                        	<input type="text" class="form-control" id="jenjang" name="no_order" value="<?php echo $promo->kode_promo?>" placeholder="No Order">
				                        </div>
				                    </div>
				                    
				                </div>
				                <div class="modal-footer">
				                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
				                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
				                </div>
			                </form>
			            </div>
			        </div>
			    </div>
	<?php }?>
  </div>
</html>