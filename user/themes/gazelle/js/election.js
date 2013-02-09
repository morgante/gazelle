var election = {
	init: function() {
		$('#nav a').click( function() {
			$('#nav .active').removeClass('active');
			$(this).parent().addClass('active');
			$('.contentSection.active').slideUp();
			$($(this).attr('href')).slideDown().addClass('active');
			return false;
		});
				
		$('.post ul.nav a').click( function() {
			if( !$(this).hasClass('active') ){
				$(this).parent().addClass('active').siblings().removeClass('active');
				$('.content.active', $(this).parents('.post')).fadeOut().siblings('.content').addClass('active').fadeIn();
				return false;
			}
		});
	}
}

$(document).ready(function() {
	election.init();
});