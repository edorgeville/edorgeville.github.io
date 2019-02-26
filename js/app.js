$(document).ready(function(){
	$("#fb-like").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
		$(this).addClass('done');
	});
	
         $('body').addClass('ready');

	$('.print').click(function(){
		event.preventDefault();
		window.print();
	});
	checkMore();
});

$( window ).on( 'hashchange', function( e ) {
	checkMore();
} );



function checkMore(){
	if (window.location.hash.substr(1) == "more"){
		$('body').addClass('show-more');
	} else {
		$('body').removeClass('show-more');
	}
}
