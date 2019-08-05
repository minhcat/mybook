$(document).ready(function() {
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
});