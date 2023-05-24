<?php
//ob_start();
require_once('config.php');

$username = $_POST['username'];
$plan = $_POST['plan'];
$pass = $_POST['pass'];

if(empty($username) || empty($pass) || empty($plan)){
	echo "<script>alert('Akun Anda tidak terdaftar, silahkan hubungi Admin.'); window.location = 'login.php'</script>";
}
else{
	$query = mysql_query("SELECT * FROM lcs_login WHERE username = '$username' AND pass = '$pass' AND plan = '$plan'");
	
	$cek = mysql_num_rows($query);
	if($cek == 1){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['pass'] = $pass;
		while($ambil = mysql_fetch_array($query)){
			$hak=$ambil['hak_akses'];
			$plan=$ambil['plan'];
			$nama=$ambil['nama'];
		}
		// if($hak == "User" &&  $plan == "HR"){
		// 		echo "<script>alert('Selamat Datang $nama - $plan'); window.location = 'HR/index_HR.php'</script>";
		// }
		// else if($hak == "User" &&  $plan == "GA"){
		// 		echo "<script>alert('Selamat Datang $nama - $plan'); window.location = 'GA/index_GA.php'</script>";
		// }
		// else 
		if($hak == "Admin"){
			echo "<script>alert('Selamat Datang $nama - $plan'); window.location = 'index.php'</script>";
		}
		else{
			echo "<script>alert('Kombinasi Username dan Password Anda tidak valid, silahkan Login kembali.'); window.location = 'login.php'</script>";
		}	
	}
	else{
		echo "<script>alert('Akun Anda tidak terdaftar, silahkan hubungi Admin.'); window.location = 'login.php'</script>";
	}
}
//ob_end_flush();
?>