<?php
require_once 'config.php';

//tangkap data dari form

$id = $_POST['id'];
$no_lcns_new = $_POST['no_lcns_new'];
$stat = $_POST['stat'];
$ket = $_POST['ket'];
$tgl_close = $_POST['tgl_close'];
 
//update data di database sesuai id
$query = mysql_query("update lcs_lisensi set no_lcns_new='$no_lcns_new', stat='$stat', ket='$ket', tgl_close='$tgl_close' where id='$id'") or die(mysql_error());
 
if ($query) 
{
    echo "<script>alert('License berhasil di closed.'); window.location = 'lisensi_close.php'</script>";
}
?>