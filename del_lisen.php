<?php
// sertakan berkas konfigurasi
require_once 'config.php';

global $con;
session_start();
if ( !empty($_GET['id']) ) {
    $query = mysql_query("DELETE FROM lcs_lisensi WHERE id = '{$_GET['id']}'",
                          $con);
}

	echo "<script>alert('Lisensi berhasil di hapus.'); window.location = 'lisensi_data.php'</script>";
?>