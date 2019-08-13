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
	$('table#table-staff .btn-success').click(function() {
		var id = $(this).data('id');
		$('.modal#modal-permiss .btn-primary').attr('data-id', id);
	});
	$('.modal#modal-permiss .modal-body .btn').click(function() {
		$('.modal#modal-permiss .modal-body .btn').each(function() {
			$(this).removeClass('select');
		});
		$(this).addClass('select');
	});
	$('.modal#modal-permiss .modal-footer .btn-primary').click(function() {
		var id = $(this).data('id');
		var access = $(this).parents('.modal-content').find('.modal-body .btn.select').data('access');
		var btn = $('table#table-staff .btn-success[data-id='+id+']');
		$.ajax({
			type: 'GET',
			url: '/admin/super-admin/ajax/permiss_admin/'+id+'/'+access,
			success:function(data) {
				btn.text('cấp lại');
			}
		});
	});
	$('.logo input#logo').change(function() {
		if (this.files && this.files[0]) {
			var t = this;
			var reader = new FileReader();

			reader.onload = function(e) {
				$(t).parent().parent().find('img').attr('src',e.target.result);
			}
			reader.readAsDataURL(this.files[0]);
		}
	});
	$('.form-group.image input#image').change(function() {
		var input = this;
		var array = [];
		$.each(this.files,function(i) {
			console.log(i);
			if (input.files && input.files[i] && i < 3) {
				var reader = new FileReader();
				reader.onload = function(e) {

					$('img.header-img[data-id="'+i+'"]').attr('src',e.target.result);
				}
			}
			reader.readAsDataURL(input.files[i]);
		});
	});
	$('.form-group select.number-topic').change(function() {
		var value = parseInt($(this).val());
		$('.form-group.topic-title').removeClass('hide');
		$('.form-group.topic-type').removeClass('hide');
		$('.form-group.topic-number').removeClass('hide');

		for (i = value+1; i <= 6; i++) {
			$('.form-group.topic-title.title'+i).addClass('hide');
			$('.form-group.topic-type.type'+i).addClass('hide');
			$('.form-group.topic-number.number'+i).addClass('hide');
		}
	});

	$('.form-group select.number-box').change(function() {
		var value = parseInt($(this).val());
		$('.form-group.box-type').removeClass('hide');
		$('.form-group.box-number').removeClass('hide');

		for (i = value+1; i<=6; i++) {
			$('.form-group.box-type.type'+i).addClass('hide');
			$('.form-group.box-number.number'+i).addClass('hide');
		}
	});
	$('.form-group.box-type select').change(function() {
		debugger;
		var value = $(this).val();
		var index = $(this).parent().attr('class');
		index = index.replace('form-group box-type ', '');
		index = index.replace('type', '');
		if (value == 'facebook' || value == 'advertisement') {
			$('.form-group.box-number.number'+index+' select').attr('disabled', true);
			$('.form-group.box-number.number'+index+' select').val('-1');
		} else {
			$('.form-group.box-number.number'+index+' select').attr('disabled', false);
			$('.form-group.box-number.number'+index+' select').val('6');
		}
	});
});