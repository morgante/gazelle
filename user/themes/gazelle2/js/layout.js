layout = {
	init: function() {
		$("#sidebar").sticky({topSpacing:0});
	}
}

$(document).ready( function() {
	layout.init();
} );