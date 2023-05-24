<?php
require_once 'config.php';
// define('DOCROOT', $_SERVER['DOCUMENT_ROOT'].'/lcs');
//tangkap data dari form

$query = mysql_query ("select * from lcs_uploadfile where id=".$_GET['id'], $con);
// cek total row
while ( $row = mysql_fetch_array($query) )
{
    $lisen_id = $row['lcs_lisenid'];
    
    // Use unlink() function to delete a file  
    if (!unlink($_SERVER['DOCUMENT_ROOT'].'/ehs/lcs/gambar/'.$row['lcs_alamat'])) {  
        echo ($row['lcs_alamat']." cannot be deleted due to an error");  
    }  
    else {  
        echo ($row['lcs_alamat']." has been deleted");  
    } 

    $query = mysql_query ("delete from lcs_uploadfile where id=".$_GET['id'], $con);
    if ($query) 
    {
        echo "<script>alert('Data File berhasil di hapus.'); window.location = 'close_lisen.php?id=".$lisen_id."'</script>";
    }
    else
    {
        echo "<script>alert('Data gagal di hapus.'); window.location = 'close_lisen.php?id=".$lisen_id."'</script>";
    }

}
?>