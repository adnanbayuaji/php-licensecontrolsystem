<?php
require_once 'config.php';

//tangkap data dari form
if (ISSET($_POST['edit_user'])){
	$id = $_POST['id'];
	$npk = $_POST['npk'];
	$hak_akses = $_POST['hak_akses'];
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
		echo "<script>alert('Password baru yang Anda masukkan tidak sesuai dengan konfirmasi password.'); window.location = 'user_edit.php?id=".$id."'</script>";
	}else if($hasil >= 1){
		$query = mysql_query("UPDATE lcs_login SET npk='$npk', hak_akses='$hak_akses', plan='$plan', nama='$nama', username='$username', email='$email', pass='$pass' WHERE id='$id'") or die(mysql_error());
		if ($query) 
		{
			echo "<script>alert('Data profile atas nama ".$_POST['nama']." berhasil di perbarui.'); window.location = 'user.php'</script>";
		}else{
			echo "<script>alert('Data profile atas nama ".$_POST['nama']." gagal di perbarui.'); window.location = 'user_edit.php?id=".$id."'</script>";
		}
	}else{
		echo "<script>alert('Password lama yang Anda masukkan tidak sesuai.'); window.location = 'user_edit.php?id=".$id."'</script>";
	}
}
?>