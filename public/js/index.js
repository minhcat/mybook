$(document).ready(function() {
	$('.slide').slick({
		dots: true,
		autoplay: true,
        autoplaySpeed: 3000
	});
	// search dropdown
	$('.search .content input').keydown(function(e) {
		// e.stopPropagation();
		if (e.which == 8) {
			$('.navbar .search .dropdown-menu').parent().removeClass('open');
		} else {
			var name = $(this).val() + e.key;
			var form = $('.navbar .search .dropdown-menu');
			form.find('li').remove('.clearfix');
			$.ajax({
				type: 'GET',
				url: '/home/ajax/search_book/'+name,
				success:function(books) {
					for (i = 0; i < books.length; i++) {
						form.prepend('<li class="clearfix"><img src="'+flag_url+'image/books/'+books[i].image+'.jpg" class="image" alt="" width="60px" height="60px"><div class="info"><a href="http://localhost:8000/detail/book/'+books[i].slug+'" class="name">'+books[i].name+'</a><div class="more">'+books[i].description.slice(0,60)+'...</div></div></li>')
					}
				}
			});
			$('.navbar .search .dropdown-menu').dropdown('toggle');
		}
	});
	$('body').click(function(e) {
		// console.log(event.target);
		if ($(event.target).closest('.navigation').length) {

			return; //do nothing if event target is within the navigation
		} else {
			$('.search .dropdown-menu').parent().removeClass('open');
		}
	});
	// popup info
	// book
	var enter_popup_book = 0;
	var enter_link_book = 0;
	
	$('.page-home .show-popup.book').mouseenter(function() {
		enter_link_book = 1;
		$('.popup.book').css('display','none');
		$('.popup.user').css('display','none');
		$('.popup.char').css('display','none');
		$('.popup.trans').css('display','none');
		$('.popup.author').css('display','none');

		var offset = $(this).offset();
		var id     = $(this).data('id');
		var popup  = $('.popup.book[data-id="'+id+'"]');

		var top_popup = offset.top - 601.375;
		var left_popup = offset.left - 1242;

		popup.css('top', top_popup + 'px');
		popup.css('left', left_popup + 'px');
		popup.css('display', 'block');
	});
	$('.master-detail .show-popup.book').mouseenter(function() {
		enter_link_book = 1;
		$('.popup.book').css('display','none');
		$('.popup.user').css('display','none');
		$('.popup.char').css('display','none');
		$('.popup.trans').css('display','none');
		$('.popup.author').css('display','none');

		var offset = $(this).offset();
		var id     = $(this).data('id');
		var popup  = $('.popup.book[data-id="'+id+'"]');

		var top_popup = offset.top - 441.375;
		var left_popup = offset.left - 1242;

		popup.css('top', top_popup + 'px');
		popup.css('left', left_popup + 'px');
		popup.css('display', 'block');
	});
	$('.show-popup.book').mouseleave(function() {
		enter_link_book = 0;
		setTimeout(
			function() 
			{
				if (!enter_popup_book && !enter_link_book) {
					$('.popup.book').css('display','none');
				}
			}, 500);
	});
	$('.popup.book').mouseenter(function() {
		enter_popup_book = 1;
	});
	$('.popup.book').mouseleave(function() {
		enter_popup_book = 0;
		$('.popup.book').css('display','none');
	});
	//user
	var enter_popup_user = 0;
	var enter_link_user = 0;
	
	$('.show-popup.user').mouseenter(function() {
		enter_link_user = 1;
		$('.popup.book').css('display','none');
		$('.popup.user').css('display','none');
		$('.popup.char').css('display','none');
		$('.popup.trans').css('display','none');
		$('.popup.author').css('display','none');

		var offset = $(this).offset();
		var id     = $(this).data('id');
		var popup = $('.popup.user[data-id="'+id+'"]');

		var top_popup = offset.top - 60;
		var left_popup = offset.left - 270;

		popup.css('top', top_popup + 'px');
		popup.css('left', left_popup + 'px');
		popup.css('display', 'block');
	});
	$('.show-popup.user').mouseleave(function() {
		enter_link_user = 0;
		setTimeout(
			function() 
			{
				if (!enter_popup_user && !enter_link_user) {
					$('.popup.user').css('display','none');
				}
			}, 500);
	});
	$('.popup.user').mouseenter(function() {
		enter_popup_user = 1;
	});
	$('.popup.user').mouseleave(function() {
		enter_popup_user = 0;
		$('.popup.user').css('display','none');
	});
	// character
	var enter_popup_char = 0;
	var enter_link_char = 0;
	$('.show-popup.char').mouseenter(function() {
		enter_link_char = 1;
		$('.popup.book').css('display','none');
		$('.popup.user').css('display','none');
		$('.popup.char').css('display','none');
		$('.popup.trans').css('display','none');
		$('.popup.author').css('display','none');

		var offset = $(this).offset();
		var id     = $(this).data('id');
		var popup = $('.popup.char[data-id="'+id+'"]');

		var top_popup = offset.top - 60;
		var left_popup = offset.left - 270;

		popup.css('top', top_popup + 'px');
		popup.css('left', left_popup + 'px');
		popup.css('display', 'block');
	});
	$('.show-popup.char').mouseleave(function() {
		enter_link_char = 0;
		setTimeout(
			function() 
			{
				if (!enter_popup_char && !enter_link_char) {
					$('.popup.char').css('display','none');
				}
			}, 500);
	});
	$('.popup.char').mouseenter(function() {
		enter_popup_char = 1;
	});
	$('.popup.char').mouseleave(function() {
		enter_popup_char = 0;
		$('.popup.char').css('display','none');
	});
	// translator
	var enter_popup_trans = 0;
	var enter_link_trans = 0;
	$('.show-popup.trans').mouseenter(function() {
		enter_link_trans = 1;
		$('.popup.book').css('display','none');
		$('.popup.user').css('display','none');
		$('.popup.char').css('display','none');
		$('.popup.trans').css('display','none');
		$('.popup.author').css('display','none');

		var offset = $(this).offset();
		var id     = $(this).data('id');
		var popup = $('.popup.trans[data-id="'+id+'"]');

		var top_popup = offset.top - 60;
		var left_popup = offset.left - 270;

		popup.css('top', top_popup + 'px');
		popup.css('left', left_popup + 'px');
		popup.css('display', 'block');
	});
	$('.show-popup.trans').mouseleave(function() {
		enter_link_trans = 0;
		setTimeout(
			function() 
			{
				if (!enter_popup_trans && !enter_link_trans) {
					$('.popup.trans').css('display','none');
				}
			}, 500);
	});
	$('.popup.trans').mouseenter(function() {
		enter_popup_trans = 1;
	});
	$('.popup.trans').mouseleave(function() {
		enter_popup_trans = 0;
		$('.popup.trans').css('display','none');
	});
	// author
	var enter_popup_author = 0;
	var enter_link_author = 0;
	$('.show-popup.author').mouseenter(function() {
		enter_link_author = 1;
		$('.popup.book').css('display','none');
		$('.popup.user').css('display','none');
		$('.popup.char').css('display','none');
		$('.popup.trans').css('display','none');
		$('.popup.author').css('display','none');

		var offset = $(this).offset();
		var id     = $(this).data('id');
		var popup = $('.popup.author[data-id="'+id+'"]');

		var top_popup = offset.top - 60;
		var left_popup = offset.left - 270;

		popup.css('top', top_popup + 'px');
		popup.css('left', left_popup + 'px');
		popup.css('display', 'block');
	});
	$('.show-popup.author').mouseleave(function() {
		enter_link_author = 0;
		setTimeout(
			function() 
			{
				if (!enter_popup_author && !enter_link_author) {
					$('.popup.author').css('display','none');
				}
			}, 500);
	});
	$('.popup.author').mouseenter(function() {
		enter_popup_author = 1;
	});
	$('.popup.author').mouseleave(function() {
		enter_popup_author = 0;
		$('.popup.author').css('display','none');
	});

	//scroll top
	$('.top').click(function() {
		$('html, body').animate({scrollTop: 0});
	});
	var view_start = 8;
	$('.topic.view .topic-more .btn.btn-link').click(function(){
		// debugger;
		var parent = $(this).parent().parent();
		var row = parent.find('.topic-content > .row');
		var start = view_start;
		$.ajax({
			type: 'GET',
			url: 'home/ajax/add_new_view/'+start,
			success:function(books) {
				for (i = 0; i < 4; i++) {
					// console.log(books[i]);
					books[i].cate = '';
					for (j = 0; j < books[i].categories.length; j++) {
						if (j != 3) {
							if (j < books[i].categories.length - 1 && j != 2)
								books[i].cate = books[i].cate + books[i].categories[j] + ', ';
							else
								books[i].cate = books[i].cate + books[i].categories[j];
						}
					}
					row.append('<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6"><div class="book-content"><img src="image/books/'+books[i].image+'.jpg"><div class="book-info"><div class="name">'+books[i].name+'</div><div class="group row"><div class="view col-md-6 col-sm-4 col-xs-4 col-6 text-left"><span class="glyphicon glyphicon-eye-open"></span> <span>'+books[i].view+'</span></div><div class="like col-md-4 col-md-push-2 col-sm-3 col-xs-3 col-6 col-xs-push-5 text-right"><span class="glyphicon glyphicon-heart"></span> <span>'+books[i].like+'</span></div></div></div><div class="rank bg-gray">'+(i+start+1)+'</div><div class="book-hover bg-gray"><div class="name">'+books[i].name+'</div><div class="type">'+books[i].cate+'</div><div class="chap">'+books[i].max_chap+' chap</div><a href="http://localhost:8000/detail/book/'+books[i].slug+'" class="btn play">Xem Ngay</a><div class="group row"><div class="view col-md-6 col-sm-4 col-xs-4"><span class="glyphicon glyphicon-eye-open"></span> <span>'+books[i].view+'<span></div><div class="like col-md-4 col-md-push-2 col-sm-3 col-xs-3 col-xs-push-5"><span class="glyphicon glyphicon-heart"></span> <span>'+books[i].like+'</span></div></div></div></div></div>');
				}
				view_start = view_start + 4;
			}
		});
	});
	var update_start = 8;
	$('.topic.update .topic-more .btn.btn-link').click(function(){
		var parent = $(this).parent().parent();
		var row = parent.find('.topic-content > .row');
		var start = update_start;
		$.ajax({
			type: 'GET',
			url: 'home/ajax/add_new_update/'+start,
			success:function(books) {
				console.log(books);
				for (i = 0; i < 4; i++) {
					// console.log(books[i].name);
					row.append('<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6"><div class="book-content"><img src="image/books/'+books[i].image+'.jpg"><div class="book-info"><div class="name">'+books[i].name+'</div><div class="chap">'+books[i].chap_new+'</div></div><div class="book-hover bg-blue"><div class="name">'+books[i].name+'</div><div class="chap">'+books[i].chap_new+'</div><a href="http://localhost:8000/detail/book/'+books[i].slug+'" class="btn play">Xem Ngay</a><div class="group row"><div class="like col-md-4 col-sm-4 col-4"><span class="glyphicon glyphicon-heart"></span> <span>'+books[i].like+'</span></div><div class="comment col-md-4 col-sm-4 col-4"><span class="glyphicon glyphicon-comment"></span> <span>'+books[i].comment+'</span></div><div class="view col-md-4 col-sm-4 col-4"><span class="glyphicon glyphicon-eye-open"></span> <span>'+books[i].view+'</span></div></div></div></div></div>');
				}
				update_start = update_start + 4;
			}
		});
	});
	var comment_start = 8;
	$('.topic.comment .topic-more .btn.btn-link').click(function(){
		var parent = $(this).parent().parent();
		var row = parent.find('.topic-content > .row');
		var start = comment_start;
		$.ajax({
			type: 'GET',
			url: 'home/ajax/add_new_comment/'+start,
			success:function(books) {
				// console.log(books);
				for (i = 0; i < 4; i++) {
					// console.log(books[i].name);
					books[i].cate = '';
					for (j = 0; j < books[i].categories.length; j++) {
						if (j != 3) {
							if (j < books[i].categories.length - 1 && j != 2)
								books[i].cate = books[i].cate + books[i].categories[j] + ', ';
							else
								books[i].cate = books[i].cate + books[i].categories[j];
						}
					}
					row.append('<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6"><div class="book-content"><img src="image/books/'+books[i].image+'.jpg"><div class="book-info"><div class="name">'+books[i].name+'</div><div class="group row"><div class="comment col-md-4 col-sm-4 col-xs-4 col-4 text-left"><span class="glyphicon glyphicon-comment"></span> <span>'+books[i].comment+'</span></div><div class="like col-md-4 col-sm-4 col-xs-4 col-4"><span class="glyphicon glyphicon-heart"></span> <span>'+books[i].like+'</span></div><div class="view col-md-4 col-sm-4 col-xs-4 col-4 text-right"><span class="glyphicon glyphicon-eye-open"></span> <span>'+books[i].view+'</span></div></div></div><div class="book-hover bg-turquoise"><div class="name">'+books[i].name+'</div><div class="type">'+books[i].cate+'</div><div class="chap">'+books[i].max_chap+' chap</div><a href="http://localhost:8000/detail/book/'+books[i].slug+'" class="btn play">Xem Ngay</a><div class="group row"><div class="comment col-md-4 col-sm-4 col-xs-4"><span class="glyphicon glyphicon-comment"></span> <span>'+books[i].comment+'</span></div><div class="like col-md-4 col-sm-4 col-xs-4"><span class="glyphicon glyphicon-heart"></span> <span>'+books[i].like+'</span></div><div class="view col-md-4 col-sm-4 col-xs-4"><span class="glyphicon glyphicon-eye-open"></span> <span>'+books[i].view+'</span></div></div></div></div></div>');
				}
				comment_start = comment_start + 4;
			}
		});
	});
	var rate_start = 8;
	$('.topic.rate .topic-more .btn.btn-link').click(function(){
		var parent = $(this).parent().parent();
		var row = parent.find('.topic-content > .row');
		var start = rate_start;
		$.ajax({
			type: 'GET',
			url: 'home/ajax/add_new_rate/'+start,
			success:function(books) {
				console.log(books);
				for (i = 0; i < 4; i++) {
					// console.log(books[i].name);
					books[i].cate = '';
					for (j = 0; j < books[i].categories.length; j++) {
						if (j != 3) {
							if (j < books[i].categories.length - 1 && j != 2)
								books[i].cate = books[i].cate + books[i].categories[j] + ', ';
							else
								books[i].cate = books[i].cate + books[i].categories[j];
						}
					}
					books[i].star = '';
					for (j = 0; j <= 4; j++) {
						if (books[i].rate_point <= j) {
							books[i].star = books[i].star + '<span class="fa fa-star-o"></span> ';
						} else if (books[i].rate_point <= j + 0.5) {
							books[i].star = books[i].star + '<span class="fa fa-star-half-o"></span> ';
						} else {
							books[i].star = books[i].star + '<span class="fa fa-star"></span> ';
						}
					}
					row.append('<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6"><div class="book-content"><img src="image/books/'+books[i].image+'.jpg"><div class="book-info"><div class="name">'+books[i].name+'</div><div class="group row"><div class="star col-md-7 col-sm-6 col-xs-6">'+books[i].star+' <span>'+books[i].rate_point+'</span></div><div class="rate col-md-5 col-sm-6 col-xs-6"><span>'+books[i].rate+' đánh giá</span></div></div></div><div class="book-hover bg-red"><div class="name">'+books[i].name+'</div><div class="type">'+books[i].cate+'</div><div class="chap">'+books[i].max_chap+' chap</div><a href="http://localhost:8000/detail/book/'+books[i].slug+'" class="btn play">Xem Ngay</a><div class="group row"><div class="star col-md-7 col-sm-6 col-xs-6">'+books[i].star+' <span>'+books[i].rate_point+'</span></div><div class="rate col-md-5 col-sm-6 col-xs-6"><span>'+books[i].rate+' đánh giá</span></div></div></div></div></div>');
				}
				rate_start = rate_start + 4;
			}
		});
	});
});