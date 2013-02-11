var election = {
	init: function() {
		$('#nav a').click( function() {
			$('#nav .active').removeClass('active');
			$(this).parent().addClass('active');
			$('.contentSection.active').slideUp().removeClass('active');
			$($(this).attr('href')).slideDown().addClass('active');
			return false;
		});
				
		$('.post ul.nav a').click( function() {
			$(this).parent().addClass('active').siblings().removeClass('active');
			$(this).parents('.post').children('.content.active').slideUp().removeClass('active');
			$($(this).attr('href')).slideDown().addClass('active');
			return false
		});
		
		$('#results a').click( function() {
			$('#nav .active').removeClass('active');
			// $('a[to="' + $(this).attr('href') + '"]').addClass('active');
			$('.contentSection.active').slideUp().removeClass('active');
			$($(this).attr('href')).slideDown().addClass('active');
			return false
		});
	}
}

$(document).ready(function() {
	election.init();
});