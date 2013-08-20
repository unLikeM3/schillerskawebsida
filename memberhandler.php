<?php 
	require 'connect.php';

	$fname = $_POST['fornamn'];
	$lname = $_POST['efternamn'];
	$pnr = $_POST['persnr'];
	$email = $_POST['email'];
	$arskurs = $_POST['arskurs'];

	$sql = "INSERT INTO medlemmar VALUES ('$fname', '$lname', '$pnr', '$email', '$arskurs')";

	if($fname != null && $lname != null){
		if (is_numeric($pnr)) {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				if (mysql_query($sql)) {
					echo "Du är nu medlem! <br> Klicka <a href='../../../'>här</a> för att gå vidare!";
				}else{
					die("Final: " . mysql_error());
				}
			}else{
				die('Du måste fylla i din email!');
			}
		}else {
			die('Personnummer måste vara i YYYYMMDDXXXX-format!');
		}
	}else{
		die('Du måste fylla i förnamn/efternamn!');
	}
?>