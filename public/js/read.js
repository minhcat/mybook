$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 353) {
			$('.scroll').addClass('fixed-top');
			// $('section').addClass('mt-50');
		}
		else {
			$('.scroll').removeClass('fixed-top');
			// $('section').removeClass('mt-50');
		}

		// top button
		if ($(this).scrollTop() > 200) {
			$('.top').css('display','block');
		}
		else {
			$('.top').css('display','none');
		}

		$('.books-slide').slick({
			dots: false,
			arrows: false,
			slidesToShow: 5,
			slidesToScroll: 5
		});
	});
});