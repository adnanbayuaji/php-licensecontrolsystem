<?php
	$tgl = date('dmY');
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename= license_warning_$tgl.xls");
	$plant=$_GET['p'];
	include('dwnld_warningall.php');
?>