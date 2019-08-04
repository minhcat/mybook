$(document).ready(function() {
	$('.modal.permiss .btn').click(function() {
		if ($(this).hasClass('uploader')) {
			$(this).toggleClass('btn-primary');
		}
		else if ($(this).hasClass('mod')) {
			$(this).toggleClass('btn-success');
		}
		else if ($(this).hasClass('statistic')) {
			$(this).toggleClass('btn-warning');
		}
		else if ($(this).hasClass('admin')) {
			$(this).toggleClass('btn-danger');
		}
	});
	$('table#table-approve-book .btn.btn-success').click(function() {
		var id = $(this).data('id');
		var btn = $(this);
		$.ajax({
			type: 'GET',
			url: '/admin/admin/ajax/approve_book/'+id,
			success:function(data) {
				btn.removeClass('btn-success');
				btn.addClass('btn-danger');
				btn.text('Đã duyệt')
			}
		});
	});
	$('table#table-approve-user .btn.btn-success').click(function() {
		var id = $(this).data('id');
		var btn = $(this);
		$.ajax({
			type: 'GET',
			url: '/admin/admin/ajax/approve_user/'+id,
			success:function(data) {
				btn.removeClass('btn-success');
				btn.addClass('btn-danger');
				btn.text('Đã duyệt')
			}
		});
	});
	$('.box#box-approve-book .btn-primary').click(function() {
		var id = $(this).data('id');
		$('.modal#modal-reply .btn-primary').attr('data-id', id);
	});
	$('.box#box-approve-user .btn-primary').click(function() {
		var id = $(this).data('id');
		$('.modal#modal-reply-user .btn-primary').attr('data-id', id);
	});
	$('.modal#modal-reply .btn-primary').click(function() {
		var id = $(this).data('id');
		var reply = $(this).parents('.modal-content').find('textarea').val();
		$.ajax({
			type: 'GET',
			url: '/admin/admin/ajax/reply_book/'+id+'/'+reply,
			success:function(data) {
				$('.well').addClass('in');
				$('.well p').text('phản hồi thành công')
			}
		});
	});
	$('.modal#modal-reply-user .btn-primary').click(function() {
		var id = $(this).data('id');
		var reply = $(this).parents('.modal-content').find('textarea').val();
		$.ajax({
			type: 'GET',
			url: '/admin/admin/ajax/reply_user/'+id+'/'+reply,
			success:function(data) {
				$('.well').addClass('in');
				$('.well p').text('phản hồi thành công')
			}
		});
	});
	function updateAllMessageForms()
	{
		for (instance in CKEDITOR.instances) {
			CKEDITOR.instances[instance].updateElement();
		}
	}
	$('.box#box-mail .btn-success').click(function() {
		updateAllMessageForms();
		var title   = $(this).parents('.box#box-mail').find('input.title').val();
		var from    = $(this).parents('.box#box-mail').find('select.from').val();
		var content = $(this).parents('.box#box-mail').find('textarea.content').text();
		var token   = $(this).parents('.box#box-mail').find('input.token').val();
		debugger;
		$.ajax({
			type: 'POST',
			url: '/admin/admin/ajax/post_mail',
			data: {
				id_admin : admin_id,
				id_user  : from,
				title    : title,
				content  : content,
				_token   : token,
			},
			success:function(data2) {
				$('.well').addClass('in');
				$('.well p').text('gữi mail thành công')
			}
		});
	});
	$('.box#box-noti .btn-success').click(function() {
		updateAllMessageForms();
		var title   = $(this).parents('.box#box-noti').find('input.title').val();
		var type    = $(this).parents('.box#box-noti').find('select.type').val();
		var from    = $(this).parents('.box#box-noti').find('select.send').val();
		var content = $(this).parents('.box#box-noti').find('textarea.content').val();
		var token   = $(this).parents('.box#box-noti').find('input.token').val();
		$.ajax({
			type: 'POST',
			url: '/admin/admin/ajax/post_noti',
			data: {
				id_admin : admin_id,
				user     : from,
				title    : title,
				type     : type,
				content  : content,
				_token   : token,
			},
			success:function(data2) {
				$('.well').addClass('in');
				$('.well p').text('gữi mail thành công')
			}
		});
	});
});