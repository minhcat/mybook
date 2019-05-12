$(document).ready(function() {
	$('.notification .btn').click(function() {
		$(this).parent().find('.btn.active').removeClass('active');
		$(this).addClass('active');
	});
	$('.block .user').click(function() {
		$(this).parent().find('span.cancel-block.active').removeClass('active');
		$(this).find('span.cancel-block').addClass('active');
		$(this).parent().find('.user.active').removeClass('active');
		$(this).addClass('active');
	});
});