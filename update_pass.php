<?php
require_once 'config.php';

//tangkap data dari form
if (ISSET($_POST['submit_ganti'])){
	$id = $_POST['id'];
	$npk = $_POST['npk'];
	$plan = $_POST['plan'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$pass_old = $_POST['pass_old'];
	$pass_new = $_POST['pass_new'];
	
	$query_log = "SELECT pass FROM lcs_login WHERE id='$id' AND pass='$pass_old'";
	$sql_log = mysql_query($query_log);
	$hasil = mysql_num_rows($sql_log);
	
	if (($_POST['pass']) != ($_POST['pass_new'])){
		echo "<script>alert('Password baru Anda tidak sesuai dengan konfirmasi password.'); window.location = 'pass.php'</script>";
	}else if($hasil >= 1){
		$query = mysql_query("UPDATE lcs_login SET npk='$npk', plan='$plan', nama='$nama', username='$username', email='$email', pass='$pass' WHERE id='$id'") or die(mysql_error());
		if ($query) 
		{
			echo "<script>alert('Data profile Anda berhasil di perbarui.'); window.location = 'pass.php'</script>";
		}else{
			echo "<script>alert('Data profile Anda gagal di perbarui.'); window.location = 'pass.php'</script>";
		}
	}else{
		echo "<script>alert('Password lama yang Anda masukkan tidak sesuai.'); window.location = 'pass.php'</script>";
	}
}
?>