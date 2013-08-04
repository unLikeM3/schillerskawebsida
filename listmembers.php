<meta charset="utf-8">
<?php 
	require 'connect.php';

	$sql = mysql_query("SELECT * FROM medlemmar");

	if($sql){ ?>
	<table>
		<tr>
			<th>Förnamn</th>
			<th>Efternamn</th>
			<th>Personnummer</th>
			<th>Email</th>
		</tr>
		<?php while($row = mysql_fetch_assoc($sql)){ ?>
			<tr>
				<td><?php echo $row['firstname']; ?></td>
				<td><?php echo $row['lastname']; ?></td>
				<td><?php echo $row['persnr']; ?></td>
				<td><?php echo $row['email']; ?></td>
			</tr>
		<?php } ?>
	</table>
	<?php }else{
		echo "MySQL error: " . mysql_error();
	}
?>