<?php
// sertakan berkas konfigurasi
require_once 'config.php';

global $con;
session_start();
if ( !empty($_GET['id']) ) {
    $query = mysql_query("DELETE FROM lcs_login WHERE id = '{$_GET['id']}'",
                          $con);
}

	echo "<script>alert('User berhasil di hapus.'); window.location = 'user.php'</script>";
?>