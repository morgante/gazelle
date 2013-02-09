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
			if( !$(this).hasClass('active') ){
				$(this).parent().addClass('active').siblings().removeClass('active');
				$('.content.active', $(this).parents('.post')).slideUp().siblings('.content').addClass('active').slideDown();
				return false;
			}
		});
	}
}

$(document).ready(function() {
	election.init();
});