<?php
	$host	= 'wp-182898.mysql.binero.se';
	$user	= '182898_pu91310';
	$pass	= 'Sch1llNad';
	$db		= '182898-wp';

	$con = mysql_connect($host, $user, $pass);
	mysql_set_charset("UTF8", $con);
	
	if (!$con) {
		die("Cannot connect to database");
	}else{
		mysql_select_db($db) or die('Cannot select database');
	}

?>