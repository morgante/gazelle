var election = {
	init: function() {
		$('.post ul.nav a').click( function() {
			if( !$(this).hasClass('active') ){
				$(this).parent().addClass('active').siblings().removeClass('active');
				$('.content.active', $(this).parents('.post')).fadeOut().siblings('.content').fadeIn();
				return false;
			}
		});
	}
}

$(document).ready(function() {
	election.init();
});