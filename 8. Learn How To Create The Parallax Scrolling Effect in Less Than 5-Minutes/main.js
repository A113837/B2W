$(function(){

	var $window = $(window);

	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); //assigining the object

		$(window).scroll(function(){
			//scroll the  bg at  var speed
			//the  yPos is a negative value because we're scrolling it up

			var yPos = -($window.scrollTop()/$bgobj.data('speed'));

			//put together our final bg position
			var coords = '50%' + yPos + 'px';

			//move the bg
			$bgobj.css({backgroundPosition: coords});
		});
	});
});