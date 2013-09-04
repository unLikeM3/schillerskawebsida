		<?php header("Access-Control-Allow-Origin: *"); ?>

		<div id="pagerpost"></div>

        <script type="text/javascript">
            $('#pagerpost').scrollPagination({
                nop: 10,
                offset: 0,
                error: 'Inga fler inlägg!',
                delay: 500,
                scroll: true
            }, "http://www.schillerskaselevkar.se/loadposts.php");
        </script>