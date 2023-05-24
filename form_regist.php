<!doctype html>

<?php
require_once 'config.php';
global $con;
?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LCS - FTI</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/logo (2).png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo (3).png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo (2).png" alt="Logo"></a>
            </div>

            <!-- .navbar-collapse  -->
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
					
                    <li class="menu-item-has-children dropdown"><!-- /.menu-title -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Database</a>
                        <ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-table"></i><a href="lisensi_data.php">Data Lisensi</a></li>
                            <li><i class="fa fa-table"></i><a href="lisensi_close.php">Lisensi Closed</a></li>
							<li><i class="fa fa-table"></i><a href="user.php">Data User</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="form_lisen.php">Tambah Lisensi</a></li>
							<li><i class="menu-icon fa fa-plus-square"></i><a href="form_lisen_upd.php">Perbarui Lisensi</a></li>
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="form_regist.php">Tambah User</a></li>
                        </ul>
                    </li>
                    
                    <h3 class="menu-title">Pengaturan</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Profile</a>
                        <ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-pencil-square-o"></i><a href="pass.php">Ganti Password</a></li>
                            <li><i class="menu-icon fa fa-sign-out"></i><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       &nbsp;
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
						<h2>Licenses Control System</h2>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Forms</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="form_lisen.php">Forms</a></li>
                            <li class="active">Tambah User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
			
            <div class="animated fadeIn">
                <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Form</strong> Add New User
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form method="post" action="proses_regist.php" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Section</label></div>
                                                                <div class="col-12 col-md-9">
																	<select name="plan" id="plan" class="form-control" required>
                                                                        <option value="">- Pilih Section -</option>
																		<option value="GA">GA - General Affairs</option>
																		<option value="HR">HR - Human Resources</option>
                                                                    </select>                                                                    
                                                                </div>
                                                            </div>
															<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Hak Akses</label></div>
                                                                <div class="col-12 col-md-9">
																	<select name="hak_akses" id="hak_akses" class="form-control" required>
                                                                        <option value="">- Pilih -</option>
																		<option value="Admin">Admin</option>
                                                                    </select>                                                                    
                                                                </div>
                                                            </div>
															<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">NPK</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="integer" id="npk" name="npk" placeholder="masukkan npk user" class="form-control" required>
                                                                </div>
                                                            </div>
															<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Nama Lengkap</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="text" id="nama" name="nama" placeholder="masukkan nama lengkap user" class="form-control" required>
                                                                </div>
                                                            </div>
															<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Username</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="text" id="username" name="username" placeholder="masukkan username user" class="form-control" required>
                                                                </div>
                                                            </div>
															<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="email" id="email" name="email" placeholder="masukkan email user" class="form-control" required>
                                                                </div>
                                                            </div>
															<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Password</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="password" id="pass1" name="pass1" placeholder="masukkan password" class="form-control" required>
                                                                </div>
                                                            </div>
															<div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Konfirmasi Password</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="password" id="pass" name="pass" placeholder="masukkan kembali password yang sudah diinputkan" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <input type="text" id="stat" name="stat" value="OK" class="form-control" readonly hidden>
															<center><small class="form-text text-muted">Pastikan data yang diinputkan sudah benar.</small></center>
															<div class="card-footer" style="margin-top: 5px; background: transparent;">
																<button type="submit" name="regist" value="regist" class="btn btn-primary btn-sm">
																	&nbsp;Submit&nbsp;
																</button>	
																<a href="index.php"><button type="reset" class="btn btn-danger btn-sm">
																	&nbsp;Clear&nbsp;
																</button></a>																															
															</div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
		
		<!-- Footer-->
		<div class="breadcrumbs" style="padding: 10px;">
			<footer id="header" class="header">

				<div class="header-menu">

					<center>
						&copy;<script type="text/javascript">document.write( new Date().getFullYear() );</script>. All Right Reserved | PT Fuji Technica Indonesia
					</center>
					
				</div>
				
			</footer>
		</div>
		<!-- /Footer -->
			
    </div><!-- /#right-panel -->
    <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
