<?php 
	require 'connect.php';
	header("Access-Control-Allow-Origin: *");

    $query = mysql_query("SELECT * FROM _ngg_pictures WHERE galleryid='1' ORDER BY imagedate DESC LIMIT 5"); 

	

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
	<?php } ?>
    <a href="#" data-role="button" onclick="switchPage(1); return false;">Load more</a>