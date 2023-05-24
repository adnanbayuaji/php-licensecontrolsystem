<!doctype html>
<?php
require_once 'config.php';
global $con;
include 'indo_date.php';
?>

<html class="no-js" lang="en">

<head>
	<title>LCS - FTI</title>
    <link rel="shortcut icon" href="images/logo (2).png">
</head>

<body>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered" border=1 cellspacing=0 cellpadding=0>
                                    <thead>
                                        <tr>
                                            <th bgcolor="#99CCFF">No.</th>
                                            <th bgcolor="#99CCFF">Section</th>
                                            <th bgcolor="#99CCFF">Jenis Lisensi</th>
                                            <th bgcolor="#99CCFF">No.Lisensi</th>
											<th bgcolor="#99CCFF">Deskripsi</th>
											<th bgcolor="#99CCFF">Atas Nama</th>
											<th bgcolor="#99CCFF">Penerbit</th>
											<th bgcolor="#99CCFF">Tanggal Terbit</th>
											<th bgcolor="#99CCFF">Tanggal Expired</th>
											<th bgcolor="#99CCFF">Status</th>
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
														$exp2 = date("Y-m-d");
														$lihat = mysql_query("select * from lcs_lisensi where exprd_lcns <= now()");
														while ( $row = mysql_fetch_array($lihat) ) {
															echo '<tr align=center>';
															echo '<td>'.$no++.'</td>';
															echo '<td>'.$row['plan'].'</td>';
															echo '<td>'.$row['jns_srtfkt'].'</td>';
															echo '<td>'.$row['no_lcns'].'</td>';
															echo '<td>'.$row['ket_lcns'].'</td>';
															echo '<td>'.$row['nm_srtfkt'].'</td>';
															echo '<td>'.$row['pnrbt_srtfkt'].'</td>';
															echo '<td>'.TanggalIndo2($row['tgl_lcns']).'</td>';
															echo '<td>'.TanggalIndo2($row['exprd_lcns']).'</td>';
															echo '<td bgcolor=red>';
																if($row['exprd_lcns'] <= $exp2){
																	echo '<font color=white>Expired</font>';
																}else if($exp2 >= date('Y-m-d',strtotime('-2 months', strtotime($row['exprd_lcns'])))){
																	echo 'Warning';
																}else{
																	echo 'OK';
																};
															echo '</td>';
															echo '</tr>';
														}
													} else { // kalau row = 0, beri keterangan tidak ada data
														echo '<tr align=center><td colspan="8"><h5>Belum Ada License Expired</h5></td></tr>';
													}
										?>
                                    </tbody>
                                </table>
</body>

</html>
