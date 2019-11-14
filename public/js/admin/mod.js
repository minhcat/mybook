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
	// reset box new comment
	function reset_new_comment() {
		var id = $('.box#box-comment-new .box-body .direct-chat-messages').data('id');
		console.log(id);
		$.ajax({
			type: 'get',
			url: '/admin/censor/ajax/reset_new_comment/'+id,
			success:function(comments) {
				for (i = 0; i < comments.length; i++) {
					var comment = comments[i];
					var page = '';
					if (comment.page == 'author') {
						page = 'Tác giả';
					} else if (comment.page == 'character') {
						page = 'Nhân vật';
					} else if (comment.page == 'user') {
						page = 'Người dùng';
					} else if (comment.page == 'trans') {
						page = 'Nhóm dịch';
					} else {
						page = 'Truyện';
					}
					var chap = '';
					if (comment.type == 'read') {
						chap = comment.chap_name;
					}
					var time   = new Date(comment.datetime);
					var hour   = time.getHours();
					var minute = time.getMinutes()
					var date   = time.getDate();
					var month  = time.getMonth();
					var year   = time.getFullYear();
					time = hour + ':' + minute + ' ' + date + '-' + month + '-' + year;

					$('.box#box-comment-new .box-body .direct-chat-messages').prepend('<div class="direct-chat-msg"><div class="direct-chat-info clearfix"><span class="direct-chat-name pull-left">'+comment.name+' - <span class="direct-chat-timestamp">'+page+' '+comment.page_name+' '+chap+'</span> - <span class="direct-chat-timestamp">'+time+'</span></span></div><!-- /.direct-chat-info --><img class="direct-chat-img" src="'+flag_url+'image/users/'+comment.image+'.jpg" alt="Message User Image"><!-- /.direct-chat-img --><div class="direct-chat-text">'+comment.content+'</div><!-- tag comment --><div class="direct-chat-button"><span class="fa fa-plus bg-blue" title="thêm vào danh sách kiểm tra" data-toggle="modal" data-target="#modal-comment-save" data-id="'+comment.id+'"></span><span class="fa fa-flag bg-orange" title="phạt người dùng này" data-toggle="modal" data-target="#modal-comment-punish" data-id="'+comment.id+'" data-user="'+comment.id_user+'"></span><span class="fa fa-ban bg-red" title="cấm đăng nhập người dùng này" data-toggle="modal" data-target="#modal-comment-ban" data-id="'+comment.id+'" data-user="'+comment.id_user+'"></span></div><!-- /.direct-chat-text --></div>');
					$('.box#box-comment-new .box-body .direct-chat-messages').data('id', id + 1);
				}
			}
		});
		
	}
	setInterval(reset_new_comment, 3000);
});