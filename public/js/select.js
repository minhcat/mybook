$(document).ready(function() {
	//click combobox search
	$('button.select').click(function(e) {
		e.stopPropagation();
		var btn_this = $(this);
		//close other combobox
		$('.dropdown-menu').parent().each(function() {
			if ( !$(this).is( btn_this.parent() ) ) {
				$(this).removeClass('open');
			}
		});

		$(this).parent().toggleClass('open');
		console.log('b');
	});

	//click option combobox
	$('.dropdown-menu li').click(function() {
		var parent = $(this).parent().parent();
		parent.find('.text').text($(this).text());
		parent.find('.select').addClass('checked');
		$('.dropdown-menu').parent().removeClass('open');
	});

	// $('body').click(function(e) {
	// 	if ($(event.target).closest('.navigation').length) {
	// 		return; //do nothing if event target is within the navigation
	// 	} else if (1) {
	// 		// console.log(event.target);
	// 		return;
	// 	} else {
	// 		$('.dropdown-menu').parent().removeClass('open');
	// 		// console.log('body');
	// 	}
	// });
});