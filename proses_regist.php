<?php
require_once 'config.php';

//tangkap data dari form
if (ISSET($_POST['regist'])){
	$npk = $_POST['npk'];
	$hak_akses = $_POST['hak_akses'];
	$plan = $_POST['plan'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass1 = $_POST['pass1'];
	$pass = $_POST['pass'];
		
	if (($_POST['pass1']) != ($_POST['pass'])){
		echo "<script>alert('Password yang Anda masukkan tidak sesuai dengan konfirmasi password.'); window.location = 'form_regist.php'</script>";
	}else{
		$query = mysql_query("INSERT INTO lcs_login (npk, hak_akses, nama, username, plan, email, pass) VALUES ('$npk', '$hak_akses', '$nama', '$username', '$plan', '$email', '$pass')") or die(mysql_error());
		if ($query) 
		{
			echo "<script>alert('User baru berhasil ditambahkan.'); window.location = 'form_regist.php'</script>";
		}else{
			echo "<script>alert('User baru gagal ditambahkan.'); window.location = 'form_regist.php'</script>";
		}
	}
}
?>