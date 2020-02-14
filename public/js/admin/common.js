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
	
	// $(document).on('keypress',function(e) {
	// 	if(e.which == 110) { //button "n"
	// 		$('section.content .well').collapse('toggle');
	// 	}
	// });
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
	$('.box#box-setting .box-footer .btn-success').click(function() {
		var sidebar = $('.box#box-setting .sidebar input').prop('checked');
		var skin    = $('.box#box-setting .skin input[type=radio]:checked').data('value');
		var email   = $('.box#box-setting .email input[type=radio]:checked').data('value');
		var noti    = $('.box#box-setting .notification input[type=radio]:checked').data('value');
		var token   = $('.box#box-setting .token').val();

		if (sidebar == true) sidebar = 1; else sidebar = 0;
		$.ajax({
			type: 'POST',
			url: '/admin/admin/ajax/post_setting',
			data: {
				sidebar: sidebar,
				skin: skin,
				email: email,
				notification: noti,
				_token: token,
			},
			success:function() {
				$('.well').addClass('in');
				$('.well p').text('cài đặt thành công')
			}
		});
	});
	$('header.main-header .navbar .user .dropdown-menu .user-footer .logout .btn').click(function() {
		$.ajax({
			url: '/logout',
			type: 'get',
			success:function() {
				
			}
		});
	});
	function reset_notification() {
		if (!$('.well').hasClass('in')) {
			$.ajax({
				type: 'GET',
				url: '/admin/ajax/reset_noti/'+auth_id,
				success:function(noti) {
					if (noti.length != 0) {
						$('.well.well-success').collapse('show');
						$('.well.well-success p').text(noti[0].content);
					}
				}
			});
		}
	}
	function reset_mail() {
		if (!$('.well').hasClass('in')) {
			$.ajax({
				type: 'GET',
				url: '/admin/ajax/reset_mail/'+auth_id,
				success:function(mail) {
					if (mail.length != 0) {
						$('.well.well-danger').collapse('show');
						$('.well.well-danger p').text('Bạn có tin nhắn mới');
					}
				}
			});
		}
	}
	setInterval(reset_notification, 3000);
	setInterval(reset_mail, 3000);
});