$(document).ready(function() {
	//show box when click link show box
	$('.box-link').click(function() {
		// debugger;
		var target = $(this).data('target');
		var attr = $(target).attr('aria-expanded');
		var unclose = $(this).data('unclose');
		var box_with = $(this).data('with');
		var box_with2 = $(this).data('with2');
		var box_with3 = $(this).data('with3');
		var small_box = $(this).data('small');

		//check how many box in page
		var check_box = 0;
		$('.box.collapse.in').each(function() {
			if (!$(target).is(this) && !$(box_with).is(this))
				check_box++;
		});

		//close different box
		$('.box').each(function() {
			if (!$(target).is(this) && !$(unclose).is(this) && !$(box_with).is(this)) {
				$(this).collapse('hide');
			}
		});
		//close different small box
		$('.small').each(function() {
			if (!$('.' + small_box).is(this))
				$(this).find('.small-box').collapse('hide');
		});
		
		//open box
		if (attr == 'false'){
			if (check_box == 0) {
				$(target).collapse('show');
				//show box with
				$(box_with).collapse('show');
				$(box_with2).collapse('show');
				$(box_with3).collapse('show');
				//show small box
				$('.small.' + small_box + ' .small-box').collapse('show');
			} else
			setTimeout(function(){
				$(target).collapse('show');
				//show box with
				$(box_with).collapse('show');
				$(box_with2).collapse('show');
				$(box_with3).collapse('show');
				//show small box
				$('.small.' + small_box + ' .small-box').collapse('show');
			}, 500);
			
		}
	});
	//click remove button in box
	$('[data-remove="collapse"]').click(function() {
		var box = $(this).parents('.box')[0];
		console.log(box);
		$(box).collapse('hide');
	});
	
	$(document).on('keypress',function(e) {
		if(e.which == 110) {
			$('section.content .well').collapse('toggle');
		}
	});
	$('.well .btn.btn-close').click(function() {
		$(this).parent().collapse('hide');
	});
	$('.btn.remove.mail').click(function() {
		var id = $(this).data('id');
		$('#modal-remove-mail button.btn-primary').data('id',id);
	});
	$('#modal-remove-mail button.btn-primary').click(function() {
		var id = $(this).data('id');
		$.ajax({
			url: '/admin/ajax/remove_mail/'+id,
			type: 'get',
			success:function() {
				$('.well').addClass('in');
				$('.well p').text('Xóa mail thành công');
				$('.box.collapse.in').collapse('hide');
			}
		});
	});
	// set seen mail
	$('.navbar .messages-menu a.dropdown-toggle').click(function() {
		var _this = this;
		$.ajax({
			type: 'get',
			url: '/admin/ajax/seen_mail',
			success:function() {
				$(_this).find('span').remove();
			}
		});
	});
	// set seen mail
	$('.navbar .notifications-menu a.dropdown-toggle').click(function() {
		var _this = this;
		$.ajax({
			type: 'get',
			url: '/admin/ajax/seen_noti',
			success:function() {
				$(_this).find('span').remove();
			}
		});
	});
	$('.box#box-setting .box-body .sidebar input').change(function() {
		$('body').toggleClass('sidebar-collapse');
	});
	$('.box#box-setting .box-body .skin input').change(function() {
		var value = $(this).data('value');
		$('body').removeClass('skin-blue');
		$('body').removeClass('skin-red');
		$('body').removeClass('skin-green');
		$('body').removeClass('skin-purple');
		$('body').addClass('skin-'+value);
	});
});