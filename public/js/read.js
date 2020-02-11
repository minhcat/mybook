$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 140) {
			$('.menu').removeClass('fixed-top');
			$('section').removeClass('mt-50');
		}

		if ($(this).scrollTop() > 425) {
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
	});
	$('.books-slide').slick({
		dots: false,
		arrows: false,
		slidesToShow: 5,
		slidesToScroll: 5
	});
	$(document).on('click', '.form-comment .select', function() {
		console.log('a');
		// console.log(e.target);
		// console.log(this);
		$(this).parent().toggleClass('open');
	});
	//emoji
	$(document).on('click', '.form-comment .dropdown-menu img', function() {
		console.log('img');
		var text = $(this).parent().parent().parent().find('.textarea');
		var image = $(this).data('image');
		var t = text.html();
		t = t + "<img src='" + flag_url + "image/emoji/" + image + ".png' width='20px'/>";
		text.html(t);
	});
});