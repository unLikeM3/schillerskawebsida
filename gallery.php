		<?php header("Access-Control-Allow-Origin: *"); ?>

		<div id="pager"></div>

        <script type="text/javascript">
            $('#pager').scrollPagination({
                nop: 5,
                offset: 0,
                error: 'Inga fler bilder!',
                delay: 500,
                scroll: true
            }, "http://www.schillerskaselevkar.se/ajax.php");
        </script>