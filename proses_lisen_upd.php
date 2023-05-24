<?php
require_once 'config.php';
global $con;

$plan = $_POST['plan'];
$jns_srtfkt = $_POST['jns_srtfkt'];
$no_lcns = $_POST['no_lcns'];
$no_lcns_new = $_POST['no_lcns'];
$ket_lcns = $_POST['ket_lcns'];
$nm_srtfkt = $_POST['nm_srtfkt'];
$pnrbt_srtfkt = $_POST['pnrbt_srtfkt'];
$tgl_lcns = $_POST['tgl_lcns'];
$exprd_lcns = $_POST['exprd_lcns'];
$tgl_war = date('Y-m-d',strtotime('-2 months', strtotime($_POST['exprd_lcns'])));
$stat = $_POST['stat'];
$st_aju = 'Belum Diajukan';

$plan_new = $_POST['plan'];
$no_lcns_old = $_POST['no_lcns_old'];
$tgl_input = date('Y-m-d');
$ket_new = $_POST['ket_new'];

$query = mysql_query("INSERT INTO lcs_lisensi (st_aju, plan, jns_srtfkt, no_lcns, no_lcns_old, no_lcns_new, ket_lcns, nm_srtfkt, pnrbt_srtfkt, tgl_lcns, exprd_lcns, tgl_war, stat) VALUES ('$st_aju', '$plan', '$jns_srtfkt', '$no_lcns', '$no_lcns_old','$no_lcns_new', '$ket_lcns', '$nm_srtfkt', '$pnrbt_srtfkt', '$tgl_lcns', '$exprd_lcns', '$tgl_war', '$stat')") or die(mysql_error());
$query .= mysql_query("INSERT INTO lcs_new (plan_new, no_lcns_new, no_lcns_old, tgl_input, ket_new) VALUES ('$plan_new', '$no_lcns', '$no_lcns_old', '$tgl_input', '$ket_new')") or die(mysql_error());

if ($query) 
{
    echo "<script>alert('License berhasil ditambah.'); window.location = 'form_lisen_upd.php'</script>";
}
?>