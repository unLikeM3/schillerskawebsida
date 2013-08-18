<?php 
	require 'connect.php';

	$sql1	= "SELECT * FROM medlemmar";
	while ($row = mysql_fetch_assoc(mysql_query($sql1))) {
		$newyear = $row['arskurs'];
		$persnr = $row['persnr'];
		//if(!mysql_query("UPDATE medlemmar SET arskurs='$newyear' WHERE persnr='$persnr'")){
		//	die("Error updating year");
		//}else{
			echo "<br>Persnr: " . $persnr . "<br>Arskurs: " . $arskurs;
		//}
	}

	echo "<br>" . mysql_num_rows(mysql_query($sql1))



?>