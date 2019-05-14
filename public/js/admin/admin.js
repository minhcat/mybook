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
});