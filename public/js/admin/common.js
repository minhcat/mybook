$(document).ready(function() {
	//show box when click link show box
	$('.box-link').click(function() {
		// debugger;
		var target = $(this).data('target');
		var attr = $(target).attr('aria-expanded');
		var unclose = $(this).data('unclose');
		var box_with = $(this).data('with');
		var box_with2 = $(this).data('with2');
		var box_with3 = $(this).data('with3');
		var small_box = $(this).data('small');

		//check how many box in page
		var check_box = 0;
		$('.box.collapse.in').each(function() {
			if (!$(target).is(this) && !$(box_with).is(this))
				check_box++;
		});

		//close different box
		$('.box').each(function() {
			if (!$(target).is(this) && !$(unclose).is(this) && !$(box_with).is(this)) {
				$(this).collapse('hide');
			}
		});
		//close different small box
		$('.small').each(function() {
			if (!$('.' + small_box).is(this))
				$(this).find('.small-box').collapse('hide');
		});
		
		//open box
		if (attr == 'false'){
			if (check_box == 0) {
				$(target).collapse('show');
				//show box with
				$(box_with).collapse('show');
				$(box_with2).collapse('show');
				$(box_with3).collapse('show');
				//show small box
				$('.small.' + small_box + ' .small-box').collapse('show');
			} else
			setTimeout(function(){
				$(target).collapse('show');
				//show box with
				$(box_with).collapse('show');
				$(box_with2).collapse('show');
				$(box_with3).collapse('show');
				//show small box
				$('.small.' + small_box + ' .small-box').collapse('show');
			}, 500);
			
		}
	});
	//click remove button in box
	$('[data-remove="collapse"]').click(function() {
		var box = $(this).parents('.box')[0];
		console.log(box);
		$(box).collapse('hide');
	});
	//show image new chap
	$('.input-new-chap').change(function() {
		var this_ = this;
		var f = $('.image-group').data('files');
		var array = [];
		$.each(this.files,function(i) {

			if (this_.files && this_.files[i]) {
				var reader = new FileReader();
				reader.onload = function(e) {

					// $('.image-group').append('<img src="'+e.target.result+'">');
					var obj = {index:i,src:e.target.result};
					// console.log(obj);
					array.push(obj);
					// console.log(array);
					if (array.length == this_.files.length) {
						console.log(array);
						debugger;
						for (var a = 0; a < array.length; a++) {
							for (var b = 0; b < array.length; b++) {
								if (array[b].index == a) {
									$('.image-group').append('<img src="'+array[b].src+'" data-index="'+array[b].index+'">');
									break;
								}
							}
						}
					}
				}
			}
			reader.readAsDataURL(this_.files[i]);
		});
		f = f + this.files.length;
		// console.log(array);

		$('.image-group').data('files',f);
	});
	//choose category edit book
	$('.form-group.category span.label').click(function() {
		if ($(this).hasClass('label-primary')) {
			$(this).removeClass('label-primary');
			$(this).addClass('label-danger');
		}
		else {
			$(this).removeClass('label-danger');
			$(this).addClass('label-primary');
		}
	});
	//change status of book
	$('.form-group.status button').click(function() {
		if ($(this).hasClass('btn-success')) {
			$(this).removeClass('btn-success');
			$(this).addClass('btn-danger');
			$(this).text('Đã hoàn thành');
		}
		else {
			$(this).removeClass('btn-danger');
			$(this).addClass('btn-success');
			$(this).text('Đang tiến hành');
		}
	});
	$(document).on('keypress',function(e) {
		console.log(e.which);
		if(e.which == 110) {
			$('section.content .well').collapse('toggle');
		}
	});
	$('.well .btn.btn-close').click(function() {
		$(this).parent().collapse('hide');
	});
});