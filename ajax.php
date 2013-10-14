<?php 
    require 'connect.php';
    header("Access-Control-Allow-Origin: *");

    $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
    $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

	$query = mysql_query("SELECT * FROM _ngg_pictures WHERE galleryid='1' ORDER BY sortorder DESC LIMIT ".$postnumbers." OFFSET ".$offset);

	while ($row = mysql_fetch_assoc($query)) { ?>

    	<div class="galleryinlagg">

        	<div class="wrapper">

            	<center>
            	    <img src="http://www.schillerskaselevkar.se/wp-content/gallery/galleri/<?php echo $row['filename'] ?>">
            	</center> 

            	<div class="description">
            	    <p><?php echo $row['description']; ?></p>
            	</div>
            
            	<div class="meta">
                
            	</div>

        	</div>

    	</div>
	<?php }
?>