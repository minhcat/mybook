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
});