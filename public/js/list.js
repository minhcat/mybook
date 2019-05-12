$(document).ready(function() {
	//click combobox search
	$('.search-box button.select').click(function(e) {
		e.stopPropagation();
		var btn_this = $(this);
		//close other combobox
		$('.search-box .dropdown-menu').parent().each(function() {
			if ( !$(this).is( btn_this.parent() ) ) {
				$(this).removeClass('open');
			}
		});

		$(this).parent().toggleClass('open');
	});

	//select category
	$('.category .item').click(function() {
		$(this).toggleClass('select');
	});

	//click option combobox
	$('.search-box .dropdown-menu li').click(function() {
		var parent = $(this).parent().parent();
		parent.find('.text').text($(this).text());
		$('.search-box .dropdown-menu').parent().removeClass('open');
	});

	$('body').click(function(e) {
		if ($(event.target).closest('.navigation').length) {
			return; //do nothing if event target is within the navigation
		} else {
			$('.search-box .dropdown-menu').parent().removeClass('open');
		}
	});

	//option
	$('.book').mouseenter(function() {
		$(this).find('.option span').css('display','block');
	});
	$('.book').mouseleave(function() {
		$(this).find('.option span').css('display','none');
		$(this).find('.option.open').removeClass('open');
	});
	$('.book .option').mouseenter(function() {
		$(this).find('span').css('color','#aaa');
	});
	$('.book .option').mouseleave(function() {
		$(this).find('span').css('color','#ddd');
	});
});