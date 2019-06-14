$(document).ready(function() {
	//click combobox search
	$('.search-box button.select').click(function(e) {
		e.stopPropagation();
		var btn_this = $(this);
		//close other combobox
		$('.search-box .dropdown-menu').parent().each(function() {
			if ( !$(this).is( btn_this.parent() ) ) {
				$(this).removeClass('open');
			}
		});

		$(this).parent().toggleClass('open');
	});

	//select category
	$('.category .item').click(function() {
		$(this).toggleClass('select');
	});

	//click option combobox
	$('.search-box .dropdown-menu li').click(function() {
		var parent = $(this).parent().parent();
		parent.find('.text').text($(this).text());
		$('.search-box .dropdown-menu').parent().removeClass('open');
	});

	$('body').click(function(e) {
		if ($(event.target).closest('.navigation').length) {
			return; //do nothing if event target is within the navigation
		} else {
			$('.search-box .dropdown-menu').parent().removeClass('open');
		}
	});

	//option
	$('.book').mouseenter(function() {
		$(this).find('.option span').css('display','block');
	});
	$('.book').mouseleave(function() {
		$(this).find('.option span').css('display','none');
		$(this).find('.option.open').removeClass('open');
	});
	$('.book .option').mouseenter(function() {
		$(this).find('span').css('color','#aaa');
	});
	$('.book .option').mouseleave(function() {
		$(this).find('span').css('color','#ddd');
	});

	//submit form search
	$('.btn-search').click(function() {
		//add year value
		var year = $('.select.year').text();
		year = year.replace(/\s+/g, '');
		if (year == 'tấtcả') year = 0;
		$('input.year').val(year);

		//add status value
		var status = $('.select.status').text();
		status = status.replace(/\s+/g, '');
		if (status == 'tấtcả') status = 0;
		else if (status == 'hoànthành') status = 1;
		else status = 2;
		$('input.status').val(status);

		//add chap value
		var chap = $('.select.chap').text();
		chap = chap.replace(/\s+/g, '');
		if (chap == 'tấtcả') chap = 0;
		else if (chap == 'oneshot') chap = 1;
		else if (chap == '2-10chap') chap = 10;
		else if (chap == '11-20chap') chap = 20;
		else if (chap == '21-50chap') chap = 50;
		$('input.chap').val(chap);

		//add sort value
		var sort = $('.select.sort').text();
		sort = sort.replace(/\s+/g, '');
		if (sort == 'ngàyđăng') sort = 0;
		else if (sort == 'bảngchữcái') sort = 1;
		else if (sort == 'lượtxem') sort = 2;
		$('input.sort').val(sort);

		//add sort value
		var order = $('.select.order').text();
		// console.log(order);
		order = order.replace(/\s+/g, '');
		// console.log(order);
		if (order == 'tăngdần') order = 0;
		else if (order == 'giảmdần') order = 1;
		$('input.order').val(order);

		//add category value
		var cate = '';
		$('.group.category .item-group .item.select').each(function() {
			var icate = $(this).text();
			if (cate == '')
				cate = '"' + icate + '"';
			else
				cate = cate + ',' + '"' + icate + '"';
		});
		cate = '[' + cate + ']';
		console.log(cate);
		$('input.category').val(cate);

		$('.search-box form').submit();
	});
});