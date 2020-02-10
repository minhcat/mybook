$(document).ready(function() {
	//more comment
	$('.list-comment .more a').click(function() {
		var list  = $(this).parent().parent().find('.list-cmd').first();
		var type  = $(this).data('type');
		var page  = $(this).data('page');
		var id    = $(this).data('id');
		var index = $(this).data('index');
		var link  = this;
		$.ajax({
			url: '/ajax/more_comment/' + type + '/' + page + '/' + id + '/'+index,
			type: 'get',
			success:function(result) {
				// t.append(data.length);
				data = result[0];
				console.log(result);
				$.each(data, function(i, value) {
					if (i >= 2) return false;
					// console.log(typeof(value));
					if (typeof(value) == 'number') return;
					// console.log(data[i].reply.length);
					var str = '';
					if (data[i].reply.length > 0) {
						var item = '';
						$.each(data[i].reply, function(j, value2) {
							if (j < 2) { 
								var like = value2.like; 
								var dislike = value2.dislike;
								if (like == 0) like = '';
								if (dislike == 0) dislike = '';
								item = item + '<div class="item-comment clearfix" data-id="'+value2.id+'"><div class="image"><img src="'+flag_url+'image/users/'+value2.image+'.jpg" class="img-circle"></div><div class="info"><p class="name"><a href="">'+value2.name+'</a> · <span>'+value2.nickname+'</span></p><p class="text">'+value2.content+'</p><p class="like"><a class="cmd-child" disabled="disabled">Phản hồi</a> · <span class="like"><img src="'+flag_url+'image/like.png"> <span class="num-like">'+like+'</span></span> · <span class="dislike"><img src="'+flag_url+'image/dislike.png"> <span class="num-dislike">'+dislike+'</span></span> <span class="cmd-date">· 04/01/2018</span></p></div></div>';
							}
						});
						var more = '';
						if (data[i].reply.length > 2) {
							more = '<div class="more"><a disabled="disabled" data-type="reply" data-page="AAAA" data-id="BBBB" data-index="CCCC">Xem thêm bình luận</a></div>';
						}
						str = '<div class="list-comment reply"><div class="list-cmd">'+item+'</div>'+more+'</div>';
					}
					list.append('<div class="item-comment clearfix"><div class="image"><img src="' + flag_url + 'image/users/' + data[i].image + '.jpg" class="img-circle"></div><div class="info"><p class="name"><a href="">' + data[i].name + '</a> · <span>' + data[i].nickname + '</span></p><p class="text">' + data[i].content + '</p><p class="like"><a class="cmd-child" disabled="disabled">Phản hồi</a> · <span class="like"><img src="' + flag_url + 'image/like.png"> <span class="num-like"></span></span> · <span class="dislike"><img src="' + flag_url + 'image/dislike.png"> <span class="num-dislike"></span></span> · 04/01/2018</p> ' + str + ' </div></div>');
				});
				end = result[1];
				if (end == 'end') {
					$(link).parent().remove();
				}
				$(link).data('index', index + 2);
			}
		});
		
	});
	//dropdown emoji
	$(document).on('click', '.form-comment .select', function() {
		console.log('a');
		// console.log(e.target);
		// console.log(this);
		$(this).parent().toggleClass('open');
	});
	//emoji
	$(document).on('click', '.form-comment .dropdown-menu img', function() {
		console.log('img');
		var text = $(this).parent().parent().parent().find('.textarea');
		var image = $(this).data('image');
		var t = text.html();
		t = t + "<img src='" + flag_url + "image/emoji/" + image + ".png' width='20px'/>";
		text.html(t);
	});
	//reply comment
	$('.item-comment p.like a.cmd-main').click(function() {
		var info_main    = $(this).parent().parent();
		var form_comment = info_main.find('.form-comment');
		var parent       = info_main.parents('.line.cmd').find('.form-comment.parent .image img');
		var image        = parent.data('image');
		var id_page      = $('.form-comment.parent .btn.submit').data('id');
		var page         = $('.form-comment.parent .btn.submit').data('page');
		console.log(id_page);
		console.log(page);
		if (form_comment.length == 0) {
			var list_comment = info_main.find('.list-comment');
			if (list_comment.length == 0) info_main.append('<div class="list-comment reply"></div>')
			info_main.find('.list-comment').prepend('<div class="form-comment child clearfix"><div class="image"><img src="' + flag_url + 'image/users/' + image + '.jpg" class="img-circle"></div><div class="text-cmd"><div class="textarea" data-placeholder="thêm bình luận" contentEditable="true" spellcheck="false"></div><button class="btn submit mr5 open-modal hide">Đăng</button><button class="btn reset mr5 hide">Hủy</button><button class="btn submit mr5 open-modal mbshow" data-id="' + id_page + '" data-page="' + page + '">Đăng bình luận</button><button class="btn reset mr5 mbshow">Hủy bỏ</button><div class="dropdown"><button class="btn emoji select"><img src="' + flag_url + 'image/emoji/emoji-04.png" width="28px"></button><div class="dropdown-menu"><!-- 1-10 --><img src="' + flag_url + 'image/emoji/emoji-01.png" data-image="emoji-01"><img src="' + flag_url + 'image/emoji/emoji-02.png" data-image="emoji-02"><img src="' + flag_url + 'image/emoji/emoji-03.png" data-image="emoji-03"><img src="' + flag_url + 'image/emoji/emoji-04.png" data-image="emoji-04"><img src="' + flag_url + 'image/emoji/emoji-05.png" data-image="emoji-05"><img src="' + flag_url + 'image/emoji/emoji-06.png" data-image="emoji-06"><img src="' + flag_url + 'image/emoji/emoji-07.png" data-image="emoji-07"><img src="' + flag_url + 'image/emoji/emoji-08.png" data-image="emoji-08"><img src="' + flag_url + 'image/emoji/emoji-09.png" data-image="emoji-09"><img src="' + flag_url + 'image/emoji/emoji-10.png" data-image="emoji-10"><!-- 10-20 --><img src="' + flag_url + 'image/emoji/emoji-11.png" data-image="emoji-11"><img src="' + flag_url + 'image/emoji/emoji-12.png" data-image="emoji-12"><img src="' + flag_url + 'image/emoji/emoji-13.png" data-image="emoji-13"><img src="' + flag_url + 'image/emoji/emoji-14.png" data-image="emoji-14"><img src="' + flag_url + 'image/emoji/emoji-15.png" data-image="emoji-15"><img src="' + flag_url + 'image/emoji/emoji-16.png" data-image="emoji-16"><img src="' + flag_url + 'image/emoji/emoji-17.png" data-image="emoji-17"><img src="' + flag_url + 'image/emoji/emoji-18.png" data-image="emoji-18"><img src="' + flag_url + 'image/emoji/emoji-19.png" data-image="emoji-19"><img src="' + flag_url + 'image/emoji/emoji-20.png" data-image="emoji-20"><!-- 20-30 --><img src="' + flag_url + 'image/emoji/emoji-21.png" data-image="emoji-21"><img src="' + flag_url + 'image/emoji/emoji-22.png" data-image="emoji-22"><img src="' + flag_url + 'image/emoji/emoji-23.png" data-image="emoji-23"><img src="' + flag_url + 'image/emoji/emoji-24.png" data-image="emoji-24"><img src="' + flag_url + 'image/emoji/emoji-25.png" data-image="emoji-25"><img src="' + flag_url + 'image/emoji/emoji-26.png" data-image="emoji-26"><img src="' + flag_url + 'image/emoji/emoji-27.png" data-image="emoji-27"><img src="' + flag_url + 'image/emoji/emoji-28.png" data-image="emoji-28"><img src="' + flag_url + 'image/emoji/emoji-29.png" data-image="emoji-29"><img src="' + flag_url + 'image/emoji/emoji-30.png" data-image="emoji-30"><!-- 30-40 --><img src="' + flag_url + 'image/emoji/emoji-31.png" data-image="emoji-31"><img src="' + flag_url + 'image/emoji/emoji-32.png" data-image="emoji-32"><img src="' + flag_url + 'image/emoji/emoji-33.png" data-image="emoji-33"><img src="' + flag_url + 'image/emoji/emoji-34.png" data-image="emoji-34"><img src="' + flag_url + 'image/emoji/emoji-35.png" data-image="emoji-35"><img src="' + flag_url + 'image/emoji/emoji-36.png" data-image="emoji-36"><img src="' + flag_url + 'image/emoji/emoji-37.png" data-image="emoji-37"><img src="' + flag_url + 'image/emoji/emoji-38.png" data-image="emoji-38"><img src="' + flag_url + 'image/emoji/emoji-39.png" data-image="emoji-39"><img src="' + flag_url + 'image/emoji/emoji-40.png" data-image="emoji-40"><!-- 40-50 --><img src="' + flag_url + 'image/emoji/emoji-41.png" data-image="emoji-41"><img src="' + flag_url + 'image/emoji/emoji-42.png" data-image="emoji-42"><img src="' + flag_url + 'image/emoji/emoji-43.png" data-image="emoji-43"><img src="' + flag_url + 'image/emoji/emoji-44.png" data-image="emoji-44"><img src="' + flag_url + 'image/emoji/emoji-45.png" data-image="emoji-45"><img src="' + flag_url + 'image/emoji/emoji-46.png" data-image="emoji-46"><img src="' + flag_url + 'image/emoji/emoji-47.png" data-image="emoji-47"><img src="' + flag_url + 'image/emoji/emoji-48.png" data-image="emoji-48"><img src="' + flag_url + 'image/emoji/emoji-49.png" data-image="emoji-49"><img src="' + flag_url + 'image/emoji/emoji-50.png" data-image="emoji-50"><!-- 50-60 --><img src="' + flag_url + 'image/emoji/emoji-51.png" data-image="emoji-51"><img src="' + flag_url + 'image/emoji/emoji-52.png" data-image="emoji-52"><img src="' + flag_url + 'image/emoji/emoji-53.png" data-image="emoji-53"><img src="' + flag_url + 'image/emoji/emoji-54.png" data-image="emoji-54"><img src="' + flag_url + 'image/emoji/emoji-55.png" data-image="emoji-55"><img src="' + flag_url + 'image/emoji/emoji-56.png" data-image="emoji-56"><img src="' + flag_url + 'image/emoji/emoji-57.png" data-image="emoji-57"><img src="' + flag_url + 'image/emoji/emoji-58.png" data-image="emoji-58"><img src="' + flag_url + 'image/emoji/emoji-59.png" data-image="emoji-59"><img src="' + flag_url + 'image/emoji/emoji-60.png" data-image="emoji-60"><!-- 60-70 --><img src="' + flag_url + 'image/emoji/emoji-61.png" data-image="emoji-61"><img src="' + flag_url + 'image/emoji/emoji-62.png" data-image="emoji-62"><img src="' + flag_url + 'image/emoji/emoji-63.png" data-image="emoji-63"><img src="' + flag_url + 'image/emoji/emoji-64.png" data-image="emoji-64"><img src="' + flag_url + 'image/emoji/emoji-65.png" data-image="emoji-65"><img src="' + flag_url + 'image/emoji/emoji-66.png" data-image="emoji-66"><img src="' + flag_url + 'image/emoji/emoji-67.png" data-image="emoji-67"><img src="' + flag_url + 'image/emoji/emoji-68.png" data-image="emoji-68"><img src="' + flag_url + 'image/emoji/emoji-69.png" data-image="emoji-69"><img src="' + flag_url + 'image/emoji/emoji-70.png" data-image="emoji-70"><!-- 70-80 --><img src="' + flag_url + 'image/emoji/emoji-71.png" data-image="emoji-71"><img src="' + flag_url + 'image/emoji/emoji-72.png" data-image="emoji-72"><img src="' + flag_url + 'image/emoji/emoji-73.png" data-image="emoji-73"><img src="' + flag_url + 'image/emoji/emoji-74.png" data-image="emoji-74"><img src="' + flag_url + 'image/emoji/emoji-75.png" data-image="emoji-75"></div></div></div</div></div></div><div class="list-cmd"></div>');
				var form_comment = info_main.parent().find('.form-comment');
				var textarea = form_comment.find('.textarea').first();
				var position = form_comment.position();
				var position2 = info_main.parent().position();
				textarea.focus();
				$('html, body').animate({scrollTop: position.top + position2.top + 220});
			} else {
				var textarea = form_comment.find('.textarea').first();
				var position = form_comment.position();
				textarea.focus();
				$('html, body').animate({scrollTop: position.top + position2.top + 220});
			}
	});
	$('.item-comment p.like a.cmd-child').click(function() {
		var t = $(this).parent().parent().parent().parent().parent();
		var f = t.parent().find('.form-comment');
		var p = t.parents('.form-comment.parent');
		var image = p.data('image');
		if (f.length == 0) {
			t.prepend('<div class="form-comment child clearfix"><div class="image"><img src="' + flag_url + 'image/users/' + image + '.jpg" class="img-circle"></div><div class="text-cmd"><div class="textarea" data-placeholder="thêm bình luận" contentEditable="true" spellcheck="false"></div><button class="btn submit mr5 open-modal hide">Đăng</button><button class="btn reset mr5 hide">Hủy</button><button class="btn submit mr5 open-modal mbshow" data-id="' + id_page + '" data-page="' + page + '">Đăng bình luận</button><button class="btn reset mr5 mbshow">Hủy bỏ</button><div class="dropdown"><button class="btn emoji select"><img src="' + flag_url + 'image/emoji/emoji-04.png" width="28px"></button><div class="dropdown-menu"><!-- 1-10 --><img src="' + flag_url + 'image/emoji/emoji-01.png" data-image="emoji-01"><img src="' + flag_url + 'image/emoji/emoji-02.png" data-image="emoji-02"><img src="' + flag_url + 'image/emoji/emoji-03.png" data-image="emoji-03"><img src="' + flag_url + 'image/emoji/emoji-04.png" data-image="emoji-04"><img src="' + flag_url + 'image/emoji/emoji-05.png" data-image="emoji-05"><img src="' + flag_url + 'image/emoji/emoji-06.png" data-image="emoji-06"><img src="' + flag_url + 'image/emoji/emoji-07.png" data-image="emoji-07"><img src="' + flag_url + 'image/emoji/emoji-08.png" data-image="emoji-08"><img src="' + flag_url + 'image/emoji/emoji-09.png" data-image="emoji-09"><img src="' + flag_url + 'image/emoji/emoji-10.png" data-image="emoji-10"><!-- 10-20 --><img src="' + flag_url + 'image/emoji/emoji-11.png" data-image="emoji-11"><img src="' + flag_url + 'image/emoji/emoji-12.png" data-image="emoji-12"><img src="' + flag_url + 'image/emoji/emoji-13.png" data-image="emoji-13"><img src="' + flag_url + 'image/emoji/emoji-14.png" data-image="emoji-14"><img src="' + flag_url + 'image/emoji/emoji-15.png" data-image="emoji-15"><img src="' + flag_url + 'image/emoji/emoji-16.png" data-image="emoji-16"><img src="' + flag_url + 'image/emoji/emoji-17.png" data-image="emoji-17"><img src="' + flag_url + 'image/emoji/emoji-18.png" data-image="emoji-18"><img src="' + flag_url + 'image/emoji/emoji-19.png" data-image="emoji-19"><img src="' + flag_url + 'image/emoji/emoji-20.png" data-image="emoji-20"><!-- 20-30 --><img src="' + flag_url + 'image/emoji/emoji-21.png" data-image="emoji-21"><img src="' + flag_url + 'image/emoji/emoji-22.png" data-image="emoji-22"><img src="' + flag_url + 'image/emoji/emoji-23.png" data-image="emoji-23"><img src="' + flag_url + 'image/emoji/emoji-24.png" data-image="emoji-24"><img src="' + flag_url + 'image/emoji/emoji-25.png" data-image="emoji-25"><img src="' + flag_url + 'image/emoji/emoji-26.png" data-image="emoji-26"><img src="' + flag_url + 'image/emoji/emoji-27.png" data-image="emoji-27"><img src="' + flag_url + 'image/emoji/emoji-28.png" data-image="emoji-28"><img src="' + flag_url + 'image/emoji/emoji-29.png" data-image="emoji-29"><img src="' + flag_url + 'image/emoji/emoji-30.png" data-image="emoji-30"><!-- 30-40 --><img src="' + flag_url + 'image/emoji/emoji-31.png" data-image="emoji-31"><img src="' + flag_url + 'image/emoji/emoji-32.png" data-image="emoji-32"><img src="' + flag_url + 'image/emoji/emoji-33.png" data-image="emoji-33"><img src="' + flag_url + 'image/emoji/emoji-34.png" data-image="emoji-34"><img src="' + flag_url + 'image/emoji/emoji-35.png" data-image="emoji-35"><img src="' + flag_url + 'image/emoji/emoji-36.png" data-image="emoji-36"><img src="' + flag_url + 'image/emoji/emoji-37.png" data-image="emoji-37"><img src="' + flag_url + 'image/emoji/emoji-38.png" data-image="emoji-38"><img src="' + flag_url + 'image/emoji/emoji-39.png" data-image="emoji-39"><img src="' + flag_url + 'image/emoji/emoji-40.png" data-image="emoji-40"><!-- 40-50 --><img src="' + flag_url + 'image/emoji/emoji-41.png" data-image="emoji-41"><img src="' + flag_url + 'image/emoji/emoji-42.png" data-image="emoji-42"><img src="' + flag_url + 'image/emoji/emoji-43.png" data-image="emoji-43"><img src="' + flag_url + 'image/emoji/emoji-44.png" data-image="emoji-44"><img src="' + flag_url + 'image/emoji/emoji-45.png" data-image="emoji-45"><img src="' + flag_url + 'image/emoji/emoji-46.png" data-image="emoji-46"><img src="' + flag_url + 'image/emoji/emoji-47.png" data-image="emoji-47"><img src="' + flag_url + 'image/emoji/emoji-48.png" data-image="emoji-48"><img src="' + flag_url + 'image/emoji/emoji-49.png" data-image="emoji-49"><img src="' + flag_url + 'image/emoji/emoji-50.png" data-image="emoji-50"><!-- 50-60 --><img src="' + flag_url + 'image/emoji/emoji-51.png" data-image="emoji-51"><img src="' + flag_url + 'image/emoji/emoji-52.png" data-image="emoji-52"><img src="' + flag_url + 'image/emoji/emoji-53.png" data-image="emoji-53"><img src="' + flag_url + 'image/emoji/emoji-54.png" data-image="emoji-54"><img src="' + flag_url + 'image/emoji/emoji-55.png" data-image="emoji-55"><img src="' + flag_url + 'image/emoji/emoji-56.png" data-image="emoji-56"><img src="' + flag_url + 'image/emoji/emoji-57.png" data-image="emoji-57"><img src="' + flag_url + 'image/emoji/emoji-58.png" data-image="emoji-58"><img src="' + flag_url + 'image/emoji/emoji-59.png" data-image="emoji-59"><img src="' + flag_url + 'image/emoji/emoji-60.png" data-image="emoji-60"><!-- 60-70 --><img src="' + flag_url + 'image/emoji/emoji-61.png" data-image="emoji-61"><img src="' + flag_url + 'image/emoji/emoji-62.png" data-image="emoji-62"><img src="' + flag_url + 'image/emoji/emoji-63.png" data-image="emoji-63"><img src="' + flag_url + 'image/emoji/emoji-64.png" data-image="emoji-64"><img src="' + flag_url + 'image/emoji/emoji-65.png" data-image="emoji-65"><img src="' + flag_url + 'image/emoji/emoji-66.png" data-image="emoji-66"><img src="' + flag_url + 'image/emoji/emoji-67.png" data-image="emoji-67"><img src="' + flag_url + 'image/emoji/emoji-68.png" data-image="emoji-68"><img src="' + flag_url + 'image/emoji/emoji-69.png" data-image="emoji-69"><img src="' + flag_url + 'image/emoji/emoji-70.png" data-image="emoji-70"><!-- 70-80 --><img src="' + flag_url + 'image/emoji/emoji-71.png" data-image="emoji-71"><img src="' + flag_url + 'image/emoji/emoji-72.png" data-image="emoji-72"><img src="' + flag_url + 'image/emoji/emoji-73.png" data-image="emoji-73"><img src="' + flag_url + 'image/emoji/emoji-74.png" data-image="emoji-74"><img src="' + flag_url + 'image/emoji/emoji-75.png" data-image="emoji-75"></div></div></div</div><div class="list-cmd"></div>');
				var f = t.parent().find('.form-comment');
				var g = f.find('.textarea').first();
				var position = f.position();
				var position2 = f.parent().parent().position();
				console.log(position2);
				g.focus();
				$('html, body').animate({scrollTop: position.top + position2.top + 220});
		} else {
			var g = f.find('.textarea').first();
			var position = f.position();
			g.focus();
			$('html, body').animate({scrollTop: position.top + position2.top + 220});
		}
	});
	$(document).on('click', '.list-comment span.like img', function() {
		var num = $(this).parent().find('span.num-like');
		var t = num.text();
		if (t == '') t = 0;
		else t = parseInt(t);
		t++;
		num.text(t);
		//save data
		var id = $(this).parents('.item-comment').data('id');
		$.ajax({
			type: 'get',
			url: '/ajax/like_comment/'+id,
			success:function() {
				console.log('like success');
			}
		});
	});
	$(document).on('click', '.list-comment span.dislike img', function() {
		var num = $(this).parent().find('span.num-dislike');
		var t = num.text();
		if (t == '') t = 0;
		else t = parseInt(t);
		t++;
		num.text(t);
		//save data
		var id = $(this).parents('.item-comment').data('id');
		$.ajax({
			type: 'get',
			url: '/ajax/dislike_comment/'+id,
			success:function() {
				console.log('dislike success');
			}
		});
	});
	$(document).on('click', '.form-comment .reset', function() {
		$(this).parent().find('.textarea').html('');
	});
	//click like book
	$('.book .btn.right').click(function() {
		// check login
		if ($(this).hasClass('login')) {
			if ($(this).hasClass('off')) {
				// unlike book
				var button = this;
				var book_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/unlike_book/'+auth_id+'/'+book_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Yêu thích');
						$(button).removeClass('off');
						$('.info .group .red span.number').text(data);
					}
				});
			} else {
				// like book
				var button = this;
				var book_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/like_book/'+auth_id+'/'+book_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Bỏ thích');
						$(button).addClass('off');
						$('.info .group .red span.number').text(data);
					}
				});
			}
		}
	});
	//click follow book
	$('.book .btn.center').click(function() {
		// check login
		if ($(this).hasClass('login')) {
			if ($(this).hasClass('off')) {
				// unfollow book
				var button = this;
				var book_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/unfollow_book/'+auth_id+'/'+book_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Theo dõi');
						$(button).removeClass('off');
						$('.info .group .green span.number').text(data);
					}
				});
			} else {
				// follow book
				var button = this;
				var book_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/follow_book/'+auth_id+'/'+book_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Bỏ theo dõi');
						$(button).addClass('off');
						$('.info .group .green span.number').text(data);
					}
				});
			}
		}
	});
	//click rate book
	$('.book .btn.left').click(function() {
		var book_id = $(this).data('id');
		$('#modalrate button.login').data('id', book_id);
		$('#modalrate button.login').data('item', 'book');
	});
	//click like author
	$('.author .btn.right').click(function() {
		// check login
		if ($(this).hasClass('login')) {
			if ($(this).hasClass('off')) {
				// unlike author
				var button = this;
				var author_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/unlike_author/'+auth_id+'/'+author_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Yêu thích');
						$(button).removeClass('off');
						$('.info .group .red span.number').text(data);
					}
				});
			} else {
				// like author
				var button = this;
				var author_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/like_author/'+auth_id+'/'+author_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Bỏ thích');
						$(button).addClass('off');
						$('.info .group .red span.number').text(data);
					}
				});
			}
		}
	});
	//click follow author
	$('.author .btn.center').click(function() {
		// check login
		if ($(this).hasClass('login')) {
			if ($(this).hasClass('off')) {
				// unfollow author
				var button = this;
				var author_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/unfollow_author/'+auth_id+'/'+author_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Theo dõi');
						$(button).removeClass('off');
						$('.info .group .green span.number').text(data);
					}
				});
			} else {
				// follow author
				var button = this;
				var author_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/follow_author/'+auth_id+'/'+author_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Bỏ theo dõi');
						$(button).addClass('off');
						$('.info .group .green span.number').text(data);
					}
				});
			}
		}
	});
	//click rate author
	$('.author .btn.left').click(function() {
		var author_id = $(this).data('id');
		$('#modalrate button.login').data('id', author_id);
		$('#modalrate button.login').data('item', 'author');
	});
	//click like trans
	$('.trans .btn.right').click(function() {
		// check login
		if ($(this).hasClass('login')) {
			if ($(this).hasClass('off')) {
				// unlike trans
				var button = this;
				var trans_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/unlike_trans/'+auth_id+'/'+trans_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Yêu thích');
						$(button).removeClass('off');
						$('.info .group .red span.number').text(data);
					}
				});
			} else {
				// like trans
				var button = this;
				var trans_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/like_trans/'+auth_id+'/'+trans_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Bỏ thích');
						$(button).addClass('off');
						$('.info .group .red span.number').text(data);
					}
				});
			}
		}
	});
	//click follow author
	$('.trans .btn.center').click(function() {
		// check login
		if ($(this).hasClass('login')) {
			if ($(this).hasClass('off')) {
				// unfollow trans
				var button = this;
				var trans_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/unfollow_trans/'+auth_id+'/'+trans_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Theo dõi');
						$(button).removeClass('off');
						$('.info .group .green span.number').text(data);
					}
				});
			} else {
				// follow trans
				var button = this;
				var trans_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/follow_trans/'+auth_id+'/'+trans_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Bỏ theo dõi');
						$(button).addClass('off');
						$('.info .group .green span.number').text(data);
					}
				});
			}
		}
	});
	//click rate author
	$('.trans .btn.left').click(function() {
		var trans_id = $(this).data('id');
		$('#modalrate button.login').data('id', trans_id);
		$('#modalrate button.login').data('item', 'trans');
	});
	//click like user
	$('.user .btn.right').click(function() {
		// check login
		if ($(this).hasClass('login')) {
			if ($(this).hasClass('off')) {
				// unlike user
				var button = this;
				var user_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/unlike_user/'+auth_id+'/'+user_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Yêu thích');
						$(button).removeClass('off');
						$('.info .group .red span.number').text(data);
					}
				});
			} else {
				// like user
				var button = this;
				var user_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/like_user/'+auth_id+'/'+user_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Bỏ thích');
						$(button).addClass('off');
						$('.info .group .red span.number').text(data);
					}
				});
			}
		}
	});
	//click add friend
	$('.user .btn.center').click(function() {
		// check login
		if ($(this).hasClass('login')) {
			if (!$(this).hasClass('off')) {
				// unfollow trans
				var button = this;
				var user_id = $(this).data('id');
				$.ajax({
					url: flag_url+'detail/ajax/add_friend/'+auth_id+'/'+user_id,
					type: 'GET',
					success: function(data) {
						$(button).text('Đã gữi');
						$(button).addClass('off');
						// $('.info .group .green span.number').text(data);
					}
				});
			}
		}
	});
	//click rate user
	$('.user .btn.left').click(function() {
		var user_id = $(this).data('id');
		$('#modalrate button.login').data('id', user_id);
		$('#modalrate button.login').data('item', 'user');
	});
	$('#modalrate button.login').click(function() {
		// rate book
		var button  = this;
		var item_id = $(this).data('id');
		var point   = $(this).data('star');
		var item    = $(this).data('item');
		$.ajax({
			url: flag_url+'detail/ajax/rate_'+item+'/'+auth_id+'/'+item_id+'/'+point,
			type: 'GET',
			success: function(data) {
				$(button).parents('#modalrate').css('display','none');
				$('.info .star span.rate').text(data['rate']);
				$('.info .star span.rate_point').text(data['rate_point']);
			}
		});
	});
	//modal rate
	$('.modal.rate .rate .star').mouseenter(function() {
		//check
		if ($(this).parent().hasClass('end')) return;

		var star = parseInt($(this).data('star'));
		// console.log(star);
		for (i = 5; i > star; i--) {
			$('.modal.rate .rate .star[data-star="' + i + '"]').find('span').addClass('fa-star-o');
			$('.modal.rate .rate .star[data-star="' + i + '"]').find('span').removeClass('fa-star');
		}
		for (i = 1; i <= star; i++) {
			$('.modal.rate .rate .star[data-star="' + i + '"]').find('span').removeClass('fa-star-o');
			$('.modal.rate .rate .star[data-star="' + i + '"]').find('span').addClass('fa-star');
		}
	});
	
	$('.modal.rate .rate .star').click(function() {
		var star = $(this).data('star');
		$('.modal.rate .rate').toggleClass('end');
		$(this).toggleClass('checked');
		$(this).parents('.main').find('.btn.login').data('star', star);
	});
	$('.modal.rate .rate').mouseleave(function() {
		if ($(this).hasClass('end')) return;
		$('.modal.rate .rate .star').find('span').removeClass('fa-star');
		$('.modal.rate .rate .star').find('span').addClass('fa-star-o');
	});
	$('.open-modal.edit').click(function() {
		var type = $(this).data('type');
		var text = '';
		if (type == 'name') text = 'Tên hiển thị';
		$('#modaledit .main label.name').text(text);
	});

	//report
	$('.item-comment .info .cmd').mouseenter(function() {
		$(this).find('.report span').css('display','block');
	});
	$('.item-comment .info .cmd').mouseleave(function() {
		$(this).find('.report span').css('display','none');
	});
	$('.item-comment .info .cmd .report').mouseenter(function() {
		$(this).find('span').css('color','#bbb');
	});
	$('.item-comment .info .cmd .report').mouseleave(function() {
		$(this).find('span').css('color','#ddd');
	});
});