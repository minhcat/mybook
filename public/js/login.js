$(document).ready(function() {
	//click combobox search
	$('form.sign-up button.select').click(function(e) {
		e.stopPropagation();
		var btn_this = $(this);
		//close other combobox
		$('form.sign-up .dropdown-menu').parent().each(function() {
			if ( !$(this).is( btn_this.parent() ) ) {
				$(this).removeClass('open');
			}
		});

		$(this).parent().toggleClass('open');
	});

	//click option combobox
	$('form.sign-up .dropdown-menu li').click(function() {
		var parent = $(this).parent().parent();
		parent.find('.text').text($(this).text());
		parent.find('.select').addClass('checked');
		$('form.sign-up .dropdown-menu').parent().removeClass('open');
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
	$('.line.submit button.submit').click(function() {
		if (!$('.line.success input').is(':checked')) {
			alert('Bạn chưa đồng ý điều khoản');
		} else {
			$('form.sign-up').submit();
		}
	});
});