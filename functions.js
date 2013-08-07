var fetchSchedule = function(){
	var url = "http://www.novasoftware.se/ImgGen/schedulegenerator.aspx?format=png&schoolid=85420/sv-se&type=3&id=" + $('#input').val() + "&period=VT&week=&mode=0&printer=1&colors=1&head=1&clock=1&foot=1&day=0&width=1240&height=1753&count=1&decrypt=0";
	$('#frame').attr('src', url);
	if ($('#input').val().length == 10) {
		$('#frame').slideDown();
	};
};