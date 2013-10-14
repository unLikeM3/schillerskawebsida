<script type="text/javascript">
	console.log("Loaded");
	var checkbox = $('#acceptTerms');
	var subbtn = $('#blimedlemsub');

	checkbox.change(function(){
		if (checkbox.attr('checked')) {
			subbtn.button('enable');
			console.log("Checked");
		}else{
			subbtn.button('disable');
			console.log("Disabled");
		}
	});
</script>
