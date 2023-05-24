<?php
require_once 'config.php';
global $con;

$plan = $_POST['plan'];
$jns_srtfkt = $_POST['jns_srtfkt'];
$no_lcns = $_POST['no_lcns'];
$ket_lcns = $_POST['ket_lcns'];
$nm_srtfkt = $_POST['nm_srtfkt'];
$pnrbt_srtfkt = $_POST['pnrbt_srtfkt'];
$tgl_lcns = $_POST['tgl_lcns'];
$exprd_lcns = $_POST['exprd_lcns'];
$ket2 = $_POST['ket2'];
$st_aju = 'Belum Diajukan';
$tgl_war = date('Y-m-d',strtotime('-2 months', strtotime($_POST['exprd_lcns'])));
$stat = $_POST['stat'];

$query = mysql_query("INSERT INTO lcs_lisensi (st_aju, plan, jns_srtfkt, no_lcns, ket_lcns, nm_srtfkt, pnrbt_srtfkt, tgl_lcns, exprd_lcns, tgl_war, stat,ket) VALUES ('$st_aju', '$plan', '$jns_srtfkt', '$no_lcns', '$ket_lcns', '$nm_srtfkt', '$pnrbt_srtfkt', '$tgl_lcns', '$exprd_lcns', '$tgl_war', '$stat','$ket2')") or die(mysql_error());

if ($query) 
{
    echo "<script>alert('License berhasil ditambah.'); window.location = 'form_lisen.php'</script>";
}
?>