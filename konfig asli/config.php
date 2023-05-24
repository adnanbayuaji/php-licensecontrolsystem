<?php
	$host = '127.0.0.1';
	$user = 'ga-ehs.ga-center';
	$dbname = 'ga_ehs';
	$pass = '64-3Hs';
	$con = mysql_connect ($host, $user, $pass) or die ('Your conncetion is lost ..');
	$dbselect = mysql_select_db ($dbname);
?>