<!doctype html>
<?php
require_once 'config.php';
global $con;
include 'indo_date.php';
error_reporting(0);

$query_log = mysql_query ("SELECT * FROM lcs_login", $con);
session_start();
$user_check = $_SESSION['username'];
$sql2 = "SELECT * FROM lcs_login where username='$user_check'";
$ses_sql = mysql_query($sql2,$con);
// Ambil data user dengan mysql_fetch_assoc
$row = mysql_fetch_assoc($ses_sql);
$nama =$row['nama'];
if (empty($_SESSION['username'])){
	echo "<script>alert('Anda belum memiliki hak akses, silahkan login terlebih dahulu.'); window.location = 'login.php'</script>";	
} else {
	include "config.php";
}

$lisen = "SELECT * FROM lcs_lisensi";
$query_lisen = mysql_query($lisen);
$count_lisen = mysql_num_rows($query_lisen);

$lisen_war = "SELECT * FROM lcs_lisensi WHERE tgl_war <= now() ";
$query_lisen_war = mysql_query($lisen_war);
$count_lisen_war = mysql_num_rows($query_lisen_war);

$lisen_exp = "SELECT * FROM lcs_lisensi WHERE exprd_lcns <= now() ";
$query_lisen_exp = mysql_query($lisen_exp);
$count_lisen_exp = mysql_num_rows($query_lisen_exp);

$lisen_gaehs = "SELECT * FROM lcs_lisensi WHERE plan LIKE 'GA-EHS'";
$query_lisen_gaehs = mysql_query($lisen_gaehs);
$count_lisen_gaehs = mysql_num_rows($query_lisen_gaehs);
$lisen_war_gaehs = "SELECT * FROM lcs_lisensi WHERE tgl_war <= now() AND plan LIKE 'GA-EHS'";
$query_lisen_war_gaehs = mysql_query($lisen_war_gaehs);
$count_lisen_war_gaehs = mysql_num_rows($query_lisen_war_gaehs);
$lisen_exp_gaehs = "SELECT * FROM lcs_lisensi WHERE exprd_lcns <= now() AND plan LIKE 'GA-EHS'";
$query_lisen_exp_gaehs = mysql_query($lisen_exp_gaehs);
$count_lisen_exp_gaehs = mysql_num_rows($query_lisen_exp_gaehs);

$lisen_hr = "SELECT * FROM lcs_lisensi WHERE plan LIKE 'HR'";
$query_lisen_hr = mysql_query($lisen_hr);
$count_lisen_hr = mysql_num_rows($query_lisen_hr);
$lisen_war_hr = "SELECT * FROM lcs_lisensi WHERE tgl_war <= now() AND plan LIKE 'HR'";
$query_lisen_war_hr = mysql_query($lisen_war_hr);
$count_lisen_war_hr = mysql_num_rows($query_lisen_war_hr);
$lisen_exp_hr = "SELECT * FROM lcs_lisensi WHERE exprd_lcns <= now() AND plan LIKE 'HR'";
$query_lisen_exp_hr = mysql_query($lisen_exp_hr);
$count_lisen_exp_hr = mysql_num_rows($query_lisen_exp_hr);
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
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
	<link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">


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
                    <li class="active">
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
                    
                    <li class="menu-item-has-children dropdown">
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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><?php $tgl = date('l, d M Y'); echo $tgl; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> Welcome to Licenses Control System <b><?php echo $nama; ?></b>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
						<div class="dropdown float-right">
                            <?php $pre = $count_lisen/$count_lisen*100; echo $pre.' %'; ?>
                        </div>
                        <div class="dropdown float-right">
                            &nbsp;
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php echo $count_lisen; ?></span>
                        </h4>
                        <p class="text-light">Total Licenses</p>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white" style="background: green;">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <?php $pre = ($count_lisen-($count_lisen_war))/$count_lisen*100; echo number_format($pre,2).' %'; ?>
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php $war_lisen = $count_lisen_war - $count_lisen_exp; $count_lisen_ok = ($count_lisen-($war_lisen + $count_lisen_exp)); echo $count_lisen_ok; ?></span>
                        </h4>
                        <p class="text-light">Licenses OK</p>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <?php $pre = ($count_lisen_war-$count_lisen_exp)/$count_lisen*100; echo number_format($pre,2).' %'; ?>
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php $lisen_warwar = $count_lisen_war - $count_lisen_exp; echo $lisen_warwar; ?></span>
                        </h4>
                        <p class="text-light">Licenses Warning</p>

                    </div>

                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <?php $pre = $count_lisen_exp/$count_lisen*100; echo number_format($pre,2).' %'; ?>
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php echo $count_lisen_exp; ?></span>
                        </h4>
                        <p class="text-light">Licenses Expired</p>

                    </div>
                </div>
            </div>
            <!--/.col-->
			
			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-flat-color-1">
                        <strong class="card-title"><font color=white>License All Section Karawang</font></strong>
                    </div>
					<div class="card-body">
						<table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" align=center>Section</th>
									<th scope="col" align=center>Lisensi OK</th>
                                    <th scope="col" align=center>Lisensi Warning</th>
									<th scope="col" align=center>Lisensi Expired</th>
									<th scope="col" align=center>Total Lisensi</th>
									<th scope="col" align=center>Action</th>
								</tr>
                            </thead>
                            <tbody>
							    <tr>
                                    <th scope="row">GA-EHS - General Affairs-EHS</th>
                                    <td align=center><a href="lisensi_data_ok.php?p=GA-EHS"><button type="button" class="btn btn-success btn-sm">&nbsp; <?php $war_lisen_gaehs = $count_lisen_war_gaehs - $count_lisen_exp_gaehs; $count_lisen_ok_gaehs = ($count_lisen_gaehs-($war_lisen_gaehs + $count_lisen_exp_gaehs)); echo $count_lisen_ok_gaehs; ?> &nbsp;</button></a></td>
                                    <td align=center><a href="lisensi_data_warning.php?p=GA-EHS"><button type="button" class="btn btn-warning btn-sm">&nbsp; <?php $lisen_warwar_gaehs = $count_lisen_war_gaehs - $count_lisen_exp_gaehs; echo $lisen_warwar_gaehs; ?> &nbsp;</button></a></td>
                                    <td align=center><a href="lisensi_data_exp.php?p=GA-EHS"><button type="button" class="btn btn-danger btn-sm">&nbsp; <?php echo $count_lisen_exp_gaehs; ?> &nbsp;</button></a></td>
									<td align=center><b><?php echo $count_lisen_gaehs; ?></b></td>
									<td align=center>
										<?php
											if($lisen_warwar_gaehs == "0" AND $count_lisen_exp_gaehs == "0"){
												echo 'All License OK';
											}else{
												echo '<a href="mail_gaehs.php"><i class="fa fa-envelope"></i>&nbsp; Send Mail</a>';
											}
										?>
									</td>
                                </tr>
							    <tr>
                                    <th scope="row">HR - Human Resources</th>
                                    <td align=center><a href="lisensi_data_ok.php?p=HR"><button type="button" class="btn btn-success btn-sm">&nbsp; <?php $war_lisen_hr = $count_lisen_war_hr - $count_lisen_exp_hr; $count_lisen_ok_hr = ($count_lisen_hr-($war_lisen_hr + $count_lisen_exp_hr)); echo $count_lisen_ok_hr; ?> &nbsp;</button></a></td>
                                    <td align=center><a href="lisensi_data_warning.php?p=HR"><button type="button" class="btn btn-warning btn-sm">&nbsp; <?php $lisen_warwar_hr = $count_lisen_war_hr - $count_lisen_exp_hr; echo $lisen_warwar_hr; ?> &nbsp;</button></a></td>
                                    <td align=center><a href="lisensi_data_exp.php?p=HR"><button type="button" class="btn btn-danger btn-sm">&nbsp; <?php echo $count_lisen_exp_hr; ?> &nbsp;</button></a></td>
									<td align=center><b><?php echo $count_lisen_hr; ?></b></td>
									<td align=center>
										<?php
											if($lisen_warwar_hr == "0" AND $count_lisen_exp_hr == "0"){
												echo 'All License OK';
											}else{
												echo '<a href="mail_hr.php"><i class="fa fa-envelope"></i>&nbsp; Send Mail</a>';
											}
										?>
									</td>
                                </tr>
								<tr>
                                    <th scope="row">Total</th>
									<td align=center><b><?php echo $count_lisen_ok; ?></b></td>
									<td align=center><b><?php echo $lisen_warwar; ?></b></td>
									<td align=center><b><?php echo $count_lisen_exp; ?></b></td>
									<td align=center><b><?php echo $count_lisen; ?></b></td>
									<td align=center>&nbsp;</td>
								</tr>
                            </tbody>
                        </table>
					</div>
				</div>
			</div>
			
			<div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-flat-color-4">
                        <strong class="card-title"><font color=white>List Licenses Expired</font></strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr align="center">
                                    <th scope="col">No.</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Jenis Lisensi</th>
                                    <th scope="col">No. Lisensi</th>
                                    <th scope="col">No. Lisensi Baru</th>
                                    <th scope="col">Deskripsi Lisensi</th>
                                    <th scope="col">Tanggal Expired</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                            $query = mysql_query ("select * from lcs_lisensi", $con);
                                            // cek total row
                                            $total_row = mysql_num_rows($query);
                                            if ( $total_row > 0 ) {
                                                // kalau lebih dari 0, berarti ambil row
                                                $no = 1;
                                                $lihat = mysql_query("select * from lcs_lisensi LEFT JOIN lcs_new ON lcs_lisensi.no_lcns = lcs_new.no_lcns_old WHERE exprd_lcns <= now() AND ket LIKE '' ORDER BY exprd_lcns ASC");
                                                while ( $row = mysql_fetch_array($lihat) ) {
                                                    echo '<tr align=center>';
                                                    echo '<td>'.$no++.'</td>';
                                                    echo '<td>'.$row['plan'].'</td>';
                                                    echo '<td>'.$row['jns_srtfkt'].'</td>';
                                                    echo '<td>'.$row['no_lcns'].'</td>';
                                                    echo '<td>'.$row['no_lcns_new'].'</td>';
                                                    echo '<td>'.$row['ket_lcns'].'</td>';
                                                    echo '<td>'.TanggalIndo2($row['exprd_lcns']).'</td>';
                                                    if($row['no_lcns_new'] == ""){
                                                        echo '<td align=center valign=center>';
                                                        echo '<a href="#" class="text-secondary"><button type="button" class="btn btn-danger btn-sm">Closed</button></a>';
                                                        echo '</td>';
                                                    }else{
                                                        echo '<td align=center valign=center>';
                                                        echo '<a href="close_lisen.php?id='.$row['id'].'" class="text-secondary"><button type="button" class="btn btn-danger btn-sm">Closed</button></a>';
                                                        echo '</td>';
                                                    }
                                                    echo '</tr>';
                                                }
                                            } else { // kalau row = 0, beri keterangan tidak ada data
                                                echo '<tr align=center><td colspan="8"><h5>Belum Ada License Expired</h5></td></tr>';
                                            }
                                ?>
                            </tbody>
                        </table>
                        <a href="dwnld_e.php"><button type="button" class="btn btn-success"><i class="fa fa-windows"></i>&nbsp; Download to Excel</button></a>
                    </div>
                </div>
            </div><br>
			                        
        </div> <!-- .content -->
		
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
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

	<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
		
</body>

</html>
