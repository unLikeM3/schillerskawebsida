<meta charset="utf-8">
<?php 
	require 'connect.php';

	$sql = mysql_query("SELECT * FROM medlemmar");

	if($sql){ ?>
	<table border="1px solid black">
		<tr>
			<th>Förnamn</th>
			<th>Efternamn</th>
			<th>Personnummer</th>
			<th>Email</th>
		</tr>
		<?php while($row = mysql_fetch_assoc($sql)){ ?>
			<tr>
				<td border="1px solid black"><?php echo $row['firstname']; ?></td>
				<td border="1px solid black"><?php echo $row['lastname']; ?></td>
				<td border="1px solid black"><?php echo $row['persnr']; ?></td>
				<td border="1px solid black"><?php echo $row['email']; ?></td>
				<td border="1px solid black"><?php echo $row['telnr']; ?></td>
				<td border="1px solid black"><?php echo $row['arskurs']; ?></td>
			</tr>
		<?php } ?>
	</table>
	<?php }else{
		echo "MySQL error: " . mysql_error();
	}
?>