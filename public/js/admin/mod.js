$(document).ready(function() {
	$('.box .direct-chat-messages .direct-chat-button span').click(function() {
		var id = $(this).data('id');
		$('.modal#modal-comment-save button.btn-primary').data('id',id);
		console.log(id);
	});
	$('.modal#modal-comment-save button.btn-primary').click(function() {
		debugger;
		var id = $(this).data('id');
		$.ajax({
			type: 'GET',
			url: '/admin/mod/ajax/add_list_save/'+id,
			success: function(data) {
				console.log('success');
				console.log('comment save');
			}
		});
		console.log(id);
	});
});