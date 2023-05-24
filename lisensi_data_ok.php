<!doctype html>
<?php
require_once 'config.php';
global $con;
include 'indo_date.php';
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
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
					
                    <li class="menu-item-has-children active dropdown"><!-- /.menu-title -->
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
                        <h1>Database</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="#">Database</a></li>
                            <li class="active">Data Lisensi</li>
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
                            <div class="card-header" style="background: blue; color: white;">
                                <strong class="card-title">List Lisensi</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr align=center>
                                            <th>No.</th>
                                            <th>Section</th>
                                            <th>Jenis Lisensin</th>
                                            <th>No.Lisensi</th>
											<th>Deskripsi</th>
											<th>Atas Nama</th>
											<th>Tanggal Expired</th>
											<th>Status Pengajuan</th>
											<th>Status</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
													$query = mysql_query ("select * from lcs_lisensi WHERE exprd_lcns > DATE_ADD(now(), INTERVAL 2 MONTH) and plan ='".$_GET['p']."';", $con);
													// cek total row
													$total_row = mysql_num_rows($query);
													if ( $total_row > 0 ) {
														// kalau lebih dari 0, berarti ambil row
														$no = 1;
														$exp2 = date("Y-m-d");
														$lihat = mysql_query("select * from lcs_lisensi where exprd_lcns > DATE_ADD(now(), INTERVAL 2 MONTH) and plan ='".$_GET['p']."';");
														while ( $row = mysql_fetch_array($lihat) ) {
															echo '<tr align=center>';
															echo '<td>'.$no++.'</td>';
															echo '<td>'.$row['plan'].'</td>';
															echo '<td>'.$row['jns_srtfkt'].'</td>';
															echo '<td>'.$row['no_lcns'].'</td>';
															echo '<td>'.$row['ket_lcns'].'</td>';
															echo '<td>'.$row['nm_srtfkt'].'</td>';
															echo '<td>'.TanggalIndo2($row['exprd_lcns']).'</td>';
                                                            echo '<td>'.$row['st_aju'].'</td>';
															echo '<td>';
																if($row['exprd_lcns'] <= $exp2){
																	echo '<a href="close_lisen.php?id='.$row['id'].'"><button type="button" class="btn btn-danger btn-sm">Expired</button></a>';
																}else if($exp2 >= date('Y-m-d',strtotime('-2 months', strtotime($row['exprd_lcns'])))){
																	echo '<a href="close_lisen.php?id='.$row['id'].'"><button type="button" class="btn btn-warning btn-sm">Warning</button></a>';
																}else{
																	echo '<a href="close_lisen.php?id='.$row['id'].'"><button type="button" class="btn btn-success btn-sm">&nbsp;OK&nbsp;</button></a>';
																};
															echo '</td>';
															echo '<td align=center valign=center>';
															echo '<a href="edit_lisen.php?id='.$row['id'].'"class="text-secondary"><i class="fa fa-edit"></i></a> &nbsp; &nbsp;|&nbsp; &nbsp; ';
														echo '<a href="del_lisen.php?id='.$row['id'].'"class="text-secondary"><i class="fa fa-trash-o" onclick="return confirm(\'Apakah Anda yakin ingin menghapus license ?\')"></i></a>';
															echo '</td>';
															echo '</tr>';
														}
													} else { // kalau row = 0, beri keterangan tidak ada data
														echo '<tr align=center><td colspan="8"><h5>Belum Ada Licenses</h5></td></tr>';
													}
										?>
                                    </tbody>
                                </table>
								<a href="dwnld_ok.php?p=<?php echo $_GET['p']; ?>"><button type="button" class="btn btn-success"><i class="fa fa-windows"></i>&nbsp; Download to Excel</button></a>
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
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


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
