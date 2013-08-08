var fetchSchedule = function(){
	var url = "http://www.novasoftware.se/ImgGen/schedulegenerator.aspx?format=png&schoolid=85420/sv-se&type=3&id=" + $('#input').val() + "&period="+ $('#select').val() +"&week=&mode=0&printer=0&colors=1&head=1&clock=1&foot=1&day=0&width="+ $('#container').width() +"&height=800&count=1&decrypt=0";
	$('#frame').attr('src', url);
	if ($('#input').val().length == 10) {
		$('#frame').slideDown();
	}else{
		var url = "error.html";
		$('#frame').attr('src', url);
		$('#frame').show();
	}
};