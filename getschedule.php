<script type="text/javascript" src="[insert_php] echo get_template_directory_uri();[/insert_php]/functions.js"></script>
<div id="container" class="container">
	<div class="row">
		<div class="span1">Personnummer:</div>
		<div class="span2">
			<input class="span2" id="input" type="text"  placeholder="YYMMDDXXXX">
		</div>
		<div class="span1">
			<select id="select" class="span1">
				<option value="HT">HT</option>
				<option value="VT">VT</option>
			</select>
		</div>
		<div class="span2">
			<button class="btn btn-warning" onclick="fetchSchedule(); return false" style="float:left;">Hämta!</button>
		</div>
	</div>
</div>
<img id="frame" style="display: none;" src="">
