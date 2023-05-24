<?php
require_once 'config.php';
global $con;
include 'indo_date.php';

require_once('phpmailer/classes/class.phpmailer.php');
require_once('phpmailer/classes/class.smtp.php');

$mail = new PHPMailer(true);
	$mail -> IsSMTP();
	
	try{
		$mail -> Host			= "smtp.gmail.com"; //host email server
		$mail -> SMTPDebug		= 0;
		$mail -> SMTPSecure		= "ssl";
		$mail -> SMTPAuth		= true;
		$mail -> Port			= 465;
		$mail -> Username		= ""; //email pengirim
		$mail -> Password		= ""; //password email pengirim
		////$mail -> AddAddress ('brian.mewal@daihatsu.astra.co.id', 'Brian'); //email tujuan1
		//$mail -> AddAddress ('ronald.adiyanto@daihatsu.astra.co.id', 'Ronald Ariyanto'); //email tujuan1		
//$mail -> AddAddress ('gengen.gumilar@daihatsu.astra.co.id', 'Gengen Gumilar'); //email tujuan2
	//$mail -> AddCC ('ferry.nugroho@daihatsu.astra.co.id', 'Ferry Nugroho'); //email cc1
		//$mail -> AddCC ('mohammad.hasan@daihatsu.astra.co.id', 'Fery Adiyanto'); //email cc2
//$mail -> AddCC ('satria.hendra@daihatsu.astra.co.id', 'Hanif Rahardiyan'); //email cc3
		
		
		$lisen_hr = "SELECT * FROM lcs_lisensi WHERE plan LIKE 'HR' ";
		$query_lisen_hr = mysql_query($lisen_hr);
		$count_lisen_hr = mysql_num_rows($query_lisen_hr);
		$lisen_eng	     = "SELECT * FROM lcs_lisensi WHERE exprd_lcns <= now() AND plan LIKE 'HR' ";
		$query_lisen_eng = mysql_query($lisen_eng);
		$count_lisen_eng = mysql_num_rows($query_lisen_eng);
		$lisen_eng_war   		= "SELECT * FROM lcs_lisensi WHERE tgl_war <= now() AND plan LIKE 'HR' ";
		$query_lisen_eng_war	= mysql_query($lisen_eng_war);
		$count_lisen_eng_war	= mysql_num_rows($query_lisen_eng_war);
		$eng_war				= $count_lisen_eng_war - $count_lisen_eng;
		
		$lisen_eng_ok	= ($count_lisen_hr - ($count_lisen_eng + $eng_war));
		
		$laporan	= "<html>";
		$laporan   .= "
				<table border=1 cellspacing=0 cellpadding=0 width=500>
					<tr align=center bgcolor='#3399FF'>
						<th colspan=3><font color=white>List License HR - Human Resources</font></th>
					</tr>
					<tr align=center>
						<th bgcolor='#006600'><font color=white>OK</font></th>
						<th bgcolor='#FFFF33'>Warning</th>
						<th bgcolor='#FF0000'><font color=white>Expired</font></th>
					</tr>
					<tr align=center>
						<td>$lisen_eng_ok Licenses</td>
						<td>$eng_war Licenses</td>
						<td>$count_lisen_eng Licenses</td>
					</tr>
					<tr align=center>
						<td colspan=3><b>$count_lisen_hr Licenses</b></td>
					</tr>
				</table>
		";
		$laporan .="<table  border=1>
		<tr bgcolor=red><td colspan=5><font color=white>List Perijinan Expired</font></td></tr>
		<tr bgcolor=black><td><font color=white>NO</font></td><td><font color=white>ITEM</font></td><td><font color=white>NO IJIN</font></td><td><font color=white>EXP DATE</font></td><td><font color=white>STATUS</font></td></tr>";
		$no=0;
		$cariexpired=mysql_query("SELECT ket_lcns,no_lcns,exprd_lcns, DATEDIFF(exprd_lcns,now()) as remain2 FROM lcs_lisensi WHERE exprd_lcns <= now() AND plan LIKE 'HR' ");
		while($rowexp=mysql_fetch_array($cariexpired))
		{
		$no=$no+1;
		$laporan .="<tr><td>$no</td><td>$rowexp[ket_lcns]</td><td>$rowexp[no_lcns]</td><td><font color=red>$rowexp[exprd_lcns]</font></td><td><font color=red>$rowexp[remain2] hari</font></td></tr>";
		}
		$laporan .="</table>";
		
				$laporan .="<table  border=1>
		<tr bgcolor=yellow><td colspan=5>List Perijinan Warning</td></tr>
		<tr bgcolor=black><td><font color=white>NO</font></td><td><font color=white>ITEM</font></td><td><font color=white>NO IJIN</font></td><td><font color=white>EXP DATE</font></td><td><font color=white>STATUS</font></td></tr>";
		$no=0;
		$cariwar=mysql_query("SELECT ket_lcns,no_lcns,exprd_lcns, DATEDIFF(exprd_lcns,now()) as remain FROM lcs_lisensi WHERE  plan LIKE 'HR'
		and DATEDIFF(lcs_lisensi.exprd_lcns,now()) <= 60 and lcs_lisensi.exprd_lcns >= now()");
		//$remain=mysql_query("select DATEDIFF(exprd_lcns,now()) as remain  from ".$frenConfig_dbprefix."apar");
		while($rowwar=mysql_fetch_array($cariwar)){
		$no=$no+1;
		$laporan .="<tr><td>$no</td><td>$rowwar[ket_lcns]</td><td>$rowwar[no_lcns]</td><td><font color=red>$rowwar[exprd_lcns]</font></td><td><font color=red>$rowwar[remain] hari</font></td></tr>";
		}
		
		$laporan .="</table>";
		
		$laporan .= "Mohon segera meng-update lisensi yang sudah melewati masa berlakunya melalui link dibawah ini.<br><link>http://ga-center.daihatsu.astra.co.id/ehs/ADM5</link>.<br>Untuk informasi lebih lanjut dapat menghubungi via email berikut.<br><link>gaadm.universe@gmail.com</link> - Hari Kusworo";
		$laporan .= "</html>";
		$headmessage			= "Dear Sir/Madam, ";
		$message				= "Licenses Control System mulai mengudara pada 29 Desember 2018.";
		$message2				= "Berikut daftar lisensi Warning dan Expired untuk Human Resources section.";
		$body					= $laporan;
		$messageclose			= "Email ini terkirim secara otomatis melalui LCS, mohon untuk tidak me-reply email ini.";
		$footmessage			= "2018. All Right Reserved | License Control System";
		
		$mail -> SetFrom ('', 'Licenses Control System'); //email pengirim
		$mail -> Subject		= "LCS Information [NO REPLY]";
		$mail -> MsgHtml ('<p><b>'.$headmessage.'</b><br><br>'.$message2.'<br>'.$body.'<br>'.$messageclose.'<br><br><font size="2" style="italic">&copy;'.$footmessage.'</font></p>');
		$mail -> Send();
		
		echo "<script>alert('LCS mail berhasil dikirim.'); window.location = 'index.php'</script>";
	} catch(phpmailerException $e){
		echo "<script>alert('".$e -> errorMessage()."'); window.location = 'index.php'</script>";
	}
?>
<head>
	<link rel="shortcut icon" href="images/logo (2).png">
</head>