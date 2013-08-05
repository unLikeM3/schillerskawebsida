<?php 
	$url = "";
	if (isset($_GET['pnr'])) {
		$url = "http://www.novasoftware.se/ImgGen/schedulegenerator.aspx?format=png&schoolid=85420/sv-se&type=3&id=". $_GET['pnr'] ."&period=VT&week=&mode=0&printer=1&colors=1&head=1&clock=1&foot=1&day=0&width=1240&height=1753&count=1&decrypt=0";
	}
?>

<h1>Schema</h1>
<form action="getschedule.php" method="GET">
	Personnummer: <input type="text" name="pnr" placeholder="XXMMDDXXXX">
</form>
<?php if(isset($_GET['pnr'])){ ?>
	<iframe src="<?php echo $url; ?>" style="width:100%; height:1755px; border:0px;"></iframe>
<?php } ?>