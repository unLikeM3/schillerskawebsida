<?php 
	require 'connect.php';

	$sql1	= mysql_query("SELECT * FROM medlemmar2");
	while ($row = mysql_fetch_assoc($sql1)) {
		$newyear = $row['arskurs'] +1;
		$persnr = $row['persnr'];
		
		if($newyear > "3"){
			$delsql = "DELETE FROM medlemmar2 WHERE persnr='$persnr'";
			if(!mysql_query($delsql)){
				die("Error deleting from table");
			}
		}else{
			if(!mysql_query("UPDATE medlemmar2 SET arskurs='$newyear' WHERE persnr='$persnr'")){
				die("Error updating year");
			}else{
				
			}
		}
		echo "<br>Persnr: " . $persnr . "<br>Arskurs: " . $newyear;
	}


	$mailsql = mysql_query("SELECT * FROM medlemmar2");
	$emails = array();

	while ($row = mysql_fetch_assoc($mailsql)) {
		$emails[] = $row['email'];
	}

	$emailstring = implode(", ", $emails);

	$to = $emailstring;
	$subject = "HTML email";

	$message = "
		<html>
		<head>
		<title>HTML email</title>
		</head>
		<body>
		<p>This email contains HTML Tags!</p>
		<table>
		<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		</tr>
		<tr>
		<td>John</td>
		<td>Doe</td>
		</tr>
		</table>
		</body>
		</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";

	// More headers
	$headers .= 'From: <webmaster@schillerskaselevkar.se>' . "\r\n";

	mail($to,$subject,$message,$headers);
?>