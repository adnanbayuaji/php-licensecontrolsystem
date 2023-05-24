<?php
	$tgl = date('dmY');
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename= license_all_$tgl.xls");
	include('dwnld_all.php');
?>