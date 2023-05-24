<?php
	$tgl = date('dmY');
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename= license_closed_$tgl.xls");
	include('dwnld_close.php');
?>