<?php 
	require 'connect.php';
	header("Access-Control-Allow-Origin: *");

	$fname = 	mysql_real_escape_string($_POST['fornamn']);
	$lname = 	mysql_real_escape_string($_POST['efternamn']);
	$pnr = 		mysql_real_escape_string($_POST['persnr']);
	$email = 	mysql_real_escape_string($_POST['email']);
	$arskurs = 	mysql_real_escape_string($_POST['arskurs']);
	$telnr = 	mysql_real_escape_string($_POST['telnr']);
	$co = 		mysql_real_escape_string($_POST['co']);
	$adress = 	mysql_real_escape_string($_POST['adress']);
	$ort =		mysql_real_escape_string($_POST['ort']);
	$alttelnr = mysql_real_escape_string($_POST['alttelnr']);
	$kon = 		mysql_real_escape_string($_POST['kon']);


	if($co == null){
		$co = "-";
	}
	if($alttelnr == null){
		$alttelnr = "-";
	}


	$sql = "INSERT INTO medlemmar VALUES ('$fname', '$lname', '$pnr', '$email', '$arskurs', '$telnr', '$co', '$adress', '$ort', '$alttelnr', '$kon')";
	$sql2= "SELECT * FROM medlemmar WHERE persnr='$pnr'";

	$checkpnr = mysql_num_rows(mysql_query($sql2));

	if($fname != null && $lname != null){
		if (is_numeric($pnr) && (strlen($pnr) == 10)) {
			if($checkpnr == 0){
				if(is_numeric($telnr)){
					if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
						if ($adress != null) {
							if ($ort != null) {
								if (mysql_query($sql)) {
									echo "Du är nu medlem!";
								}else{
									die("Final: " . mysql_error());
								}
							}else{
								echo "Du måste fylla i ort!";
							}
						}else{
							echo "Du måste fylla i adress!";
						}
					}else{
						die('Du måste fylla i din email!');
					}
				}else{
					die("Felaktigt telefonnr");
				}
			}else{
				die("Du är redan inskriven! "+ $checkpnr);
			}
		}else {
			die('Personnummer måste vara i YYMMDDXXXX-format!');
		}
	}else{
		die('Du måste fylla i förnamn/efternamn!');
	}
?>