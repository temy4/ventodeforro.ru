$(document).ready(function() {
	var bw = $('#wrapper').width();
	var cm = $('#content').css('margin', '0px');
	var mm = $('#main-menu').width();
	var r = $(screen).attr('width') / $('#wrapper').width();
	
	w_resize(bw, cm, mm)
	
	$(window).resize(function() {
		w_resize(bw, cm, mm)
	});
});

function w_resize(bw, cm, mm){
	if( $(screen).attr('width') < bw || $(window).width() < bw ){
		$('#content').css('margin', '0px');
		$('#body').width($(window).width());
		$('#wrapper').width($(window).width());
		$('#footer').width($(window).width());
		$('div.title').addClass('mobile');
		$('#main-menu li').addClass('mobile');
		$('#main-menu').width($(window).width());
		$('#main-menu').css('float', 'right');
		$('div.title').width($(window).width() - 70);
		// $('div.title').css('margin-left', ($('#wrapper').width()+70)/2 - 135);
		$('#main-body').width(bw);
	}
	else {
		$('#content').css('margin', cm);
		$('#body').width(bw);
		$('#wrapper').width(bw);
		$('#footer').width(bw);
		$('div.title').removeClass('mobile');
		$('#main-menu li').removeClass('mobile');
		$('#main-menu').width(mm);
		$('#main-menu').css('text-align', 'left');
		$('div.title').css('margin-left', '-25px');
		$('div.title').width(200);
	}
}