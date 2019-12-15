$(document).ready(function() {
	//menu scroll
	$(window).scroll(function() {
		if ($(this).scrollTop() > 140) {
			$('.menu').addClass('fixed-top');
			$('section').addClass('mt-50');
		}
		else {
			$('.menu').removeClass('fixed-top');
			$('section').removeClass('mt-50');
		}

		// top button
		if ($(this).scrollTop() > 200) {
			$('.top').css('display','block');
		}
		else {
			$('.top').css('display','none');
		}
	});
	//modal
	//open modal
	$(document).on('click', '.open-modal', function() {
		var id = $(this).data('modal');
		$(id).css('display','block');
	});
	//close modal
	$('.modal .header .close').click(function() {
		var id = $(this).data('modal');
		// console.log(id);
		$(id).css('display','none');
	});
	//close modal when click cancel
	$('.modal .main .cancel').click(function() {
		var id = $(this).data('modal');
		// console.log(id);
		$(id).css('display','none');
	});
	//close modal when click login
	$('.modal .main .login').click(function() {
		var id = $(this).data('modal');
		// console.log(id);
		$(id).css('display','none');
	});

	$('.menu .navbar ul.nav li a').click(function() {
		box = this;
		$.ajax({
			type: 'GET',
			url: flag_url + 'home/ajax/check_seen_notification',
			success:function(data) {
				$(box).find('span.number').text('');
			}
		});
	});

	//new comment
	$(document).on('click', '.line.comment .form-comment button.submit', function() {
		var id_page  = $(this).data('id');
		var content  = $(this).parent().find('.textarea').html();
		var token    = $('.form-comment.parent .token').val();
		var page     = $(this).data('page');
		var form     = $(this).parents('.form-comment');
		var button   = this;
		var level    = 0;
		var id_reply = null;
		//reset textarea
		$(button).parent().find('.textarea').text('');
		//check reply comment
		if (form.hasClass('child')) {
			id_reply = form.parents('.item-comment').data('id');
			level = 1;
		}
		if (content == '') {
			alert('Bạn không thể để trống bình luận');
		}
		else {
			if (page == 'chap') {
				type = 'read';
				page = 'read';
			} else {
				type = 'detail';
			}

			$.ajax({
				url: '/comment',
				type: 'post',
				data: {
					id_page: id_page,
					content: content,
					type: type,
					page: page,
					level: level,
					id_reply: id_reply,
					_token: token,
				},
				success:function(data) {
					var user = data['user'];
					$(button).parent().parent().parent().find('.list-cmd').first().prepend('<div class="item-comment clearfix"><div class="image"><img src="' + flag_url + 'image/users/' + user.image + '.jpg" class="img-circle"></div><div class="info"><p class="name"><a href="' + flag_url + 'detail/user/' + user.name_login + '">' + user.name + '</a> · <span>' + user.nickname + '</span></p><p class="text">' + content + '</p><p class="like"><a class="cmd-main" disabled="disabled">Phản hồi</a> · <span class="like"><img src="' + flag_url + 'image/like.png"> <span class="num-like"></span></span> · <span class="dislike"><img src="' + flag_url + 'image/dislike.png"> <span class="num-dislike"></span></span> <span class="cmd-date">· 04/01/2018</span></p></div></div>');

					if (level == 1) {
						$(button).parents('.form-comment.child').remove();
					}
				}
			});
		}
	});
});

//close modal when click outside
//var modal = document.getElementById("backgroundmodal");
window.onload = init;

  function init(){
    //var modal = $('#backgroundmodal').contents();
    var modal = document.getElementsByClassName("modal")[0];

	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
  }
