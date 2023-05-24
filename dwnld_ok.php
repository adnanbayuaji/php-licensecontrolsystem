<?php
	$tgl = date('dmY');
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename= license_ok_$tgl.xls");
	$plant=$_GET['p'];
	include('dwnld_okall.php');
?>