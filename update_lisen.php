<?php
require_once 'config.php';

//tangkap data dari form

$id = $_POST['id'];
$jns_srtfkt = $_POST['jns_srtfkt'];
$no_lcns = $_POST['no_lcns'];
$ket_lcns = $_POST['ket_lcns'];
$nm_srtfkt = $_POST['nm_srtfkt'];
$pnrbt_srtfkt = $_POST['pnrbt_srtfkt'];
$tgl_lcns = $_POST['tgl_lcns'];
$exprd_lcns = $_POST['exprd_lcns'];
$st_aju = $_POST['st_aju'];
$ket2=$_POST['ket2'];
$tgl_war = date('Y-m-d',strtotime('-2 months', strtotime($_POST['exprd_lcns'])));
 
//update data di database sesuai id
$query = mysql_query("UPDATE lcs_lisensi SET st_aju='$st_aju', jns_srtfkt='$jns_srtfkt', no_lcns='$no_lcns', ket_lcns='$ket_lcns', nm_srtfkt='$nm_srtfkt', pnrbt_srtfkt='$pnrbt_srtfkt', tgl_lcns='$tgl_lcns', exprd_lcns='$exprd_lcns', tgl_war='$tgl_war', ket='$ket2' WHERE id='$id'") or die(mysql_error());
 
if ($query) 
{
    echo "<script>alert('Data license berhasil di update.'); window.location = 'index.php'</script>";
}
?>