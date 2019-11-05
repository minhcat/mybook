$(document).ready(function() {
	$('.box .direct-chat-messages .direct-chat-button span').click(function() {
		var id = $(this).data('id');
		var user = $(this).data('user');
		$('.modal#modal-comment-save button.btn-primary').data('id',id);
		$('.modal#modal-comment-punish button.btn-primary').data('id',id);
		$('.modal#modal-comment-punish button.btn-primary').data('user',user);
		$('.modal#modal-comment-ban button.btn-primary').data('id',id);
		$('.modal#modal-comment-ban button.btn-primary').data('user',user);

	});
	$('.modal#modal-comment-save button.btn-primary').click(function() {
		var id = $(this).data('id');
		$.ajax({
			type: 'GET',
			url: '/admin/censor/ajax/add_list_save/'+id,
			success: function(data) {
				$('.well').addClass('in');
				$('.well p').text('Lưu bình luận thành công');
			}
		});
		console.log(id);
	});
	$('.modal#modal-comment-punish button.btn-primary').click(function() {
		var id = $(this).data('id');
		var user = $(this).data('user');
		var token = $(this).parents('.modal#modal-comment-punish').find('input.token').val();
		var time  = $(this).parents('.modal#modal-comment-punish').find('input[name="time"]:checked').val();
		$.ajax({
			type: 'POST',
			url: '/admin/censor/ajax/punish_user/'+user,
			data: {
				_token: token,
				time: time,
				id_comment: id,
			},
			success: function(data) {
				$('.well').addClass('in');
				$('.well p').text('Phạt người dùng thành công');
			}
		});
		console.log(id);
	});
	$('.modal#modal-comment-ban button.btn-primary').click(function() {
		debugger;
		var id = $(this).data('id');
		var user = $(this).data('user');
		var token = $(this).parents('.modal#modal-comment-ban').find('input.token').val();
		$.ajax({
			type: 'POST',
			url: '/admin/censor/ajax/ban_user/'+user,
			data: {
				_token: token,
				id_comment: id,
			},
			success: function(data) {
				$('.well').addClass('in');
				$('.well p').text('Chặn người dùng thành công');
			}
		});
		console.log(id);
	});
});