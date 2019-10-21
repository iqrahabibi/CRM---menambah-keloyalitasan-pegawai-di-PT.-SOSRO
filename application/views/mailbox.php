<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Mailbox</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url('assets/admin/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/admin/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url('assets/admin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="<?php echo base_url('assets/admin/css/iCheck/minimal/blue.css')?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/admin/css/AdminLTE.css')?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        <!-- Notifications: style can be found in dropdown.less -->
                        
                        <!-- Tasks: style can be found in dropdown.less -->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('index.php/ctrllogin/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                    <li class="active">
                            <a href="<?php echo base_url('index.php/admin')?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/ctrlmailbox')?>">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/ctrlverif')?>">
                                <i class="fa fa-envelope"></i> <span>verifikasi Kwitansi</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/ctrladmintesti')?>">
                                <i class="fa fa-envelope"></i> <span>Data Testimoni</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/promo')?>">
                                <i class="fa fa-envelope"></i> <span>Promo</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Report</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('index.php/ctrlreportpdf/viewtesti')?>"><i class="fa fa-angle-double-right"></i> Cetak Laporan Testimoni</a></li>
                                <li><a href="<?php echo base_url('index.php/ctrlreportpdf/viewpromo')?>"><i class="fa fa-angle-double-right"></i> Cetak Laporan Promo</a></li>
                                <li><a href="<?php echo base_url('index.php/ctrlreportpdf/viewfeedback')?>"><i class="fa fa-angle-double-right"></i> Cetak Laporan Feedback</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header no-margin">
                    <h1 class="text-center">
                        Mailbox
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- MAILBOX BEGIN -->
                    <div class="mailbox row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-body">
                                <table cellspacing="2" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Isi</th>
                                            <th>Status</th>
                                            <th>Gambar</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $x=1;
                                        foreach($kritik as $ambil){?>
                                        <tr>
                                            <td><?php echo $x;?></td>
                                            <td><?php echo $ambil->nama?></td>
                                            <td><?php echo $ambil->email?></td>
                                            <td><?php echo $ambil->isi?></td>
                                            <td><?php if($ambil->status == 0){ echo "DITERIMA";}elseif($ambil->status == 1){ echo "DIBACA";}else{ echo "DIBALAS";}?></td>
                                            <td><img src="<?php if($ambil->gambar == null || $ambil->gambar == 0){ echo base_url('assets/gambar_komplain/notfound.jpg'); }else{echo base_url('assets/gambar_komplain/'.$ambil->gambar.'');} ?>" width="100px" height="100px"></td>
                                            <td width="20px;"><a href="<?php echo base_url('index.php/ctrlmailbox/dibaca/'.$ambil->id. '/' .$ambil->email.'/' .$ambil->nama.'/')?>" class="btn btn-warning">DIBACA</a></td>
                                            <td width="20px;"><a href="#balas<?php echo $ambil->id?>" data-toggle="modal" class="btn btn-success">BALAS</a></td>
                                        </tr>
                                    <?php
                                        $x++;
                                        } ?>
                                    </tbody>
                                </table>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <div class="pull-right">
                                        <small>Showing 1-12/1,240</small>
                                        <button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button>
                                        <button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button>
                                    </div>
                                </div><!-- box-footer -->
                            </div><!-- /.box -->
                        </div><!-- /.col (MAIN) -->
                    </div>
                    <!-- MAILBOX END -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        </body>
<?php foreach ($kritik as $take) {
	// code...
?>
<div class="modal fade" id="balas<?php echo $take->id?>" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Balas Kritik Dari Customer</h4>
		</div>
			<form class="form-horizontal" action="<?php echo base_url('index.php/ctrlmailbox/dibalas')?>" method="post" enctype="multipart/form-data" role="form">
				<div class="modal-body">
					<div class="row">
						<div class="form-group">
							<div class="col-lg-4">
								<label>&nbsp;&nbsp;&nbsp;&nbsp;Nama Customer</label>
							</div>
							<div class="col-lg-7">
									<input type="hidden" id="id" name="id" value="<?php echo $take->id?>">
									<input type="text" class="form-control" readonly id="id" name="nama" value="<?php echo $take->nama?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-lg-4">
								<label>&nbsp;&nbsp;&nbsp;&nbsp;Email Customer</label>
							</div>
							<div class="col-lg-7">
								<input type="text" class="form-control" readonly id="id" name="email" value="<?php echo $take->email?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-lg-4">
								<label>&nbsp;&nbsp;&nbsp;&nbsp;Kritik Dan Saran Dari Customer</label>
							</div>
							<div class="col-lg-7">
								<textarea class="form-control" readonly name="kritik"><?php echo $take->isi?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-lg-4">
								<label>&nbsp;&nbsp;&nbsp;&nbsp;Balasan</label>
							</div>
							<div class="col-lg-7">
								<textarea class="form-control" placeholder="KETIK BALASAN ANDA DISINI" name="balasan"></textarea>
							</div>
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

<?php } ?>
        <!-- COMPOSE MESSAGE MODAL -->
        

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js')?>" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/admin/js/AdminLTE/app.js')?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('assets/admin/jsplugins//bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/admin/jsplugins/iCheck/icheck.min.js')?>" type="text/javascript"></script>
        <!-- Page script -->
        <script type="text/javascript">
            $(function() {

                "use strict";

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"]').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                });

                //When unchecking the checkbox
                $("#check-all").on('ifUnchecked', function(event) {
                    //Uncheck all checkboxes
                    $("input[type='checkbox']", ".table-mailbox").iCheck("uncheck");
                });
                //When checking the checkbox
                $("#check-all").on('ifChecked', function(event) {
                    //Check all checkboxes
                    $("input[type='checkbox']", ".table-mailbox").iCheck("check");
                });
                //Handle starring for glyphicon and font awesome
                $(".fa-star, .fa-star-o, .glyphicon-star, .glyphicon-star-empty").click(function(e) {
                    e.preventDefault();
                    //detect type
                    var glyph = $(this).hasClass("glyphicon");
                    var fa = $(this).hasClass("fa");

                    //Switch states
                    if (glyph) {
                        $(this).toggleClass("glyphicon-star");
                        $(this).toggleClass("glyphicon-star-empty");
                    }

                    if (fa) {
                        $(this).toggleClass("fa-star");
                        $(this).toggleClass("fa-star-o");
                    }
                });

                //Initialize WYSIHTML5 - text editor
                $("#email_message").wysihtml5();
            });
        </script>

    </body>
</html>