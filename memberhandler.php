<?php 
	require 'connect.php';
	header("Access-Control-Allow-Origin: *");

	$fname = 	mysql_real_escape_string($_POST['fornamn']);
	$lname = 	mysql_real_escape_string($_POST['efternamn']);
	$pnr = 		mysql_real_escape_string($_POST['persnr']);
	$email = 	mysql_real_escape_string($_POST['email']);
	$arskurs = 	mysql_real_escape_string($_POST['arskurs']);
	$telnr = 	mysql_real_escape_string($_POST['telnr']);





	$sql = "INSERT INTO medlemmar VALUES ('$fname', '$lname', '$pnr', '$email', '$arskurs', '$telnr')";
	$sql2= "SELECT * FROM medlemmar WHERE persnr='$pnr'";

	$checkpnr = mysql_num_rows(mysql_query($sql2));

	if($fname != null && $lname != null){
		if (is_numeric($pnr) && (strlen($pnr) == 10)) {
			if($checkpnr == 0){
				if(is_numeric($telnr)){
					if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
						if (mysql_query($sql)) {
							echo "Du är nu medlem!";
						}else{
							die("Final: " . mysql_error());
						}
					}else{
						die('Du måste fylla i din email!');
					}
				}else{
					die("Felaktigt telefonnr");
				}
			}else{
				die("Du är redan inskriven!");
			}
		}else {
			die('Personnummer måste vara i YYMMDDXXXX-format!');
		}
	}else{
		die('Du måste fylla i förnamn/efternamn!');
	}
?>