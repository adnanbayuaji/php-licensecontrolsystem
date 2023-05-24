<?php
require_once 'config.php';
// define('DOCROOT', $_SERVER['DOCUMENT_ROOT'].'/lcs');
//tangkap data dari form

$ekstensi = array('pdf','xls','xlsx','docx','doc','ppt','pptx');
$nama = $_FILES['file']['name'];
$x = explode('.',$nama);
$eksten = strtolower(end($x));
$file_tmp = $_FILES['file']['tmp_name'];
$size = $_FILES['file']['size'];						
            
if(in_array($eksten, $ekstensi)==true)
{
    if(($size >= 2097152) || ($size == 0))
    {
        echo "<script>alert('Format yang dimasukkan melebihi Size > 2MB!');window.location.href='close_lisen.php?id=".$_POST['id']."';</script>";
    }
    else
    {
        move_uploaded_file($file_tmp,$_SERVER['DOCUMENT_ROOT'].'/ehs/lcs/gambar/'.$nama);
        //update data di database sesuai id
        $query = mysql_query("INSERT INTO lcs_uploadfile (lcs_lisenid, lcs_namafiles, lcs_alamat) VALUES ('".$_POST['id']."', '".$_POST['namedoc']."', '".$nama."')") or die(mysql_error());
        
        if ($query) 
        {
            echo "<script>alert('Data File berhasil di tambahkan.'); window.location = 'close_lisen.php?id=".$_POST['id']."'</script>";
        }
    }
}
else
{
    echo "<script>alert('Format yang dimasukkan salah!');window.location.href='close_lisen.php?id=".$_POST['id']."';</script>";
}

// $id = $_POST['id'];
// $jns_srtfkt = $_POST['jns_srtfkt'];
// $no_lcns = $_POST['no_lcns'];
// $ket_lcns = $_POST['ket_lcns'];
// $nm_srtfkt = $_POST['nm_srtfkt'];
// $pnrbt_srtfkt = $_POST['pnrbt_srtfkt'];
// $tgl_lcns = $_POST['tgl_lcns'];
// $exprd_lcns = $_POST['exprd_lcns'];
// $tgl_war = date('Y-m-d',strtotime('-2 months', strtotime($_POST['exprd_lcns'])));
 
// //update data di database sesuai id
// $query = mysql_query("UPDATE lcs_lisensi SET jns_srtfkt='$jns_srtfkt', no_lcns='$no_lcns', ket_lcns='$ket_lcns', nm_srtfkt='$nm_srtfkt', pnrbt_srtfkt='$pnrbt_srtfkt', tgl_lcns='$tgl_lcns', exprd_lcns='$exprd_lcns', tgl_war='$tgl_war' WHERE id='$id'") or die(mysql_error());
 
// if ($query) 
// {
//     echo "<script>alert('Data license berhasil di update.'); window.location = 'lisensi_data.php'</script>";
// }
?>