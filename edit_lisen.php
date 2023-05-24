<!doctype html>

<?php
require_once 'config.php';
global $con;
include("indo_date.php");
$id = $_GET['id'];
$Cari = mysql_query("select * from lcs_lisensi where id='$id'") or die(mysql_error());
$data = mysql_fetch_array($Cari);

session_start();
if (empty($_SESSION['username'])){
	echo "<script>alert('Anda belum memiliki hak akses, silahkan login terlebih dahulu.'); window.location = 'login.php'</script>";	
} else {
	include "config.php";
}
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
                            <li class="active">Edit License</li>
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
                                <strong>Form</strong> Edit License
                            </div>
                            <div class="card-body card-block">
                                <form action="update_lisen.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" name="id" value="<?php echo $id; ?>" readonly="value">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Section</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="plan" name="plan" value="<?php echo $data['plan']; ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Jenis Lisensi</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="jns_srtfkt" id="jns_srtfkt" class="form-control" required>
                                                <option value="<?php echo $data['jns_srtfkt']; ?>"><?php echo $data['jns_srtfkt']; ?></option>
                                                <option value="Building">Building</option>
                                                <option value="Catering">Catering</option>
                                                <option value="Energi">Energi</option>
                                                <option value="Klinik">Klinik</option>
                                                <option value="Limbah B3 (ADM)">Limbah B3 (ADM)</option>
                                                <option value="Limbah B3 (Supplier)">Limbah B3 (Supplier)</option>
                                                <option value="PJK3 (Equipment)">PJK3 (Equipment)</option>
                                                <option value="PJK3 (Operator)">PJK3 (Operator)</option>
                                                <option value="Rumah Sakit">Rumah Sakit</option>
                                                <option value="Kendaraan">Kendaraan</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">No. Lisensi</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="no_lcns" name="no_lcns" value="<?php echo $data['no_lcns']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Deskripsi Lisensi</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="ket_lcns" name="ket_lcns" value="<?php echo $data['ket_lcns']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Lisensi Atas Nama</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="nm_srtfkt" name="nm_srtfkt" value="<?php echo $data['nm_srtfkt']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Penerbit Lisensi</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="pnrbt_srtfkt" name="pnrbt_srtfkt" value="<?php echo $data['pnrbt_srtfkt']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Tanggal Terbit Lisensi</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="tgl_lcns" name="tgl_lcns" value="<?php echo $data['tgl_lcns']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Tanggal Expired Lisensi</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="exprd_lcns" name="exprd_lcns" value="<?php echo $data['exprd_lcns']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Keterangan</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="ket2" name="ket2" value="<?php echo $data['ket']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Status Pengajuan</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="st_aju" id="st_aju" class="form-control" required>
                                                <option value="<?php echo $data['st_aju']; ?>"><?php echo $data['st_aju']; ?></option>
                                                <option value="Belum Diajukan">Belum Diajukan</option>
                                                <option value="PR">PR</option>
                                                <option value="PO">PO</option>
                                                <option value="Serah Terima Berkas Perpanjangan">Serah Terima Berkas Perpanjangan</option>
                                                <option value="Dokumen Diterima">Dokumen Diterima</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Status Lisensi</label></div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static" style="color:black;">
                                                <?php
                                                    $exp2 = date("Y-m-d");
                                                    if($data['exprd_lcns'] <= $exp2){
                                                        echo '<button type="button" class="btn btn-danger btn-sm">Expired</button>';
                                                    }else if($exp2 >= date('Y-m-d',strtotime('-2 months', strtotime($data['exprd_lcns'])))){
                                                        echo '<button type="button" class="btn btn-warning btn-sm">Warning</button>';
                                                    }else{
                                                        echo '<button type="button" class="btn btn-success btn-sm">OK</button>';
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer" style="margin-top: 5px; background: transparent;">
                                        <a href="lisensi_data.php"><button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-mail-reply"></i> Back
                                        </button></a>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-folder" onclick="return confirm(\'Apakah Anda yakin ingin mengubah data license ?\')"></i> Save Edit
                                        </button>																
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>    
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
		
		<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>List of</strong> Document License
                            </div>
                            <div class="card-body card-block">
                            <!-- upload_lisensi -->
                                <form action="add_uploadfiles.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>" readonly="value">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <input type="text" id="namedoc" name="namedoc" placeholder="Document Name" class="form-control" required>
                                        </div>
                                        <div class="col col-md-6">
                                            <input type="file" name="file" size="50" class="form-control" required/> 
                                        </div>
                                        <div class="col col-md-3">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-upload"></i> Upload
                                            </button>	
                                        </div>
                                    </div>
                                </form>
                                <div class="row form-group">
                                    <div class="col-12 col-md-12">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr align=center>
                                                    <th>No.</th>
                                                    <th>Document Names</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                            $query = mysql_query ("select * from lcs_uploadfile where lcs_lisenid=".$id, $con);
                                                            // cek total row
                                                            $total_row = mysql_num_rows($query);
                                                            if ( $total_row > 0 ) {
                                                                // kalau lebih dari 0, berarti ambil row
                                                                $no = 1;
                                                                $lihat = mysql_query("select * from lcs_uploadfile where lcs_lisenid=".$id);
                                                                while ( $row = mysql_fetch_array($lihat) ) {
                                                                    echo '<tr align=center>';
                                                                    echo '<td>'.$no++.'</td>';
                                                                    echo '<td><a href="gambar/'.$row['lcs_alamat'].'">'.$row['lcs_namafiles'].'</a></td>';
                                                                    echo '<td align=center valign=center>';
                                                                    //del_lisen
                                                                echo '<a href="del_uploadfiles.php?id='.$row['id'].'"class="text-secondary"><i class="fa fa-trash-o" onclick="return confirm(\'Apakah Anda yakin ingin menghapus dokumen ?\')"></i></a>';
                                                                    echo '</td>';
                                                                    echo '</tr>';
                                                                }
                                                            } else { // kalau row = 0, beri keterangan tidak ada data
                                                                echo '<tr align=center><td colspan="8"><h5>Belum Ada Licenses</h5></td></tr>';
                                                            }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
