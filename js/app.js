$(document).ready(function(){
	$("#fb-like").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
		$(this).addClass('done');
	});
	var readyInterval = setInterval(function(){
		if($('#fb-like > .fb-like').attr('fb-xfbml-state') == 'rendered'){
			$('body').addClass('ready');
			clearInterval(readyInterval);
		}
	},100);
	$('.print').click(function(){
		event.preventDefault();
		window.print();
	})
});