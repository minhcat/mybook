$(document).ready(function() {
	//click combobox search
	$('.sign-up-form button.select').click(function(e) {
		e.stopPropagation();
		var btn_this = $(this);
		//close other combobox
		$('.sign-up-form .dropdown-menu').parent().each(function() {
			if ( !$(this).is( btn_this.parent() ) ) {
				$(this).removeClass('open');
			}
		});

		$(this).parent().toggleClass('open');
	});

	//click option combobox
	$('.sign-up-form .dropdown-menu li').click(function() {
		var parent = $(this).parent().parent();
		parent.find('.text').text($(this).text());
		parent.find('.select').addClass('checked');
		$('.sign-up-form .dropdown-menu').parent().removeClass('open');
	});

	$('body').click(function(e) {
		if ($(event.target).closest('.navigation').length) {
			return; //do nothing if event target is within the navigation
		} else {
			$('.sign-up-form .dropdown-menu').parent().removeClass('open');
		}
	});
});