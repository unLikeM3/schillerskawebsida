<?php 
	header("Access-Control-Allow-Origin: *");
?>

<div>
	<div class="ui-block-solo"> <input type="text" id="fName" placeholder="Förnamn"> </div>
	<div class="ui-block-solo"> <input type="text" id="lName" placeholder="Efternamn"> </div>
	<div class="ui-block-solo"> <input type="text" id="persnr" placeholder="Personnummer (YYMMDDXXXX)"> </div>
	<div class="ui-block-solo"> <input type="text" id="telnr" placeholder="Telefonnummer (07XXXXXXXX)"> </div>
	<div class="ui-block-solo"> <input type="email" id="email" placeholder="du@nagat.se"> </div>
	<div class="ui-block-solo">
		<select id="arskurs">
			<option value="1">Årskurs 1</option>
			<option value="2">Årskurs 2</option>
			<option value="3">Årskurs 3</option>
		</select>
	</div>
	<div class="ui-block-solo">
		<label><input type="checkbox" name="checkbox-0" id="acceptTerms" value="1" /> Jag accepterar stadgarna </label>
	</div>
	<div class="ui-block-solo">
		<button disabled id="blimedlemsub" onclick="addMember(); return false;">Bli Medlem</button>
	</div>
</div>

	<a id="lnkpopup" href="#popup" data-rel="popup" data-position-to="window" style="display:none;"></a>
    <div id="popup" data-role="popup" data-overlay-theme="a" class="ui-content">
        <p>POPUUUUP</p>
    </div> 

<script type="text/javascript">
	var checkbox = $('#acceptTerms');
	var subbtn = $('#blimedlemsub');

	checkbox.change(function(){
		if (checkbox.attr('checked')) {
			subbtn.button('enable');
		}else{
			subbtn.button('disable');
		}
	});
</script>
