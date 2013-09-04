<?php 
    require 'connect.php';
	header("Access-Control-Allow-Origin: *");

    $limit = 5;
    $switchNext = 1;
    $switchPrevious = 0;

    
    if(isset($_POST['page'])){
        $newpage = $_POST['page'];
        $offset = $newpage*$limit;

        $count = mysql_num_rows(mysql_query("SELECT * FROM _ngg_pictures WHERE galleryid='1'"));

        if($newpage < $count/$limit){
            $switchNext = 1;
        }else{
            $switchNext = 0;
        }

        if($newpage > 0){
            $switchPrevious = 1;
        }else{
            $switchPrevious = 0;
        }

        $endoffset = $count-$limit;

        if($offset > $endoffset){

        }else{
            $query = mysql_query("SELECT * FROM _ngg_pictures WHERE galleryid='1' ORDER BY imagedate DESC LIMIT $limit OFFSET $offset");  
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
        } 
    }
?>	