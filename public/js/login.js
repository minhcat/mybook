$(document).ready(function() {
	//get old input
	var input_gender = $('input#gender').val();
	if (input_gender != '') {
		var gender = $('.line.gender ul li[data-value="'+input_gender+'"]').text();
		$('.line.gender button.select').addClass('checked');
		$('.line.gender button.select span.text').text(gender);
	}
	var input_date = $('input#date').val();
	if (input_date != '') {
		var date = $('.line.birth .date ul li[data-value="'+input_date+'"]').text();
		$('.line.birth .date button.select').addClass('checked');
		$('.line.birth .date button.select span.text').text(date);
	}
	var input_month = $('input#month').val();
	if (input_month != '') {
		var month = $('.line.birth .month ul li[data-value="'+input_month+'"]').text();
		$('.line.birth .month button.select').addClass('checked');
		$('.line.birth .month button.select span.text').text(month);
	}
	var input_year = $('input#year').val();
	if (input_year != '') {
		var year = $('.line.birth .year ul li[data-value="'+input_year+'"]').text();
		$('.line.birth .year button.select').addClass('checked');
		$('.line.birth .year button.select span.text').text(year);
	}
	//click combobox search
	$('form button.select').click(function(e) {
		e.stopPropagation();
		var btn_this = $(this);
		//close other combobox
		$('form .dropdown-menu').parent().each(function() {
			if ( !$(this).is( btn_this.parent() ) ) {
				$(this).removeClass('open');
			}
		});

		$(this).parent().toggleClass('open');
	});

	//click option combobox
	$('form .dropdown-menu li').click(function() {
		var parent = $(this).parent().parent();
		var value  = $(this).data('value');
		parent.find('.text').text($(this).text());
		parent.find('.select').addClass('checked');
		parent.find('input').val(value);
		$('form .dropdown-menu').parent().removeClass('open');
	});
	$('body').click(function(e) {
		if ($(event.target).closest('.navigation').length) {
			return; //do nothing if event target is within the navigation
		} else {
			$('.sign-up-form .dropdown-menu').parent().removeClass('open');
		}
	});

	$('label.button input#image').change(function() {
		if (this.files && this.files[0]) {
			var t = this;
			var reader = new FileReader();

			reader.onload = function(e) {
				$(t).parents('.header').find('img').attr('src',e.target.result);
			}
			reader.readAsDataURL(this.files[0]);
		}
	});
	$('.line.category .item').click(function() {
		var category = JSON.parse($('.line.category input').val());
		if ($(this).hasClass('select')) {
			$(this).removeClass('select');
			category.remove(parseInt($(this).data('slug')));
			var json_category = JSON.stringify(category);
			$('.line.category input').val(json_category);
		}
		else {
			$(this).addClass('select');
			category.push(parseInt($(this).data('slug')));
			var json_category = JSON.stringify(category);
			$('.line.category input').val(json_category);
		}
	});
	$('.sign-up .line.submit button.submit').click(function() {
		if (!$('.line.success input').is(':checked')) {
			alert('Bạn chưa đồng ý điều khoản');
		} else {
			$('form.sign-up').submit();
		}
	});
});