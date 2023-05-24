<?php
  session_start();
  session_destroy();
  
	echo "<script>alert('Terimakasih telah menggunankan LC System.'); window.location = 'login.php'</script>";
?>