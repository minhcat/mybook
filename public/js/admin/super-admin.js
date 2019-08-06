$(document).ready(function() {
	// delete book temporary
	$('table#table-book .btn-warning').click(function() {
		var id = $(this).data('id');
		$('.modal#modal-remove-temporary-book .btn-primary').attr('data-id', id);
	});
	$('.modal#modal-remove-temporary-book .btn-primary').click(function() {
		var id = $(this).data('id');
		var btn = $('table#table-book .btn-warning[data-id='+id+']');
		$.ajax({
			type: 'GET',
			url: '/admin/super-admin/ajax/delete_book_temporary/'+id,
			success:function(data) {
				btn.removeClass('btn-warning');
				btn.addClass('btn-default');
				btn.text('đã xóa');
			}
		});
	});
	// delete book permanent
	$('table#table-book .btn-danger').click(function() {
		var id = $(this).data('id');
		$('.modal#modal-remove-permanent-book .btn-primary').attr('data-id', id);
	});
	$('.modal#modal-remove-permanent-book .btn-primary').click(function() {
		var id = $(this).data('id');
		var btn = $('table#table-book .btn-danger[data-id='+id+']');
		$.ajax({
			type: 'GET',
			url: '/admin/super-admin/ajax/delete_book_permanent/'+id,
			success:function(data) {
				btn.removeClass('btn-danger');
				btn.addClass('btn-default');
				btn.text('đã xóa');
			}
		});
	});
	$('table#table-book-temporary .btn-primary').click(function() {
		var id = $(this).data('id');
		var btn = $(this);
		$.ajax({
			type: 'GET',
			url: '/admin/super-admin/ajax/restore_book/'+id,
			success:function(data) {
				btn.removeClass('btn-primary');
				btn.addClass('btn-default');
				btn.text('đã xong');
			}
		});
	});
});