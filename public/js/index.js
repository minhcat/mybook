$(document).ready(function() {
	$('.slide').slick({
		dots: true,
		autoplay: true,
        autoplaySpeed: 3000
	});
	// search dropdown
	$('.search .content input').keydown(function(e) {
		e.stopPropagation();
		if (e.which == 8) {
			$('.navbar .search .dropdown-menu').parent().removeClass('open');
		} else {
			$('.navbar .search .dropdown-menu').dropdown('toggle');
		}
	});
	$('body').click(function(e) {
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
	
	$('.show-popup.book').mouseenter(function() {
		enter_link_book = 1;
		$('.popup.user').css('display','none');

		var offset = $(this).offset();
		var popup = $('.popup.book');

		var top_popup = offset.top - 60;
		var left_popup = offset.left - 270;

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

		var offset = $(this).offset();
		var popup = $('.popup.user');

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

	//scroll top
	$('.top').click(function() {
		$('html, body').animate({scrollTop: 0});
	});
	var data1 = '<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-6"><div class="book-content"><img src="image/bang-hoai-3rd.jpg"><div class="book-info"><div class="name">Băng Hoại 3rd</div><div class="group row"><div class="view col-md-6 col-sm-4 col-xs-4 col-xxs-6 text-left"><span class="glyphicon glyphicon-eye-open"></span> <span>100,000</span></div><div class="like col-md-4 col-md-push-2 col-sm-3 col-xs-3 col-xxs-6 col-xs-push-5 text-right"><span class="glyphicon glyphicon-heart"></span> <span>1000</span></div></div></div><div class="rank bg-gray">9</div><div class="book-hover bg-gray"><div class="name">Băng Hoại 3rd</div><div class="type">Khoa học viễn tưởng, hài hước</div><div class="chap">75 tập</div><button class="play">Xem Ngay</button><div class="group row"><div class="view col-md-6 col-sm-4 col-xs-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100,000</span></div><div class="like col-md-4 col-md-push-2 col-sm-3 col-xs-3 col-xs-push-5"><span class="glyphicon glyphicon-heart"></span> <span>1000</span></div></div></div></div></div>';
	var data2 = '<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-6"><div class="book-content"><img src="image/boruto.jpg"><div class="book-info"><div class="name">Boruto</div><div class="group row"><div class="view col-md-6 col-sm-4 col-xs-4 col-xxs-6 text-left"><span class="glyphicon glyphicon-eye-open"></span> <span>100,000</span></div><div class="like col-md-4 col-md-push-2 col-sm-3 col-xs-3 col-xxs-6 col-xs-push-5 text-right"><span class="glyphicon glyphicon-heart"></span> <span>1000</span></div></div></div><div class="rank bg-gray">10</div><div class="book-hover bg-gray"><div class="name">Boruto</div><div class="type">phiêu lưu, hài hước</div><div class="chap">35 tập</div><button class="play">Xem Ngay</button><div class="group row"><div class="view col-md-6 col-sm-4 col-xs-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100,000</span></div><div class="like col-md-4 col-md-push-2 col-sm-3 col-xs-3 col-xs-push-5"><span class="glyphicon glyphicon-heart"></span> <span>1000</span></div></div></div></div></div>';
	var data3 = '<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-6"><div class="book-content"><img src="image/mahoutsukai-no-yome.jpg"><div class="book-info"><div class="name">Mahoutsukai no Yome</div><div class="chap">Chap 25: Không kẻ nào điếc hơn kẻ không muốn nghe</div></div><div class="new">NEW</div><div class="book-hover bg-blue"><div class="name">Mahoutsukai no Yome</div><div class="chap">Chap 25: Không kẻ nào điếc hơn kẻ không muốn nghe</div><button class="play">Xem Ngay</button><div class="group row"><div class="like col-md-4 col-sm-4 col-xxs-4"><span class="glyphicon glyphicon-heart"></span> <span>100</span></div><div class="comment col-md-4 col-sm-4 col-xxs-4"><span class="glyphicon glyphicon-comment"></span> <span>100</span></div><div class="view col-md-4 col-sm-4 col-xxs-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100</span></div></div></div></div></div>';
	var data4 = '<div class="book col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-6"><div class="book-content"><img src="image/himouto-umaru-chan.jpg"><div class="book-info"><div class="name">Himouto Umaru-chan</div><div class="chap">Chap 10: Umaru và Hikari</div></div><div class="book-hover bg-blue"><div class="name">Himouto Umaru-chan</div><div class="chap">Chap 10: Umaru và Hikari</div><button class="play">Xem Ngay</button><div class="group row"><div class="like col-md-4 col-sm-4 col-xxs-4"><span class="glyphicon glyphicon-heart"></span> <span>100</span></div><div class="comment col-md-4 col-sm-4 col-xxs-4"><span class="glyphicon glyphicon-comment"></span> <span>100</span></div><div class="view col-md-4 col-sm-4 col-xxs-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100</span></div></div></div></div></div>';
	var data5 = '<div class="book col-lg-3 col-md-3"><div class="book-content"><img src="image/sword-art-online.jpg"><div class="book-info"><div class="name">Sword Art Online</div><div class="group row"><div class="comment col-md-4"><span class="glyphicon glyphicon-comment"></span> <span>100</span></div><div class="like col-md-4"><span class="glyphicon glyphicon-heart"></span> <span>100</span></div><div class="view col-md-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100</span></div></div></div><div class="book-hover bg-turquoise"><div class="name">Sword Art Online</div><div class="type">phiêu lưu, lãng mạn, hài hước</div><div class="chap">75 tập</div><button class="play">Xem Ngay</button><div class="group row"><div class="comment col-md-4"><span class="glyphicon glyphicon-comment"></span> <span>100</span></div><div class="like col-md-4"><span class="glyphicon glyphicon-heart"></span> <span>100</span></div><div class="view col-md-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100</span></div></div></div></div></div>';
	var data6 = '<div class="book col-lg-3 col-md-3"><div class="book-content"><img src="image/attack-on-titan-movie.jpg"><div class="book-info"><div class="name">Attack On Titan</div><div class="group row"><div class="comment col-md-4"><span class="glyphicon glyphicon-comment"></span> <span>100</span></div><div class="like col-md-4"><span class="glyphicon glyphicon-heart"></span> <span>100</span></div><div class="view col-md-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100</span></div></div></div><div class="book-hover bg-turquoise"><div class="name">Attack On Titan</div><div class="type">phiêu lưu, kinh dị, lãng mạn</div><div class="chap">75 tập</div><button class="play">Xem Ngay</button><div class="group row"><div class="comment col-md-4"><span class="glyphicon glyphicon-comment"></span> <span>100</span></div><div class="like col-md-4"><span class="glyphicon glyphicon-heart"></span> <span>100</span></div><div class="view col-md-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100</span></div></div></div></div></div>';
	var data7 = '<div class="book col-lg-3 col-md-3"><div class="book-content"><img src="image/seiken-tsukai-no-kinshuu-eishou.jpg"><div class="book-info"><div class="name">Seiken Tsukai no Kinshuu Eishou</div><div class="group row"><div class="like col-md-4"><span class="glyphicon glyphicon-heart"></span> <span>100</span></div><div class="comment col-md-4"><span class="glyphicon glyphicon-comment"></span> <span>100</span></div><div class="view col-md-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100</span></div></div></div><div class="book-hover bg-red"><div class="name">Seiken Tsukai no Kinshuu...</div><div class="type">phiêu lưu, giả tưởng, hài hước</div><div class="chap">25 tập</div><button class="play">Xem Ngay</button><div class="group row"><div class="like col-md-4"><span class="glyphicon glyphicon-heart"></span> <span>100</span></div><div class="comment col-md-4"><span class="glyphicon glyphicon-comment"></span> <span>100</span></div><div class="view col-md-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100</span></div></div></div></div></div>';
	var data8 = '<div class="book col-lg-3 col-md-3"><div class="book-content"><img src="image/shokugeki-no-souma.jpg"><div class="book-info"><div class="name">Shokugeki no Souma</div><div class="group row"><div class="like col-md-4"><span class="glyphicon glyphicon-heart"></span> <span>100</span></div><div class="comment col-md-4"><span class="glyphicon glyphicon-comment"></span> <span>100</span></div><div class="view col-md-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100</span></div></div></div><div class="book-hover bg-red"><div class="name">Shokugeki no Souma</div><div class="type">Ẩm thực, tình cảm, hài hước</div><div class="chap">35 tập</div><button class="play">Xem Ngay</button><div class="group row"><div class="like col-md-4"><span class="glyphicon glyphicon-heart"></span> <span>100</span></div><div class="comment col-md-4"><span class="glyphicon glyphicon-comment"></span> <span>100</span></div><div class="view col-md-4"><span class="glyphicon glyphicon-eye-open"></span> <span>100</span></div></div></div></div></div>';
	$('.view .btn.btn-link').click(function(){
		var parent = $(this).parent().parent();
		var row = parent.find('.topic-content > .row');
		row.append(data1);
		row.append(data1);
		row.append(data1);
		row.append(data1);
		row.append(data2);
		row.append(data2);
		row.append(data2);
		row.append(data2);
	});
	$('.update .btn.btn-link').click(function(){
		var parent = $(this).parent().parent();
		var row = parent.find('.topic-content > .row');
		row.append(data3);
		row.append(data3);
		row.append(data3);
		row.append(data3);
		row.append(data4);
		row.append(data4);
		row.append(data4);
		row.append(data4);
	});
	$('.comment .btn.btn-link').click(function(){
		var parent = $(this).parent().parent();
		var row = parent.find('.topic-content > .row');
		row.append(data5);
		row.append(data5);
		row.append(data5);
		row.append(data5);
		row.append(data6);
		row.append(data6);
		row.append(data6);
		row.append(data6);
	});
	$('.rate .btn.btn-link').click(function(){
		var parent = $(this).parent().parent();
		var row = parent.find('.topic-content > .row');
		row.append(data7);
		row.append(data7);
		row.append(data7);
		row.append(data7);
		row.append(data8);
		row.append(data8);
		row.append(data8);
		row.append(data8);
	});
});