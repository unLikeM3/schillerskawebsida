<?php 
	require 'connect.php';

	$sql1	= mysql_query("SELECT * FROM medlemmar");
	while ($row = mysql_fetch_assoc($sql1)) {
		$newyear = $row['arskurs'] +1;
		$persnr = $row['persnr'];
		
		if($newyear > 3){
			$delsql = "DELETE FROM medlemmar WHERE persnr='$persnr'";
		}else{
			if(!mysql_query("UPDATE medlemmar SET arskurs='$newyear' WHERE persnr='$persnr'")){
				die("Error updating year");
			}else{
				echo "<br>Persnr: " . $persnr . "<br>Arskurs: " . $newyear;
			}
		}
	}
?>