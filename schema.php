<?php 
	header("Access-Control-Allow-Origin: *");
?>
<div class="ui-block-solo"><input type="text" id="pnr" placeholder="YYMMDDXXXX"> </div>
<div class="ui-grid-a">
	<div class="ui-block-a">
		<select id="day">
			<option value="1">Måndag</option>
			<option value="2">Tisdag</option>
			<option value="4">Onsdag</option>
			<option value="8">Torsdag</option>
			<option value="16">Fredag</option>
		</select>
	</div>
	<div class="ui-block-b">
		<select id="period">
	    	<option value="HT">HT</option>
	    	<option value="VT">VT</option>
		</select>
	</div>
</div>
<a href="#" data-role="button" onclick="fetchSchedule(); return false;">Hämta schema</a>
<div id="schedulecontainer" class="schemabild"></div>