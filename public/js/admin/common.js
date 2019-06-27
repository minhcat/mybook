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
	Array.prototype.remove = function() {
		var what, a = arguments, L = a.length, ax;
		while (L && this.length) {
			what = a[--L];
			while ((ax = this.indexOf(what)) !== -1) {
				this.splice(ax, 1);
			}
		}
		return this;
	};
	$('.form-group.category span.label').click(function() {
		var category = JSON.parse($('.form-group.category input').val());
		if ($(this).hasClass('label-primary')) {
			$(this).removeClass('label-primary');
			$(this).addClass('label-danger');
			category.push(parseInt($(this).data('id')));
			var json_category = JSON.stringify(category);
			$('.form-group.category input').val(json_category);
		}
		else {
			$(this).removeClass('label-danger');
			$(this).addClass('label-primary');
			category.remove(parseInt($(this).data('id')));
			var json_category = JSON.stringify(category);
			$('.form-group.category input').val(json_category);
		}
	});
	//change status of book
	$('.form-group.status button').click(function() {
		if ($(this).hasClass('btn-success')) {
			$(this).removeClass('btn-success');
			$(this).addClass('btn-danger');
			$(this).text('Đã hoàn thành');
			$('.form-group.status input').val(0);
		}
		else {
			$(this).removeClass('btn-danger');
			$(this).addClass('btn-success');
			$(this).text('Đang tiến hành');
			$('.form-group.status input').val(1);
		}
	});
	$('.form-group.character select').change(function() {
		var value = parseInt($(this).val());
		var text  = $(this).find('option:selected').text()
		var list  = $(this).parent().find('.list-character');
		var check = 0;

		if (list.hasClass('hide'))
			list.removeClass('hide');

		list.find('span').each(function() {
			var id = parseInt($(this).data('id'));
			if (id == value) {
				check = 1;
				return false;
			}
		});
		if (check == 0) {
			list.append('<span class="character" data-id="' + value + '">' + text + ' <i class="fa fa-times"></i></span> ');
			var array_characters = JSON.parse($(this).parent().find('input').val());
			array_characters.push(value);
			$(this).parent().find('input').val(JSON.stringify(array_characters));
		}
	});
	$('.avatar input#image').change(function() {
		if (this.files && this.files[0]) {
			var t = this;
			var reader = new FileReader();

			reader.onload = function(e) {
				$(t).parent().parent().find('img').attr('src',e.target.result);
			}
			reader.readAsDataURL(this.files[0]);
		}
	});
	$('form#create-book .box-footer button.btn-primary').click(function() {
		var form = $('form#create-book');
		var check = true;
		var image = form.find('.avatar input').val();
		//check upload image
		if (image == '') {
			form.find('.avatar p.error.hide').removeClass('hide');
			check = false;
		} else {
			var p = form.find('.avatar p.error');
			if (!p.hasClass('hide'))
				form.find('.avatar p.error').addClass('hide');
		}
		//check enter name
		var name = form.find('.form-group.name input').val();
		if (name == '') {
			form.find('.form-group.name p.error.hide').removeClass('hide');
			check = false;
		} else {
			var p = form.find('.form-group.name p.error');
			if (!p.hasClass('hide'))
				form.find('.form-group.name p.error').addClass('hide');
		}
		//check select category
		var cate = form.find('.form-group.category input').val();
		if (cate == '[]') {
			form.find('.form-group.category p.error').removeClass('hide');
			check = false;
		} else {
			var p = form.find('.form-group.category p.error');
			if (!p.hasClass('hide'))
				form.find('.form-group.category p.error').addClass('hide');
		}
		if (check == true) {
			form.submit();
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