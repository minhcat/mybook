$(document).ready(function() {
	//click button and active
	$('.box .btn.btn-control').click(function() {
		var t = this;
		$(this).parent().find('.active').each(function() {
			if (!$(this).is(t)){
				$(this).removeClass('active');
			}
		});

		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		}
	});
	//click button list box
	$('.box.list .btn').click(function() {
		if ($(this).hasClass('btn-success')) {
			$(this).removeClass('btn-success');
			$(this).addClass('btn-danger');
			$(this).text('Xóa');
		} else {
			$(this).removeClass('btn-danger');
			$(this).addClass('btn-success');
			$(this).text('Thêm');
		}
	});
	/**********************/
	/**** CLICK BUTTON ****/
	/**********************/
	window.time_type = 'day';
	window.info_type = 'view';
	window.type = 'all';
	window.box = 'book';
	$('.sidebar-menu .box-link.book').click(function() {
		window.type = 'all';
		window.box = 'book';
	});
	$('.sidebar-menu .box-link.category').click(function() {
		window.type = 'category';
		window.box = 'category';
	});
	$('.sidebar-menu .box-link.user').click(function() {
		window.type = 'user';
		window.box = 'user';
	});
	$('.sidebar-menu .box-link.trans').click(function() {
		window.type = 'trans';
		window.box = 'trans';
	});
	//type select
	$('.small-box.all').click(function() {
		window.type = 'all';
	});
	$('.small-box.book').click(function() {
		window.type = 'book';
	});
	$('.small-box.time').click(function() {
		window.type = 'time';
	});
	$('.small-box.chap').click(function() {
		window.type = 'chap';
	});
	$('.small-box.category').click(function() {
		window.type = 'category';
	});
	$('.small-box.user').click(function() {
		window.type = 'user';
	});
	$('.small-box.trans').click(function() {
		window.type = 'trans';
	});
	//info button
	$('.btn-control.view').click(function() {
		window.info_type = 'view';
	});
	$('.btn-control.comment').click(function() {
		window.info_type = 'comment';
	});
	$('.btn-control.like').click(function() {
		window.info_type = 'like';
	});
	$('.btn-control.follow').click(function() {
		window.info_type = 'follow';
	});
	$('.btn-control.rate').click(function() {
		window.info_type = 'rate';
	});
	//time button
	$('.btn-control.day').click(function() {
		window.time_type = 'day';
	});
	$('.btn-control.week').click(function() {
		window.time_type = 'week';
	});
	$('.btn-control.month').click(function() {
		window.time_type = 'month';
	});
	$('.btn-control.season').click(function() {
		window.time_type = 'season';
	});
	$('.btn-control.year').click(function() {
		window.time_type = 'year';
	});
	//type button
	$('.btn-control.all').click(function() {
		window.type = 'all';
	});
	$('.btn-control.book').click(function() {
		window.type = 'book';
	});
	$('.btn-control.time').click(function() {
		window.type = 'time';
	});
	$('.btn-control.chap').click(function() {
		window.type = 'chap';
	});
	//rate type radio
	$('.radio .rate.sum').click(function() {
		window.rate = 'sum';
	});
	$('.radio .rate.percent').click(function() {
		window.rate = 'percent';
	});
	$('.radio .rate.average').click(function() {
		window.rate = 'average';
	});
	//set default rate value
	$('.btn-control.rate').click(function() {
		window.rate = 'sum';
		$('.modal .rate').prop('checked',false);
		$('.modal .rate.sum').prop('checked',true);

	});
	//click type button in chart box
	$('.book .btn-control').click(function() {
		debugger;
		//don't work when click rate button
		if ($(this).hasClass('rate')) return;

		if (type == 'all') {
			if (info_type == 'view') {
				resetData();

				if (time_type == 'day') {

					all_book_data.labels = ['Chủ Nhật', 'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7'];
					all_book_data.datasets[0].data = view_day_all;
					window.all_book_chart.update();

				} else if (time_type == 'week') {

					all_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					all_book_data.datasets[0].data = view_week_all;
					window.all_book_chart.update();

				} else if (time_type == 'month') {

					all_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					all_book_data.datasets[0].data = view_month_all;
					window.all_book_chart.update();

				} else if (time_type == 'season') {

					all_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					all_book_data.datasets[0].data = view_season_all;
					window.all_book_chart.update();

				} else if (time_type == 'year') {

					all_book_data.labels = ['2012', '2013','2014','2015','2016','2017','2018', '2019'];
					all_book_data.datasets[0].data = view_year_all;
					window.all_book_chart.update();

				}
			} else if (info_type == 'comment') {
				resetData();

				if (time_type == 'day') {

					all_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					all_book_data.datasets[0].data = comment_day_all;
					window.all_book_chart.update();

				} else if (time_type == 'week') {

					all_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					all_book_data.datasets[0].data = comment_week_all;
					window.all_book_chart.update();

				} else if (time_type == 'month') {

					all_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					all_book_data.datasets[0].data = comment_month_all;
					window.all_book_chart.update();

				} else if (time_type == 'season') {

					all_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					all_book_data.datasets[0].data = comment_season_all;
					window.all_book_chart.update();

				} else if (time_type == 'year') {

					all_book_data.labels = ['2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'];
					all_book_data.datasets[0].data = comment_year_all;
					window.all_book_chart.update();

				}
			} else if (info_type == 'like') {
				resetData();
				
				if (time_type == 'day') {

					all_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					all_book_data.datasets[0].data = like_day_all;
					window.all_book_chart.update();

				} else if (time_type == 'week') {

					all_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					all_book_data.datasets[0].data = like_week_all;
					window.all_book_chart.update();

				} else if (time_type == 'month') {

					all_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					all_book_data.datasets[0].data = like_month_all;
					window.all_book_chart.update();

				} else if (time_type == 'season') {

					all_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					all_book_data.datasets[0].data = like_season_all;
					window.all_book_chart.update();

				} else if (time_type == 'year') {

					all_book_data.labels = ['2012', '2013','2014','2015','2016','2017','2018', '2019'];
					all_book_data.datasets[0].data = like_year_all;
					window.all_book_chart.update();

				}
			} else if (info_type == 'follow') {
				resetData();
				
				if (time_type == 'day') {

					all_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					all_book_data.datasets[0].data = [40,56,16,48,20,77,56];
					window.all_book_chart.update();

				} else if (time_type == 'week') {

					all_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					all_book_data.datasets[0].data = [48,39,56,64,48];
					window.all_book_chart.update();

				} else if (time_type == 'month') {

					all_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					all_book_data.datasets[0].data = [55,78,59,79,54,78,46,60,20,73,45,70];
					window.all_book_chart.update();

				} else if (time_type == 'season') {

					all_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					all_book_data.datasets[0].data = [54,25,76,43];
					window.all_book_chart.update();

				} else if (time_type == 'year') {

					all_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					all_book_data.datasets[0].data = [54,65,26,33,43,16,78,24,56];
					window.all_book_chart.update();

				}
			} else if (info_type == 'rate') {
				
				if (rate == 'sum') {
					if (time_type == 'day') {

						all_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						all_book_data.datasets[0].data = [54,44,66,54,20,67,56];
						all_book_data.datasets[1].data = [44,28,46,38,18,47,40];
						all_book_data.datasets[2].data = [34,16,32,24,08,37,36];
						all_book_data.datasets[3].data = [28,12,26,18,06,27,26];
						all_book_data.datasets[4].data = [14,10,16,08,04,17,16];

						window.all_book_chart.update();

					} else if (time_type == 'week') {

						all_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						all_book_data.datasets[0].data = [54,54,76,68,40];
						all_book_data.datasets[1].data = [44,34,56,58,30];
						all_book_data.datasets[2].data = [34,24,36,48,20];
						all_book_data.datasets[3].data = [24,14,26,28,10];
						all_book_data.datasets[4].data = [14,04,16,18,00];

						window.all_book_chart.update();

					} else if (time_type == 'month') {

						all_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						all_book_data.datasets[0].data = [54,54,76,68,40,56,47,88,93,55,67,60];
						all_book_data.datasets[1].data = [44,44,66,48,30,46,37,58,73,45,57,50];
						all_book_data.datasets[2].data = [34,34,46,38,20,36,27,48,53,35,47,40];
						all_book_data.datasets[3].data = [24,24,36,28,10,26,17,28,33,15,37,30];
						all_book_data.datasets[4].data = [14,14,26,18,00,16,07,18,13,05,27,20];

						window.all_book_chart.update();

					} else if (time_type == 'season') {

						all_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						all_book_data.datasets[0].data = [54,35,76,53];
						all_book_data.datasets[1].data = [44,18,56,36];
						all_book_data.datasets[2].data = [34,15,46,33];
						all_book_data.datasets[3].data = [24,10,26,23];
						all_book_data.datasets[4].data = [14,08,16,13];

						window.all_book_chart.update();

					} else if (time_type == 'year') {

						all_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						all_book_data.datasets[0].data = [54,65,26,33,43,36,78,24,56];
						all_book_data.datasets[1].data = [44,45,20,30,33,26,58,20,46];
						all_book_data.datasets[2].data = [34,35,19,28,23,16,48,18,36];
						all_book_data.datasets[3].data = [24,25,16,24,13,12,38,16,26];
						all_book_data.datasets[4].data = [14,20,10,20,03,10,28,12,16];

						window.all_book_chart.update();

					}
				} else if (rate == 'percent') {
					if (time_type == 'day') {

						all_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						all_book_data.datasets[0].data = [100,100,100,100,100,100,100];
						all_book_data.datasets[1].data = [80,78,76,88,95,67,90];
						all_book_data.datasets[2].data = [76,66,52,74,78,57,86];
						all_book_data.datasets[3].data = [58,42,36,28,66,37,46];
						all_book_data.datasets[4].data = [34,10,26,08,34,27,16];

						window.all_book_chart.update();

					} else if (time_type == 'week') {

						all_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						all_book_data.datasets[0].data = [100,100,100,100,100];
						all_book_data.datasets[1].data = [84,94,76,88,90];
						all_book_data.datasets[2].data = [64,74,56,58,70];
						all_book_data.datasets[3].data = [44,54,36,48,60];
						all_book_data.datasets[4].data = [34,24,16,28,30];

						window.all_book_chart.update();

					} else if (time_type == 'month') {

						all_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						all_book_data.datasets[0].data = [100,100,100,100,100,100,100,100,100,100,100,100];
						all_book_data.datasets[1].data = [84,94,76,88,90,76,87,78,93,75,87,60];
						all_book_data.datasets[2].data = [64,54,66,48,70,56,67,68,83,55,57,40];
						all_book_data.datasets[3].data = [44,34,46,38,50,36,37,28,43,45,37,30];
						all_book_data.datasets[4].data = [14,24,26,28,30,26,17,18,23,25,17,10];

						window.all_book_chart.update();

					} else if (time_type == 'season') {

						all_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						all_book_data.datasets[0].data = [100,100,100,100];
						all_book_data.datasets[1].data = [84,88,96,76];
						all_book_data.datasets[2].data = [64,75,76,63];
						all_book_data.datasets[3].data = [44,30,36,43];
						all_book_data.datasets[4].data = [24,28,16,23];

						window.all_book_chart.update();

					} else if (time_type == 'year') {

						all_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						all_book_data.datasets[0].data = [100,100,100,100,100,100,100,100,100];
						all_book_data.datasets[1].data = [84,85,70,70,93,96,88,70,86];
						all_book_data.datasets[2].data = [64,65,59,58,63,76,78,58,46];
						all_book_data.datasets[3].data = [34,45,36,34,43,42,48,36,36];
						all_book_data.datasets[4].data = [14,30,30,20,23,10,28,22,16];

						window.all_book_chart.update();

					}
				}
			}
		} else if (type == 'book') {

			if (info_type == 'view') {
				changeBookChartBar();

				if (time_type == 'day') {

					book_data.datasets[0].data = [45,44,66,88,30];
					window.book_chart.update();

				} else if (time_type == 'week') {

					book_data.datasets[0].data = [35,24,56,48,30];
					window.book_chart.update();

				} else if (time_type == 'month') {

					book_data.datasets[0].data = [68,49,79,34,78];
					window.book_chart.update();

				} else if (time_type == 'season') {

					book_data.datasets[0].data = [49,55,86,23,89];
					window.book_chart.update();

				} else if (time_type == 'year') {

					book_data.datasets[0].data = [24,45,76,43,23];
					window.book_chart.update();

				}
			} else if (info_type == 'comment') {
				changeBookChartBar();

				if (time_type == 'day') {

					book_data.datasets[0].data = [20,34,45,56,12];
					window.book_chart.update();

				} else if (time_type == 'week') {

					book_data.datasets[0].data = [34,56,23,45,23];
					window.book_chart.update();

				} else if (time_type == 'month') {

					book_data.datasets[0].data = [45,23,35,56,67];
					window.book_chart.update();

				} else if (time_type == 'season') {

					book_data.datasets[0].data = [78,59,40,30,22];
					window.book_chart.update();

				} else if (time_type == 'year') {

					book_data.datasets[0].data = [43,66,88,14,46];
					window.book_chart.update();

				}
			} else if (info_type == 'like') {
				changeBookChartBar();
				
				if (time_type == 'day') {

					book_data.datasets[0].data = [56,23,41,78,50];
					window.book_chart.update();

				} else if (time_type == 'week') {

					book_data.datasets[0].data = [20,25,55,40,30];
					window.book_chart.update();

				} else if (time_type == 'month') {

					book_data.datasets[0].data = [45,67,87,33,21];
					window.book_chart.update();

				} else if (time_type == 'season') {

					book_data.datasets[0].data = [29,35,57,12,36];
					window.book_chart.update();

				} else if (time_type == 'year') {

					book_data.datasets[0].data = [95,78,10,25,69];
					window.book_chart.update();

				}
			} else if (info_type == 'follow') {
				changeBookChartBar();
				
				if (time_type == 'day') {

					book_data.datasets[0].data = [10,34,86,49,30];
					window.book_chart.update();

				} else if (time_type == 'week') {

					book_data.datasets[0].data = [59,67,40,30,32];
					window.book_chart.update();

				} else if (time_type == 'month') {

					book_data.datasets[0].data = [55,30,20,19,30];
					window.book_chart.update();

				} else if (time_type == 'season') {

					book_data.datasets[0].data = [10,22,34,56,77];
					window.book_chart.update();

				} else if (time_type == 'year') {

					book_data.datasets[0].data = [22,34,45,20,56];
					window.book_chart.update();

				}
			} else if (info_type == 'rate') {
				
				if (rate == 'sum') {

				} else if (rate == 'average') {
					if (time_type == 'day') {

						book_data.datasets[0].data = [4.5,4.6,4.7,4.0,3.8];
						window.book_chart.update();

					} else if (time_type == 'week') {

						book_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.book_chart.update();

					} else if (time_type == 'month') {

						book_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.book_chart.update();

					} else if (time_type == 'season') {

						book_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.book_chart.update();

					} else if (time_type == 'year') {

						book_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.book_chart.update();

					}
				}
			}
		} else if (type == 'time') {
			if (info_type == 'view') {
				resetData();

				if (time_type == 'day') {

					time_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_book_data.datasets[0].data = [12,34,46,58,30,28,40];
					time_book_data.datasets[1].data = [22,24,54,34,32,58,46];
					time_book_data.datasets[2].data = [42,34,40,50,40,68,50];
					window.time_book_chart.update();

				} else if (time_type == 'week') {

					time_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_book_data.datasets[0].data = [35,24,59,58,60];
					time_book_data.datasets[1].data = [45,14,56,48,40];
					time_book_data.datasets[2].data = [55,20,66,50,30];
					window.time_book_chart.update();

				} else if (time_type == 'month') {

					time_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_book_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
					time_book_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
					time_book_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
					window.time_book_chart.update();

				} else if (time_type == 'season') {

					time_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_book_data.datasets[0].data = [49,55,86,23];
					time_book_data.datasets[1].data = [60,45,76,13];
					time_book_data.datasets[2].data = [33,65,46,63];
					window.time_book_chart.update();

				} else if (time_type == 'year') {

					time_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_book_data.datasets[0].data = [24,45,76,43,23,50,39,27,34];
					time_book_data.datasets[1].data = [12,35,86,23,13,30,44,20,12];
					time_book_data.datasets[2].data = [25,65,46,63,53,33,44,36,23];
					window.time_book_chart.update();

				}
			} else if (info_type == 'comment') {
				resetData();

				if (time_type == 'day') {

					time_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_book_data.datasets[0].data = [22,44,56,28,50,78,50];
					time_book_data.datasets[1].data = [32,34,64,74,22,58,56];
					time_book_data.datasets[2].data = [42,64,42,55,46,68,40];
					window.time_book_chart.update();

				} else if (time_type == 'week') {

					time_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_book_data.datasets[0].data = [45,24,59,68,50];
					time_book_data.datasets[1].data = [55,24,66,38,10];
					time_book_data.datasets[2].data = [57,10,66,20,20];
					window.time_book_chart.update();

				} else if (time_type == 'month') {

					time_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_book_data.datasets[0].data = [32,40,63,43,46,28,35,37,30,10,26,45];
					time_book_data.datasets[1].data = [40,29,50,29,39,39,77,40,30,59,39,28];
					time_book_data.datasets[2].data = [50,14,35,87,25,39,39,50,48,40,30,20];
					window.time_book_chart.update();

				} else if (time_type == 'season') {

					time_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_book_data.datasets[0].data = [40,45,56,23];
					time_book_data.datasets[1].data = [65,55,36,23];
					time_book_data.datasets[2].data = [43,45,26,33];
					window.time_book_chart.update();

				} else if (time_type == 'year') {

					time_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_book_data.datasets[0].data = [54,35,26,73,43,30,30,77,36];
					time_book_data.datasets[1].data = [42,35,26,33,43,46,44,30,12];
					time_book_data.datasets[2].data = [25,35,26,43,63,73,24,36,24];
					window.time_book_chart.update();

				}
			} else if (info_type == 'like') {
				resetData();
				
				if (time_type == 'day') {

					time_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_book_data.datasets[0].data = [52,64,56,48,50,78,50];
					time_book_data.datasets[1].data = [32,44,74,54,32,58,66];
					time_book_data.datasets[2].data = [22,24,32,45,26,48,50];
					window.time_book_chart.update();

				} else if (time_type == 'week') {

					time_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_book_data.datasets[0].data = [55,24,59,68,50];
					time_book_data.datasets[1].data = [35,54,46,58,20];
					time_book_data.datasets[2].data = [27,40,36,40,26];
					window.time_book_chart.update();

				} else if (time_type == 'month') {

					time_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_book_data.datasets[0].data = [42,40,63,43,46,28,35,67,30,40,26,45];
					time_book_data.datasets[1].data = [50,39,40,39,49,49,57,70,40,39,19,48];
					time_book_data.datasets[2].data = [56,24,45,77,35,29,49,88,48,30,20,30];
					window.time_book_chart.update();

				} else if (time_type == 'season') {

					time_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_book_data.datasets[0].data = [20,25,46,23];
					time_book_data.datasets[1].data = [55,15,36,33];
					time_book_data.datasets[2].data = [43,35,26,43];
					window.time_book_chart.update();

				} else if (time_type == 'year') {

					time_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_book_data.datasets[0].data = [64,35,26,73,33,40,60,87,46];
					time_book_data.datasets[1].data = [52,35,46,53,23,36,44,50,32];
					time_book_data.datasets[2].data = [35,25,36,43,53,53,34,46,24];
					window.time_book_chart.update();

				}
			} else if (info_type == 'follow') {
				resetData();
				
				if (time_type == 'day') {

					time_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_book_data.datasets[0].data = [52,64,36,68,40,78,50];
					time_book_data.datasets[1].data = [32,34,74,44,42,68,36];
					time_book_data.datasets[2].data = [22,24,52,65,46,78,60];
					window.time_book_chart.update();

				} else if (time_type == 'week') {

					time_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_book_data.datasets[0].data = [55,24,59,38,40];
					time_book_data.datasets[1].data = [35,34,56,28,30];
					time_book_data.datasets[2].data = [27,20,46,30,20];
					window.time_book_chart.update();

				} else if (time_type == 'month') {

					time_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_book_data.datasets[0].data = [52,40,73,33,56,28,25,47,36,20,46,45];
					time_book_data.datasets[1].data = [40,39,50,29,49,59,77,40,40,39,39,28];
					time_book_data.datasets[2].data = [30,24,45,77,35,37,59,80,48,40,50,70];
					window.time_book_chart.update();

				} else if (time_type == 'season') {

					time_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_book_data.datasets[0].data = [60,45,56,23];
					time_book_data.datasets[1].data = [45,65,46,20];
					time_book_data.datasets[2].data = [33,35,56,43];
					window.time_book_chart.update();

				} else if (time_type == 'year') {

					time_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_book_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
					time_book_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
					time_book_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
					window.time_book_chart.update();

				}
			} else if (info_type == 'rate') {
				
				if (rate == 'sum') {
					if (time_type == 'day') {

						time_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_book_data.datasets[0].data = [75,64,20,40,35,67,58];
						time_book_data.datasets[1].data = [35,54,30,50,45,59,77];
						time_book_data.datasets[2].data = [65,44,30,40,35,34,33];
						window.time_book_chart.update();

					} else if (time_type == 'week') {

						time_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_book_data.datasets[0].data = [86,30,72,33,45];
						time_book_data.datasets[1].data = [75,44,50,40,35];
						time_book_data.datasets[2].data = [65,64,20,30,55];
						window.time_book_chart.update();

					} else if (time_type == 'month') {

						time_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_book_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
						time_book_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
						time_book_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
						window.time_book_chart.update();

					} else if (time_type == 'season') {

						time_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_book_data.datasets[0].data = [49,55,86,23];
						time_book_data.datasets[1].data = [60,45,76,13];
						time_book_data.datasets[2].data = [33,65,46,63];
						window.time_book_chart.update();

					} else if (time_type == 'year') {

						time_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_book_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
						time_book_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
						time_book_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
						window.time_book_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						time_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_book_data.datasets[0].data = [4.2,2.4,4.6,3.8,1.0,3.8,3.0];
						time_book_data.datasets[1].data = [4.2,4.4,4.4,2.4,2.2,2.8,2.6];
						time_book_data.datasets[2].data = [3.2,3.4,4.2,4.5,3.6,4.8,1.0];
						window.time_book_chart.update();

					} else if (time_type == 'week') {

						time_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_book_data.datasets[0].data = [4.5,2.4,2.9,2.8,4.0];
						time_book_data.datasets[1].data = [3.5,3.4,4.6,3.8,3.0];
						time_book_data.datasets[2].data = [2.7,2.0,3.6,3.0,2.0];
						window.time_book_chart.update();

					} else if (time_type == 'month') {

						time_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_book_data.datasets[0].data = [4.2,4.0,4.3,3.3,2.6,2.8,2.5,4.7,3.6,2.0,4.6,4.5];
						time_book_data.datasets[1].data = [4.0,3.9,3.0,2.9,4.9,2.9,3.7,4.0,4.0,3.9,3.9,2.8];
						time_book_data.datasets[2].data = [4.0,2.4,4.5,2.7,3.5,3.7,3.9,3.0,4.8,4.0,4.8,3.0];
						window.time_book_chart.update();

					} else if (time_type == 'season') {

						time_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_book_data.datasets[0].data = [2.0,4.5,1.6,2.3];
						time_book_data.datasets[1].data = [4.5,2.5,4.6,2.0];
						time_book_data.datasets[2].data = [3.3,3.5,2.6,4.3];
						window.time_book_chart.update();

					} else if (time_type == 'year') {

						time_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_book_data.datasets[0].data = [4.4,3.5,2.6,1.3,4.3,4.0,3.0,1.7,3.6];
						time_book_data.datasets[1].data = [1.2,2.5,1.6,2.3,1.3,4.6,3.4,1.0,3.2];
						time_book_data.datasets[2].data = [3.5,1.5,4.6,1.3,3.3,1.3,1.4,3.6,1.4];
						window.time_book_chart.update();

					}
				}
			}
		} else if (type == 'chap') {
			if (info_type == 'view') {
				resetData();

				if (time_type == 'day') {

					book_chap_data.datasets[0].data = [45,44,66,88,30];
					window.book_chap_chart.update();

				} else if (time_type == 'week') {

					book_chap_data.datasets[0].data = [35,24,56,48,30];
					window.book_chap_chart.update();

				} else if (time_type == 'month') {

					book_chap_data.datasets[0].data = [68,49,79,34,78];
					window.book_chap_chart.update();

				} else if (time_type == 'season') {

					book_chap_data.datasets[0].data = [49,55,86,23,89];
					window.book_chap_chart.update();

				} else if (time_type == 'year') {

					book_chap_data.datasets[0].data = [24,45,76,43,23];
					window.book_chap_chart.update();

				}
			} else if (info_type == 'comment') {
				resetData();

				if (time_type == 'day') {

					book_chap_data.datasets[0].data = [20,34,45,56,12];
					window.book_chap_chart.update();

				} else if (time_type == 'week') {

					book_chap_data.datasets[0].data = [34,56,23,45,23];
					window.book_chap_chart.update();

				} else if (time_type == 'month') {

					book_chap_data.datasets[0].data = [45,23,35,56,67];
					window.book_chap_chart.update();

				} else if (time_type == 'season') {

					book_chap_data.datasets[0].data = [78,59,40,30,22];
					window.book_chap_chart.update();

				} else if (time_type == 'year') {

					book_chap_data.datasets[0].data = [43,66,88,14,46];
					window.book_chap_chart.update();

				}
			} else if (info_type == 'like') {
				resetData();
				
				if (time_type == 'day') {

					book_chap_data.datasets[0].data = [56,23,41,78,50];
					window.book_chap_chart.update();

				} else if (time_type == 'week') {

					book_chap_data.datasets[0].data = [20,25,55,40,30];
					window.book_chap_chart.update();

				} else if (time_type == 'month') {

					book_chap_data.datasets[0].data = [45,67,87,33,21];
					window.book_chap_chart.update();

				} else if (time_type == 'season') {

					book_chap_data.datasets[0].data = [29,35,57,12,36];
					window.book_chap_chart.update();

				} else if (time_type == 'year') {

					book_chap_data.datasets[0].data = [95,78,10,25,69];
					window.book_chap_chart.update();

				}
			} else if (info_type == 'follow') {
				resetData();
				
				if (time_type == 'day') {

					book_chap_data.datasets[0].data = [10,34,86,49,30];
					window.book_chap_chart.update();

				} else if (time_type == 'week') {

					book_chap_data.datasets[0].data = [59,67,40,30,32];
					window.book_chap_chart.update();

				} else if (time_type == 'month') {

					book_chap_data.datasets[0].data = [55,30,20,19,30];
					window.book_chap_chart.update();

				} else if (time_type == 'season') {

					book_chap_data.datasets[0].data = [10,22,34,56,77];
					window.book_chap_chart.update();

				} else if (time_type == 'year') {

					book_chap_data.datasets[0].data = [22,34,45,20,56];
					window.book_chap_chart.update();

				}
			}
		}
	});
	$('.category .btn-control').click(function() {
		debugger;
		//don't work when click rate button
		if ($(this).hasClass('rate')) return;

		if (type == 'category') {
			if (info_type == 'view') {
				changeCategoryChartBar();

				if (time_type == 'day') {

					category_data.datasets[0].data = [45,44,66,88,30];
					window.category_chart.update();

				} else if (time_type == 'week') {

					category_data.datasets[0].data = [35,24,56,48,30];
					window.category_chart.update();

				} else if (time_type == 'month') {

					category_data.datasets[0].data = [68,49,79,34,78];
					window.category_chart.update();

				} else if (time_type == 'season') {

					category_data.datasets[0].data = [49,55,86,23,89];
					window.category_chart.update();

				} else if (time_type == 'year') {

					category_data.datasets[0].data = [24,45,76,43,23];
					window.category_chart.update();

				}
			} else if (info_type == 'comment') {
				changeCategoryChartBar();

				if (time_type == 'day') {

					category_data.datasets[0].data = [20,34,45,56,12];
					window.category_chart.update();

				} else if (time_type == 'week') {

					category_data.datasets[0].data = [34,56,23,45,23];
					window.category_chart.update();

				} else if (time_type == 'month') {

					category_data.datasets[0].data = [45,23,35,56,67];
					window.category_chart.update();

				} else if (time_type == 'season') {

					category_data.datasets[0].data = [78,59,40,30,22];
					window.category_chart.update();

				} else if (time_type == 'year') {

					category_data.datasets[0].data = [43,66,88,14,46];
					window.category_chart.update();

				}
			} else if (info_type == 'like') {
				changeCategoryChartBar();
				
				if (time_type == 'day') {

					category_data.datasets[0].data = [56,23,41,78,50];
					window.category_chart.update();

				} else if (time_type == 'week') {

					category_data.datasets[0].data = [20,25,55,40,30];
					window.category_chart.update();

				} else if (time_type == 'month') {

					category_data.datasets[0].data = [45,67,87,33,21];
					window.category_chart.update();

				} else if (time_type == 'season') {

					category_data.datasets[0].data = [29,35,57,12,36];
					window.category_chart.update();

				} else if (time_type == 'year') {

					category_data.datasets[0].data = [95,78,10,25,69];
					window.category_chart.update();

				}
			} else if (info_type == 'follow') {
				changeCategoryChartBar();
				
				if (time_type == 'day') {

					category_data.datasets[0].data = [10,34,86,49,30];
					window.category_chart.update();

				} else if (time_type == 'week') {

					category_data.datasets[0].data = [59,67,40,30,32];
					window.category_chart.update();

				} else if (time_type == 'month') {

					category_data.datasets[0].data = [55,30,20,19,30];
					window.category_chart.update();

				} else if (time_type == 'season') {

					category_data.datasets[0].data = [10,22,34,56,77];
					window.category_chart.update();

				} else if (time_type == 'year') {

					category_data.datasets[0].data = [22,34,45,20,56];
					window.category_chart.update();

				}
			} else if (info_type == 'rate') {
				
				if (rate == 'sum') {
					if (time_type == 'day') {

						category_data.datasets[0].data = [75,64,20,40,35];
						window.category_chart.update();

					} else if (time_type == 'week') {

						category_data.datasets[0].data = [86,30,72,33,45];
						window.category_chart.update();

					} else if (time_type == 'month') {

						category_data.datasets[0].data = [67,40,20,39,10];
						window.category_chart.update();

					} else if (time_type == 'season') {

						category_data.datasets[0].data = [58,67,77,49,30];
						window.category_chart.update();

					} else if (time_type == 'year') {

						category_data.datasets[0].data = [10,50,39,78,68];
						window.category_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						category_data.datasets[0].data = [4.5,3.6,4.7,2.0,3.8];

						window.category_chart.update();

					} else if (time_type == 'week') {

						category_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];

						window.category_chart.update();

					} else if (time_type == 'month') {

						category_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];

						window.category_chart.update();

					} else if (time_type == 'season') {

						category_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];

						window.category_chart.update();

					} else if (time_type == 'year') {

						category_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];

						window.category_chart.update();

					}
				} else if (rate == 'percent') {
					if (time_type == 'day') {

						category_data.datasets[0].data = [5.5,4.4,1.3,4.5,3.1];
						window.category_chart.update();

					} else if (time_type == 'week') {

						category_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.category_chart.update();

					} else if (time_type == 'month') {

						category_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.category_chart.update();

					} else if (time_type == 'season') {

						category_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.category_chart.update();

					} else if (time_type == 'year') {

						category_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.category_chart.update();

					}
				}
			}
		} else if (type == 'time') {
			if (info_type == 'view') {
				resetData();

				if (time_type == 'day') {

					time_category_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_category_data.datasets[0].data = [12,34,46,58,30,28,40];
					time_category_data.datasets[1].data = [22,24,54,34,32,58,46];
					time_category_data.datasets[2].data = [42,34,40,50,40,68,50];
					window.time_category_chart.update();

				} else if (time_type == 'week') {

					time_category_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_category_data.datasets[0].data = [35,24,59,58,60];
					time_category_data.datasets[1].data = [45,14,56,48,40];
					time_category_data.datasets[2].data = [55,20,66,50,30];
					window.time_category_chart.update();

				} else if (time_type == 'month') {

					time_category_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_category_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
					time_category_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
					time_category_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
					window.time_category_chart.update();

				} else if (time_type == 'season') {

					time_category_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_category_data.datasets[0].data = [49,55,86,23];
					time_category_data.datasets[1].data = [60,45,76,13];
					time_category_data.datasets[2].data = [33,65,46,63];
					window.time_category_chart.update();

				} else if (time_type == 'year') {

					time_category_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_category_data.datasets[0].data = [24,45,76,43,23,50,39,27,34];
					time_category_data.datasets[1].data = [12,35,86,23,13,30,44,20,12];
					time_category_data.datasets[2].data = [25,65,46,63,53,33,44,36,23];
					window.time_category_chart.update();

				}
			} else if (info_type == 'comment') {
				resetData();

				if (time_type == 'day') {

					time_category_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_category_data.datasets[0].data = [22,44,56,28,50,78,50];
					time_category_data.datasets[1].data = [32,34,64,74,22,58,56];
					time_category_data.datasets[2].data = [42,64,42,55,46,68,40];
					window.time_category_chart.update();

				} else if (time_type == 'week') {

					time_category_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_category_data.datasets[0].data = [45,24,59,68,50];
					time_category_data.datasets[1].data = [55,24,66,38,10];
					time_category_data.datasets[2].data = [57,10,66,20,20];
					window.time_category_chart.update();

				} else if (time_type == 'month') {

					time_category_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_category_data.datasets[0].data = [32,40,63,43,46,28,35,37,30,10,26,45];
					time_category_data.datasets[1].data = [40,29,50,29,39,39,77,40,30,59,39,28];
					time_category_data.datasets[2].data = [50,14,35,87,25,39,39,50,48,40,30,20];
					window.time_category_chart.update();

				} else if (time_type == 'season') {

					time_category_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_category_data.datasets[0].data = [40,45,56,23];
					time_category_data.datasets[1].data = [65,55,36,23];
					time_category_data.datasets[2].data = [43,45,26,33];
					window.time_category_chart.update();

				} else if (time_type == 'year') {

					time_category_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_category_data.datasets[0].data = [54,35,26,73,43,30,30,77,36];
					time_category_data.datasets[1].data = [42,35,26,33,43,46,44,30,12];
					time_category_data.datasets[2].data = [25,35,26,43,63,73,24,36,24];
					window.time_category_chart.update();

				}
			} else if (info_type == 'like') {
				resetData();
				
				if (time_type == 'day') {

					time_category_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_category_data.datasets[0].data = [52,64,56,48,50,78,50];
					time_category_data.datasets[1].data = [32,44,74,54,32,58,66];
					time_category_data.datasets[2].data = [22,24,32,45,26,48,50];
					window.time_category_chart.update();

				} else if (time_type == 'week') {

					time_category_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_category_data.datasets[0].data = [55,24,59,68,50];
					time_category_data.datasets[1].data = [35,54,46,58,20];
					time_category_data.datasets[2].data = [27,40,36,40,26];
					window.time_category_chart.update();

				} else if (time_type == 'month') {

					time_category_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_category_data.datasets[0].data = [42,40,63,43,46,28,35,67,30,40,26,45];
					time_category_data.datasets[1].data = [50,39,40,39,49,49,57,70,40,39,19,48];
					time_category_data.datasets[2].data = [56,24,45,77,35,29,49,88,48,30,20,30];
					window.time_category_chart.update();

				} else if (time_type == 'season') {

					time_category_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_category_data.datasets[0].data = [20,25,46,23];
					time_category_data.datasets[1].data = [55,15,36,33];
					time_category_data.datasets[2].data = [43,35,26,43];
					window.time_category_chart.update();

				} else if (time_type == 'year') {

					time_category_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_category_data.datasets[0].data = [64,35,26,73,33,40,60,87,46];
					time_category_data.datasets[1].data = [52,35,46,53,23,36,44,50,32];
					time_category_data.datasets[2].data = [35,25,36,43,53,53,34,46,24];
					window.time_category_chart.update();

				}
			} else if (info_type == 'follow') {
				resetData();
				
				if (time_type == 'day') {

					time_category_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_category_data.datasets[0].data = [52,64,36,68,40,78,50];
					time_category_data.datasets[1].data = [32,34,74,44,42,68,36];
					time_category_data.datasets[2].data = [22,24,52,65,46,78,60];
					window.time_category_chart.update();

				} else if (time_type == 'week') {

					time_category_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_category_data.datasets[0].data = [55,24,59,38,40];
					time_category_data.datasets[1].data = [35,34,56,28,30];
					time_category_data.datasets[2].data = [27,20,46,30,20];
					window.time_category_chart.update();

				} else if (time_type == 'month') {

					time_category_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_category_data.datasets[0].data = [52,40,73,33,56,28,25,47,36,20,46,45];
					time_category_data.datasets[1].data = [40,39,50,29,49,59,77,40,40,39,39,28];
					time_category_data.datasets[2].data = [30,24,45,77,35,37,59,80,48,40,50,70];
					window.time_category_chart.update();

				} else if (time_type == 'season') {

					time_category_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_category_data.datasets[0].data = [60,45,56,23];
					time_category_data.datasets[1].data = [45,65,46,20];
					time_category_data.datasets[2].data = [33,35,56,43];
					window.time_category_chart.update();

				} else if (time_type == 'year') {

					time_category_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_category_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
					time_category_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
					time_category_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
					window.time_category_chart.update();

				}
			} else if (info_type == 'rate') {
				
				if (rate == 'sum') {
					if (time_type == 'day') {

						time_category_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_category_data.datasets[0].data = [75,64,20,40,35,67,58];
						time_category_data.datasets[1].data = [35,54,30,50,45,59,77];
						time_category_data.datasets[2].data = [65,44,30,40,35,34,33];
						window.time_category_chart.update();

					} else if (time_type == 'week') {

						time_category_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_category_data.datasets[0].data = [86,30,72,33,45];
						time_category_data.datasets[1].data = [75,44,50,40,35];
						time_category_data.datasets[2].data = [65,64,20,30,55];
						window.time_category_chart.update();

					} else if (time_type == 'month') {

						time_category_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_category_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
						time_category_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
						time_category_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
						window.time_category_chart.update();

					} else if (time_type == 'season') {

						time_category_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_category_data.datasets[0].data = [49,55,86,23];
						time_category_data.datasets[1].data = [60,45,76,13];
						time_category_data.datasets[2].data = [33,65,46,63];
						window.time_category_chart.update();

					} else if (time_type == 'year') {

						time_category_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_category_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
						time_category_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
						time_category_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
						window.time_category_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						time_category_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_category_data.datasets[0].data = [4.2,2.4,4.6,3.8,1.0,3.8,3.0];
						time_category_data.datasets[1].data = [4.2,4.4,4.4,2.4,2.2,2.8,2.6];
						time_category_data.datasets[2].data = [3.2,3.4,4.2,4.5,3.6,4.8,1.0];
						window.time_category_chart.update();

					} else if (time_type == 'week') {

						time_category_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_category_data.datasets[0].data = [4.5,2.4,2.9,2.8,4.0];
						time_category_data.datasets[1].data = [3.5,3.4,4.6,3.8,3.0];
						time_category_data.datasets[2].data = [2.7,2.0,3.6,3.0,2.0];
						window.time_category_chart.update();

					} else if (time_type == 'month') {

						time_category_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_category_data.datasets[0].data = [4.2,4.0,4.3,3.3,2.6,2.8,2.5,4.7,3.6,2.0,4.6,4.5];
						time_category_data.datasets[1].data = [4.0,3.9,3.0,2.9,4.9,2.9,3.7,4.0,4.0,3.9,3.9,2.8];
						time_category_data.datasets[2].data = [4.0,2.4,4.5,2.7,3.5,3.7,3.9,3.0,4.8,4.0,4.8,3.0];
						window.time_category_chart.update();

					} else if (time_type == 'season') {

						time_category_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_category_data.datasets[0].data = [2.0,4.5,1.6,2.3];
						time_category_data.datasets[1].data = [4.5,2.5,4.6,2.0];
						time_category_data.datasets[2].data = [3.3,3.5,2.6,4.3];
						window.time_category_chart.update();

					} else if (time_type == 'year') {

						time_category_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_category_data.datasets[0].data = [4.4,3.5,2.6,1.3,4.3,4.0,3.0,1.7,3.6];
						time_category_data.datasets[1].data = [1.2,2.5,1.6,2.3,1.3,4.6,3.4,1.0,3.2];
						time_category_data.datasets[2].data = [3.5,1.5,4.6,1.3,3.3,1.3,1.4,3.6,1.4];
						window.time_category_chart.update();

					}
				}
			}
		}
	});
	$('.user .btn-control').click(function() {
		debugger;

		if (type == 'user') {
			if (info_type == 'view') {
				changeUserChartBar();

				if (time_type == 'day') {

					user_data.datasets[0].data = [45,44,66,88,30];
					window.user_chart.update();

				} else if (time_type == 'week') {

					user_data.datasets[0].data = [35,24,56,48,30];
					window.user_chart.update();

				} else if (time_type == 'month') {

					user_data.datasets[0].data = [68,49,79,34,78];
					window.user_chart.update();

				} else if (time_type == 'season') {

					user_data.datasets[0].data = [49,55,86,23,89];
					window.user_chart.update();

				} else if (time_type == 'year') {

					user_data.datasets[0].data = [24,45,76,43,23];
					window.user_chart.update();

				}
			} else if (info_type == 'comment') {
				changeUserChartBar();

				if (time_type == 'day') {

					user_data.datasets[0].data = [20,34,45,56,12];
					window.user_chart.update();

				} else if (time_type == 'week') {

					user_data.datasets[0].data = [34,56,23,45,23];
					window.user_chart.update();

				} else if (time_type == 'month') {

					user_data.datasets[0].data = [45,23,35,56,67];
					window.user_chart.update();

				} else if (time_type == 'season') {

					user_data.datasets[0].data = [78,59,40,30,22];
					window.user_chart.update();

				} else if (time_type == 'year') {

					user_data.datasets[0].data = [43,66,88,14,46];
					window.user_chart.update();

				}
			} else if (info_type == 'like') {
				changeUserChartBar();
				
				if (time_type == 'day') {

					user_data.datasets[0].data = [56,23,41,78,50];
					window.user_chart.update();

				} else if (time_type == 'week') {

					user_data.datasets[0].data = [20,25,55,40,30];
					window.user_chart.update();

				} else if (time_type == 'month') {

					user_data.datasets[0].data = [45,67,87,33,21];
					window.user_chart.update();

				} else if (time_type == 'season') {

					user_data.datasets[0].data = [29,35,57,12,36];
					window.user_chart.update();

				} else if (time_type == 'year') {

					user_data.datasets[0].data = [95,78,10,25,69];
					window.user_chart.update();

				}
			} else if (info_type == 'follow') {
				changeUserChartBar();
				
				if (time_type == 'day') {

					user_data.datasets[0].data = [10,34,86,49,30];
					window.user_chart.update();

				} else if (time_type == 'week') {

					user_data.datasets[0].data = [59,67,40,30,32];
					window.user_chart.update();

				} else if (time_type == 'month') {

					user_data.datasets[0].data = [55,30,20,19,30];
					window.user_chart.update();

				} else if (time_type == 'season') {

					user_data.datasets[0].data = [10,22,34,56,77];
					window.user_chart.update();

				} else if (time_type == 'year') {

					user_data.datasets[0].data = [22,34,45,20,56];
					window.user_chart.update();

				}
			} else if (info_type == 'rate') {
				
				if (time_type == 'day') {

					user_data.datasets[0].data = [4.5,4.6,4.7,4.0,3.8];
					window.user_chart.update();

				} else if (time_type == 'week') {

					user_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
					window.user_chart.update();

				} else if (time_type == 'month') {

					user_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
					window.user_chart.update();

				} else if (time_type == 'season') {

					user_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
					window.user_chart.update();

				} else if (time_type == 'year') {

					user_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
					window.user_chart.update();

				}
			}
		} else if (type == 'time') {
			if (info_type == 'view') {
				resetData();

				if (time_type == 'day') {

					time_user_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_user_data.datasets[0].data = [12,34,46,58,30,28,40];
					time_user_data.datasets[1].data = [22,24,54,34,32,58,46];
					time_user_data.datasets[2].data = [42,34,40,50,40,68,50];
					window.time_user_chart.update();

				} else if (time_type == 'week') {

					time_user_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_user_data.datasets[0].data = [35,24,59,58,60];
					time_user_data.datasets[1].data = [45,14,56,48,40];
					time_user_data.datasets[2].data = [55,20,66,50,30];
					window.time_user_chart.update();

				} else if (time_type == 'month') {

					time_user_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_user_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
					time_user_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
					time_user_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
					window.time_user_chart.update();

				} else if (time_type == 'season') {

					time_user_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_user_data.datasets[0].data = [49,55,86,23];
					time_user_data.datasets[1].data = [60,45,76,13];
					time_user_data.datasets[2].data = [33,65,46,63];
					window.time_user_chart.update();

				} else if (time_type == 'year') {

					time_user_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_user_data.datasets[0].data = [24,45,76,43,23,50,39,27,34];
					time_user_data.datasets[1].data = [12,35,86,23,13,30,44,20,12];
					time_user_data.datasets[2].data = [25,65,46,63,53,33,44,36,23];
					window.time_user_chart.update();

				}
			} else if (info_type == 'comment') {
				resetData();

				if (time_type == 'day') {

					time_user_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_user_data.datasets[0].data = [22,44,56,28,50,78,50];
					time_user_data.datasets[1].data = [32,34,64,74,22,58,56];
					time_user_data.datasets[2].data = [42,64,42,55,46,68,40];
					window.time_user_chart.update();

				} else if (time_type == 'week') {

					time_user_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_user_data.datasets[0].data = [45,24,59,68,50];
					time_user_data.datasets[1].data = [55,24,66,38,10];
					time_user_data.datasets[2].data = [57,10,66,20,20];
					window.time_user_chart.update();

				} else if (time_type == 'month') {

					time_user_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_user_data.datasets[0].data = [32,40,63,43,46,28,35,37,30,10,26,45];
					time_user_data.datasets[1].data = [40,29,50,29,39,39,77,40,30,59,39,28];
					time_user_data.datasets[2].data = [50,14,35,87,25,39,39,50,48,40,30,20];
					window.time_user_chart.update();

				} else if (time_type == 'season') {

					time_user_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_user_data.datasets[0].data = [40,45,56,23];
					time_user_data.datasets[1].data = [65,55,36,23];
					time_user_data.datasets[2].data = [43,45,26,33];
					window.time_user_chart.update();

				} else if (time_type == 'year') {

					time_user_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_user_data.datasets[0].data = [54,35,26,73,43,30,30,77,36];
					time_user_data.datasets[1].data = [42,35,26,33,43,46,44,30,12];
					time_user_data.datasets[2].data = [25,35,26,43,63,73,24,36,24];
					window.time_user_chart.update();

				}
			} else if (info_type == 'like') {
				resetData();
				
				if (time_type == 'day') {

					time_user_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_user_data.datasets[0].data = [52,64,56,48,50,78,50];
					time_user_data.datasets[1].data = [32,44,74,54,32,58,66];
					time_user_data.datasets[2].data = [22,24,32,45,26,48,50];
					window.time_user_chart.update();

				} else if (time_type == 'week') {

					time_user_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_user_data.datasets[0].data = [55,24,59,68,50];
					time_user_data.datasets[1].data = [35,54,46,58,20];
					time_user_data.datasets[2].data = [27,40,36,40,26];
					window.time_user_chart.update();

				} else if (time_type == 'month') {

					time_user_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_user_data.datasets[0].data = [42,40,63,43,46,28,35,67,30,40,26,45];
					time_user_data.datasets[1].data = [50,39,40,39,49,49,57,70,40,39,19,48];
					time_user_data.datasets[2].data = [56,24,45,77,35,29,49,88,48,30,20,30];
					window.time_user_chart.update();

				} else if (time_type == 'season') {

					time_user_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_user_data.datasets[0].data = [20,25,46,23];
					time_user_data.datasets[1].data = [55,15,36,33];
					time_user_data.datasets[2].data = [43,35,26,43];
					window.time_user_chart.update();

				} else if (time_type == 'year') {

					time_user_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_user_data.datasets[0].data = [64,35,26,73,33,40,60,87,46];
					time_user_data.datasets[1].data = [52,35,46,53,23,36,44,50,32];
					time_user_data.datasets[2].data = [35,25,36,43,53,53,34,46,24];
					window.time_user_chart.update();

				}
			} else if (info_type == 'follow') {
				resetData();
				
				if (time_type == 'day') {

					time_user_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_user_data.datasets[0].data = [52,64,36,68,40,78,50];
					time_user_data.datasets[1].data = [32,34,74,44,42,68,36];
					time_user_data.datasets[2].data = [22,24,52,65,46,78,60];
					window.time_user_chart.update();

				} else if (time_type == 'week') {

					time_user_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_user_data.datasets[0].data = [55,24,59,38,40];
					time_user_data.datasets[1].data = [35,34,56,28,30];
					time_user_data.datasets[2].data = [27,20,46,30,20];
					window.time_user_chart.update();

				} else if (time_type == 'month') {

					time_user_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_user_data.datasets[0].data = [52,40,73,33,56,28,25,47,36,20,46,45];
					time_user_data.datasets[1].data = [40,39,50,29,49,59,77,40,40,39,39,28];
					time_user_data.datasets[2].data = [30,24,45,77,35,37,59,80,48,40,50,70];
					window.time_user_chart.update();

				} else if (time_type == 'season') {

					time_user_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_user_data.datasets[0].data = [60,45,56,23];
					time_user_data.datasets[1].data = [45,65,46,20];
					time_user_data.datasets[2].data = [33,35,56,43];
					window.time_user_chart.update();

				} else if (time_type == 'year') {

					time_user_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_user_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
					time_user_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
					time_user_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
					window.time_user_chart.update();

				}
			} else if (info_type == 'rate') {
				
				if (rate == 'sum') {
					if (time_type == 'day') {

						time_user_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_user_data.datasets[0].data = [75,64,20,40,35,67,58];
						time_user_data.datasets[1].data = [35,54,30,50,45,59,77];
						time_user_data.datasets[2].data = [65,44,30,40,35,34,33];
						window.time_user_chart.update();

					} else if (time_type == 'week') {

						time_user_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_user_data.datasets[0].data = [86,30,72,33,45];
						time_user_data.datasets[1].data = [75,44,50,40,35];
						time_user_data.datasets[2].data = [65,64,20,30,55];
						window.time_user_chart.update();

					} else if (time_type == 'month') {

						time_user_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_user_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
						time_user_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
						time_user_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
						window.time_user_chart.update();

					} else if (time_type == 'season') {

						time_user_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_user_data.datasets[0].data = [49,55,86,23];
						time_user_data.datasets[1].data = [60,45,76,13];
						time_user_data.datasets[2].data = [33,65,46,63];
						window.time_user_chart.update();

					} else if (time_type == 'year') {

						time_user_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_user_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
						time_user_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
						time_user_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
						window.time_user_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						time_user_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_user_data.datasets[0].data = [4.2,2.4,4.6,3.8,1.0,3.8,3.0];
						time_user_data.datasets[1].data = [4.2,4.4,4.4,2.4,2.2,2.8,2.6];
						time_user_data.datasets[2].data = [3.2,3.4,4.2,4.5,3.6,4.8,1.0];
						window.time_user_chart.update();

					} else if (time_type == 'week') {

						time_user_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_user_data.datasets[0].data = [4.5,2.4,2.9,2.8,4.0];
						time_user_data.datasets[1].data = [3.5,3.4,4.6,3.8,3.0];
						time_user_data.datasets[2].data = [2.7,2.0,3.6,3.0,2.0];
						window.time_user_chart.update();

					} else if (time_type == 'month') {

						time_user_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_user_data.datasets[0].data = [4.2,4.0,4.3,3.3,2.6,2.8,2.5,4.7,3.6,2.0,4.6,4.5];
						time_user_data.datasets[1].data = [4.0,3.9,3.0,2.9,4.9,2.9,3.7,4.0,4.0,3.9,3.9,2.8];
						time_user_data.datasets[2].data = [4.0,2.4,4.5,2.7,3.5,3.7,3.9,3.0,4.8,4.0,4.8,3.0];
						window.time_user_chart.update();

					} else if (time_type == 'season') {

						time_user_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_user_data.datasets[0].data = [2.0,4.5,1.6,2.3];
						time_user_data.datasets[1].data = [4.5,2.5,4.6,2.0];
						time_user_data.datasets[2].data = [3.3,3.5,2.6,4.3];
						window.time_user_chart.update();

					} else if (time_type == 'year') {

						time_user_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_user_data.datasets[0].data = [4.4,3.5,2.6,1.3,4.3,4.0,3.0,1.7,3.6];
						time_user_data.datasets[1].data = [1.2,2.5,1.6,2.3,1.3,4.6,3.4,1.0,3.2];
						time_user_data.datasets[2].data = [3.5,1.5,4.6,1.3,3.3,1.3,1.4,3.6,1.4];
						window.time_user_chart.update();

					}
				}
			}
		}
	});
	$('.trans .btn-control').click(function() {
		debugger;

		if (type == 'trans') {
			if (info_type == 'view') {
				changeTransChartBar();

				if (time_type == 'day') {

					trans_data.datasets[0].data = [45,44,66,88,30];
					window.trans_chart.update();

				} else if (time_type == 'week') {

					trans_data.datasets[0].data = [35,24,56,48,30];
					window.trans_chart.update();

				} else if (time_type == 'month') {

					trans_data.datasets[0].data = [68,49,79,34,78];
					window.trans_chart.update();

				} else if (time_type == 'season') {

					trans_data.datasets[0].data = [49,55,86,23,89];
					window.trans_chart.update();

				} else if (time_type == 'year') {

					trans_data.datasets[0].data = [24,45,76,43,23];
					window.trans_chart.update();

				}
			} else if (info_type == 'comment') {
				changeTransChartBar();

				if (time_type == 'day') {

					trans_data.datasets[0].data = [20,34,45,56,12];
					window.trans_chart.update();

				} else if (time_type == 'week') {

					trans_data.datasets[0].data = [34,56,23,45,23];
					window.trans_chart.update();

				} else if (time_type == 'month') {

					trans_data.datasets[0].data = [45,23,35,56,67];
					window.trans_chart.update();

				} else if (time_type == 'season') {

					trans_data.datasets[0].data = [78,59,40,30,22];
					window.trans_chart.update();

				} else if (time_type == 'year') {

					trans_data.datasets[0].data = [43,66,88,14,46];
					window.trans_chart.update();

				}
			} else if (info_type == 'like') {
				changeTransChartBar();
				
				if (time_type == 'day') {

					trans_data.datasets[0].data = [56,23,41,78,50];
					window.trans_chart.update();

				} else if (time_type == 'week') {

					trans_data.datasets[0].data = [20,25,55,40,30];
					window.trans_chart.update();

				} else if (time_type == 'month') {

					trans_data.datasets[0].data = [45,67,87,33,21];
					window.trans_chart.update();

				} else if (time_type == 'season') {

					trans_data.datasets[0].data = [29,35,57,12,36];
					window.trans_chart.update();

				} else if (time_type == 'year') {

					trans_data.datasets[0].data = [95,78,10,25,69];
					window.trans_chart.update();

				}
			} else if (info_type == 'follow') {
				changeTransChartBar();
				
				if (time_type == 'day') {

					trans_data.datasets[0].data = [10,34,86,49,30];
					window.trans_chart.update();

				} else if (time_type == 'week') {

					trans_data.datasets[0].data = [59,67,40,30,32];
					window.trans_chart.update();

				} else if (time_type == 'month') {

					trans_data.datasets[0].data = [55,30,20,19,30];
					window.trans_chart.update();

				} else if (time_type == 'season') {

					trans_data.datasets[0].data = [10,22,34,56,77];
					window.trans_chart.update();

				} else if (time_type == 'year') {

					trans_data.datasets[0].data = [22,34,45,20,56];
					window.trans_chart.update();

				}
			} else if (info_type == 'rate') {
				
				if (rate == 'sum') {
					if (time_type == 'day') {

						trans_data.datasets[0].data = [75,64,20,40,35];
						window.trans_chart.update();

					} else if (time_type == 'week') {

						trans_data.datasets[0].data = [86,30,72,33,45];
						window.trans_chart.update();

					} else if (time_type == 'month') {

						trans_data.datasets[0].data = [67,40,20,39,10];
						window.trans_chart.update();

					} else if (time_type == 'season') {

						trans_data.datasets[0].data = [58,67,77,49,30];
						window.trans_chart.update();

					} else if (time_type == 'year') {

						trans_data.datasets[0].data = [10,50,39,78,68];
						window.trans_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						trans_data.datasets[0].data = [4.5,3.6,4.7,2.0,3.8];
						window.trans_chart.update();

					} else if (time_type == 'week') {

						trans_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.trans_chart.update();

					} else if (time_type == 'month') {

						trans_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.trans_chart.update();

					} else if (time_type == 'season') {

						trans_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.trans_chart.update();

					} else if (time_type == 'year') {

						trans_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.trans_chart.update();

					}
				} else if (rate == 'percent') {
					changeTransChartDoughnut();

					if (time_type == 'day') {

						trans_data.datasets[0].data = [5.5,4.4,1.3,4.5,3.1];
						window.user_chart.update();

					} else if (time_type == 'week') {

						trans_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.user_chart.update();

					} else if (time_type == 'month') {

						trans_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.user_chart.update();

					} else if (time_type == 'season') {

						trans_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.user_chart.update();

					} else if (time_type == 'year') {

						trans_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.user_chart.update();

					}
				}
			}
		} else if (type == 'time') {
			if (info_type == 'view') {
				resetData();

				if (time_type == 'day') {

					time_trans_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_trans_data.datasets[0].data = [12,34,46,58,30,28,40];
					time_trans_data.datasets[1].data = [22,24,54,34,32,58,46];
					time_trans_data.datasets[2].data = [42,34,40,50,40,68,50];
					window.time_trans_chart.update();

				} else if (time_type == 'week') {

					time_trans_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_trans_data.datasets[0].data = [35,24,59,58,60];
					time_trans_data.datasets[1].data = [45,14,56,48,40];
					time_trans_data.datasets[2].data = [55,20,66,50,30];
					window.time_trans_chart.update();

				} else if (time_type == 'month') {

					time_trans_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_trans_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
					time_trans_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
					time_trans_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
					window.time_trans_chart.update();

				} else if (time_type == 'season') {

					time_trans_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_trans_data.datasets[0].data = [49,55,86,23];
					time_trans_data.datasets[1].data = [60,45,76,13];
					time_trans_data.datasets[2].data = [33,65,46,63];
					window.time_trans_chart.update();

				} else if (time_type == 'year') {

					time_trans_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_trans_data.datasets[0].data = [24,45,76,43,23,50,39,27,34];
					time_trans_data.datasets[1].data = [12,35,86,23,13,30,44,20,12];
					time_trans_data.datasets[2].data = [25,65,46,63,53,33,44,36,23];
					window.time_trans_chart.update();

				}
			} else if (info_type == 'comment') {
				resetData();

				if (time_type == 'day') {

					time_trans_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_trans_data.datasets[0].data = [22,44,56,28,50,78,50];
					time_trans_data.datasets[1].data = [32,34,64,74,22,58,56];
					time_trans_data.datasets[2].data = [42,64,42,55,46,68,40];
					window.time_trans_chart.update();

				} else if (time_type == 'week') {

					time_trans_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_trans_data.datasets[0].data = [45,24,59,68,50];
					time_trans_data.datasets[1].data = [55,24,66,38,10];
					time_trans_data.datasets[2].data = [57,10,66,20,20];
					window.time_trans_chart.update();

				} else if (time_type == 'month') {

					time_trans_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_trans_data.datasets[0].data = [32,40,63,43,46,28,35,37,30,10,26,45];
					time_trans_data.datasets[1].data = [40,29,50,29,39,39,77,40,30,59,39,28];
					time_trans_data.datasets[2].data = [50,14,35,87,25,39,39,50,48,40,30,20];
					window.time_trans_chart.update();

				} else if (time_type == 'season') {

					time_trans_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_trans_data.datasets[0].data = [40,45,56,23];
					time_trans_data.datasets[1].data = [65,55,36,23];
					time_trans_data.datasets[2].data = [43,45,26,33];
					window.time_trans_chart.update();

				} else if (time_type == 'year') {

					time_trans_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_trans_data.datasets[0].data = [54,35,26,73,43,30,30,77,36];
					time_trans_data.datasets[1].data = [42,35,26,33,43,46,44,30,12];
					time_trans_data.datasets[2].data = [25,35,26,43,63,73,24,36,24];
					window.time_trans_chart.update();

				}
			} else if (info_type == 'like') {
				resetData();
				
				if (time_type == 'day') {

					time_trans_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_trans_data.datasets[0].data = [52,64,56,48,50,78,50];
					time_trans_data.datasets[1].data = [32,44,74,54,32,58,66];
					time_trans_data.datasets[2].data = [22,24,32,45,26,48,50];
					window.time_trans_chart.update();

				} else if (time_type == 'week') {

					time_trans_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_trans_data.datasets[0].data = [55,24,59,68,50];
					time_trans_data.datasets[1].data = [35,54,46,58,20];
					time_trans_data.datasets[2].data = [27,40,36,40,26];
					window.time_trans_chart.update();

				} else if (time_type == 'month') {

					time_trans_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_trans_data.datasets[0].data = [42,40,63,43,46,28,35,67,30,40,26,45];
					time_trans_data.datasets[1].data = [50,39,40,39,49,49,57,70,40,39,19,48];
					time_trans_data.datasets[2].data = [56,24,45,77,35,29,49,88,48,30,20,30];
					window.time_trans_chart.update();

				} else if (time_type == 'season') {

					time_trans_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_trans_data.datasets[0].data = [20,25,46,23];
					time_trans_data.datasets[1].data = [55,15,36,33];
					time_trans_data.datasets[2].data = [43,35,26,43];
					window.time_trans_chart.update();

				} else if (time_type == 'year') {

					time_trans_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_trans_data.datasets[0].data = [64,35,26,73,33,40,60,87,46];
					time_trans_data.datasets[1].data = [52,35,46,53,23,36,44,50,32];
					time_trans_data.datasets[2].data = [35,25,36,43,53,53,34,46,24];
					window.time_trans_chart.update();

				}
			} else if (info_type == 'follow') {
				resetData();
				
				if (time_type == 'day') {

					time_trans_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
					time_trans_data.datasets[0].data = [52,64,36,68,40,78,50];
					time_trans_data.datasets[1].data = [32,34,74,44,42,68,36];
					time_trans_data.datasets[2].data = [22,24,52,65,46,78,60];
					window.time_trans_chart.update();

				} else if (time_type == 'week') {

					time_trans_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
					time_trans_data.datasets[0].data = [55,24,59,38,40];
					time_trans_data.datasets[1].data = [35,34,56,28,30];
					time_trans_data.datasets[2].data = [27,20,46,30,20];
					window.time_trans_chart.update();

				} else if (time_type == 'month') {

					time_trans_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
					time_trans_data.datasets[0].data = [52,40,73,33,56,28,25,47,36,20,46,45];
					time_trans_data.datasets[1].data = [40,39,50,29,49,59,77,40,40,39,39,28];
					time_trans_data.datasets[2].data = [30,24,45,77,35,37,59,80,48,40,50,70];
					window.time_trans_chart.update();

				} else if (time_type == 'season') {

					time_trans_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
					time_trans_data.datasets[0].data = [60,45,56,23];
					time_trans_data.datasets[1].data = [45,65,46,20];
					time_trans_data.datasets[2].data = [33,35,56,43];
					window.time_trans_chart.update();

				} else if (time_type == 'year') {

					time_trans_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
					time_trans_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
					time_trans_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
					time_trans_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
					window.time_trans_chart.update();

				}
			} else if (info_type == 'rate') {
				
				if (rate == 'sum') {
					if (time_type == 'day') {

						time_trans_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_trans_data.datasets[0].data = [75,64,20,40,35,67,58];
						time_trans_data.datasets[1].data = [35,54,30,50,45,59,77];
						time_trans_data.datasets[2].data = [65,44,30,40,35,34,33];
						window.time_trans_chart.update();

					} else if (time_type == 'week') {

						time_trans_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_trans_data.datasets[0].data = [86,30,72,33,45];
						time_trans_data.datasets[1].data = [75,44,50,40,35];
						time_trans_data.datasets[2].data = [65,64,20,30,55];
						window.time_trans_chart.update();

					} else if (time_type == 'month') {

						time_trans_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_trans_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
						time_trans_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
						time_trans_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
						window.time_trans_chart.update();

					} else if (time_type == 'season') {

						time_trans_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_trans_data.datasets[0].data = [49,55,86,23];
						time_trans_data.datasets[1].data = [60,45,76,13];
						time_trans_data.datasets[2].data = [33,65,46,63];
						window.time_trans_chart.update();

					} else if (time_type == 'year') {

						time_trans_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_trans_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
						time_trans_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
						time_trans_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
						window.time_trans_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						time_trans_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_trans_data.datasets[0].data = [4.2,2.4,4.6,3.8,1.0,3.8,3.0];
						time_trans_data.datasets[1].data = [4.2,4.4,4.4,2.4,2.2,2.8,2.6];
						time_trans_data.datasets[2].data = [3.2,3.4,4.2,4.5,3.6,4.8,1.0];
						window.time_trans_chart.update();

					} else if (time_type == 'week') {

						time_trans_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_trans_data.datasets[0].data = [4.5,2.4,2.9,2.8,4.0];
						time_trans_data.datasets[1].data = [3.5,3.4,4.6,3.8,3.0];
						time_trans_data.datasets[2].data = [2.7,2.0,3.6,3.0,2.0];
						window.time_trans_chart.update();

					} else if (time_type == 'month') {

						time_trans_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_trans_data.datasets[0].data = [4.2,4.0,4.3,3.3,2.6,2.8,2.5,4.7,3.6,2.0,4.6,4.5];
						time_trans_data.datasets[1].data = [4.0,3.9,3.0,2.9,4.9,2.9,3.7,4.0,4.0,3.9,3.9,2.8];
						time_trans_data.datasets[2].data = [4.0,2.4,4.5,2.7,3.5,3.7,3.9,3.0,4.8,4.0,4.8,3.0];
						window.time_trans_chart.update();

					} else if (time_type == 'season') {

						time_trans_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_trans_data.datasets[0].data = [2.0,4.5,1.6,2.3];
						time_trans_data.datasets[1].data = [4.5,2.5,4.6,2.0];
						time_trans_data.datasets[2].data = [3.3,3.5,2.6,4.3];
						window.time_trans_chart.update();

					} else if (time_type == 'year') {

						time_trans_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_trans_data.datasets[0].data = [4.4,3.5,2.6,1.3,4.3,4.0,3.0,1.7,3.6];
						time_trans_data.datasets[1].data = [1.2,2.5,1.6,2.3,1.3,4.6,3.4,1.0,3.2];
						time_trans_data.datasets[2].data = [3.5,1.5,4.6,1.3,3.3,1.3,1.4,3.6,1.4];
						window.time_trans_chart.update();

					}
				}
			}
		}
	});
	$('.rate .modal-footer .btn').click(function() {
		debugger;
		setDataRate(window.all_book_chart);

		if (box == 'book') {
			if (type == 'all') {
				if (rate == 'sum') {
					if (time_type == 'day') {

						all_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						all_book_data.datasets[0].data = [54,44,66,54,20,67,56];
						all_book_data.datasets[1].data = [44,28,46,38,18,47,40];
						all_book_data.datasets[2].data = [34,16,32,24,08,37,36];
						all_book_data.datasets[3].data = [28,12,26,18,06,27,26];
						all_book_data.datasets[4].data = [14,10,16,08,04,17,16];

						window.all_book_chart.update();

					} else if (time_type == 'week') {

						all_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						all_book_data.datasets[0].data = [54,54,76,68,40];
						all_book_data.datasets[1].data = [44,34,56,58,30];
						all_book_data.datasets[2].data = [34,24,36,48,20];
						all_book_data.datasets[3].data = [24,14,26,28,10];
						all_book_data.datasets[4].data = [14,04,16,18,00];

						window.all_book_chart.update();

					} else if (time_type == 'month') {

						all_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						all_book_data.datasets[0].data = [54,54,76,68,40,56,47,88,93,55,67,60];
						all_book_data.datasets[1].data = [44,44,66,48,30,46,37,58,73,45,57,50];
						all_book_data.datasets[2].data = [34,34,46,38,20,36,27,48,53,35,47,40];
						all_book_data.datasets[3].data = [24,24,36,28,10,26,17,28,33,15,37,30];
						all_book_data.datasets[4].data = [14,14,26,18,00,16,07,18,13,05,27,20];

						window.all_book_chart.update();

					} else if (time_type == 'season') {

						all_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						all_book_data.datasets[0].data = [54,35,76,53];
						all_book_data.datasets[1].data = [44,18,56,36];
						all_book_data.datasets[2].data = [34,15,46,33];
						all_book_data.datasets[3].data = [24,10,26,23];
						all_book_data.datasets[4].data = [14,08,16,13];

						window.all_book_chart.update();

					} else if (time_type == 'year') {

						all_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						all_book_data.datasets[0].data = [54,65,26,33,43,36,78,24,56];
						all_book_data.datasets[1].data = [44,45,20,30,33,26,58,20,46];
						all_book_data.datasets[2].data = [34,35,19,28,23,16,48,18,36];
						all_book_data.datasets[3].data = [24,25,16,24,13,12,38,16,26];
						all_book_data.datasets[4].data = [14,20,10,20,03,10,28,12,16];

						window.all_book_chart.update();

					}
				} else if (rate = 'percent') {
					if (time_type == 'day') {

						all_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						all_book_data.datasets[0].data = [100,100,100,100,100,100,100];
						all_book_data.datasets[1].data = [80,78,76,88,95,67,90];
						all_book_data.datasets[2].data = [76,66,52,74,78,57,86];
						all_book_data.datasets[3].data = [58,42,36,28,66,37,46];
						all_book_data.datasets[4].data = [34,10,26,08,34,27,16];

						window.all_book_chart.update();

					} else if (time_type == 'week') {

						all_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						all_book_data.datasets[0].data = [100,100,100,100,100];
						all_book_data.datasets[1].data = [84,94,76,88,90];
						all_book_data.datasets[2].data = [64,74,56,58,70];
						all_book_data.datasets[3].data = [44,54,36,48,60];
						all_book_data.datasets[4].data = [34,24,16,28,30];

						window.all_book_chart.update();

					} else if (time_type == 'month') {

						all_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						all_book_data.datasets[0].data = [100,100,100,100,100,100,100,100,100,100,100,100];
						all_book_data.datasets[1].data = [84,94,76,88,90,76,87,78,93,75,87,60];
						all_book_data.datasets[2].data = [64,54,66,48,70,56,67,68,83,55,57,40];
						all_book_data.datasets[3].data = [44,34,46,38,50,36,37,28,43,45,37,30];
						all_book_data.datasets[4].data = [14,24,26,28,30,26,17,18,23,25,17,10];

						window.all_book_chart.update();

					} else if (time_type == 'season') {

						all_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						all_book_data.datasets[0].data = [100,100,100,100];
						all_book_data.datasets[1].data = [84,88,96,76];
						all_book_data.datasets[2].data = [64,75,76,63];
						all_book_data.datasets[3].data = [44,30,36,43];
						all_book_data.datasets[4].data = [24,28,16,23];

						window.all_book_chart.update();

					} else if (time_type == 'year') {

						all_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						all_book_data.datasets[0].data = [100,100,100,100,100,100,100,100,100];
						all_book_data.datasets[1].data = [84,85,70,70,93,96,88,70,86];
						all_book_data.datasets[2].data = [64,65,59,58,63,76,78,58,46];
						all_book_data.datasets[3].data = [34,45,36,34,43,42,48,36,36];
						all_book_data.datasets[4].data = [14,30,30,20,23,10,28,22,16];

						window.all_book_chart.update();

					}
				}
			} else if (type == 'book') {
				if (rate == 'sum') {
					if (time_type == 'day') {

						book_data.datasets[0].data = [75,64,20,40,35];
						window.book_chart.update();

					} else if (time_type == 'week') {

						book_data.datasets[0].data = [86,30,72,33,45];
						window.book_chart.update();

					} else if (time_type == 'month') {

						book_data.datasets[0].data = [67,40,20,39,10];
						window.book_chart.update();

					} else if (time_type == 'season') {

						book_data.datasets[0].data = [58,67,77,49,30];
						window.book_chart.update();

					} else if (time_type == 'year') {

						book_data.datasets[0].data = [10,50,39,78,68];
						window.book_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						book_data.datasets[0].data = [4.5,4.6,4.7,4.0,3.8];
						window.book_chart.update();

					} else if (time_type == 'week') {

						book_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.book_chart.update();

					} else if (time_type == 'month') {

						book_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.book_chart.update();

					} else if (time_type == 'season') {

						book_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.book_chart.update();

					} else if (time_type == 'year') {

						book_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.book_chart.update();

					}
				} else if (rate == 'percent') {
					changeBookChartDoughnut();

					if (time_type == 'day') {

						book_data.datasets[0].data = [5.5,4.4,1.3,4.5,3.1];
						window.book_chart.update();

					} else if (time_type == 'week') {

						book_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.book_chart.update();

					} else if (time_type == 'month') {

						book_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.book_chart.update();

					} else if (time_type == 'season') {

						book_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.book_chart.update();

					} else if (time_type == 'year') {

						book_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.book_chart.update();

					}
				}
			} else if (type == 'time') {
				if (rate == 'sum') {
					if (time_type == 'day') {

						time_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_book_data.datasets[0].data = [75,64,20,40,35,67,58];
						time_book_data.datasets[1].data = [35,54,30,50,45,59,77];
						time_book_data.datasets[2].data = [65,44,30,40,35,34,33];
						window.time_book_chart.update();

					} else if (time_type == 'week') {

						time_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_book_data.datasets[0].data = [86,30,72,33,45];
						time_book_data.datasets[1].data = [75,44,50,40,35];
						time_book_data.datasets[2].data = [65,64,20,30,55];
						window.time_book_chart.update();

					} else if (time_type == 'month') {

						time_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_book_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
						time_book_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
						time_book_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
						window.time_book_chart.update();

					} else if (time_type == 'season') {

						time_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_book_data.datasets[0].data = [49,55,86,23];
						time_book_data.datasets[1].data = [60,45,76,13];
						time_book_data.datasets[2].data = [33,65,46,63];
						window.time_book_chart.update();

					} else if (time_type == 'year') {

						time_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_book_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
						time_book_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
						time_book_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
						window.time_book_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						time_book_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_book_data.datasets[0].data = [4.2,2.4,4.6,3.8,1.0,3.8,3.0];
						time_book_data.datasets[1].data = [4.2,4.4,4.4,2.4,2.2,2.8,2.6];
						time_book_data.datasets[2].data = [3.2,3.4,4.2,4.5,3.6,4.8,1.0];
						window.time_book_chart.update();

					} else if (time_type == 'week') {

						time_book_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_book_data.datasets[0].data = [4.5,2.4,2.9,2.8,4.0];
						time_book_data.datasets[1].data = [3.5,3.4,4.6,3.8,3.0];
						time_book_data.datasets[2].data = [2.7,2.0,3.6,3.0,2.0];
						window.time_book_chart.update();

					} else if (time_type == 'month') {

						time_book_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_book_data.datasets[0].data = [4.2,4.0,4.3,3.3,2.6,2.8,2.5,4.7,3.6,2.0,4.6,4.5];
						time_book_data.datasets[1].data = [4.0,3.9,3.0,2.9,4.9,2.9,3.7,4.0,4.0,3.9,3.9,2.8];
						time_book_data.datasets[2].data = [4.0,2.4,4.5,2.7,3.5,3.7,3.9,3.0,4.8,4.0,4.8,3.0];
						window.time_book_chart.update();

					} else if (time_type == 'season') {

						time_book_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_book_data.datasets[0].data = [2.0,4.5,1.6,2.3];
						time_book_data.datasets[1].data = [4.5,2.5,4.6,2.0];
						time_book_data.datasets[2].data = [3.3,3.5,2.6,4.3];
						window.time_book_chart.update();

					} else if (time_type == 'year') {

						time_book_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_book_data.datasets[0].data = [4.4,3.5,2.6,1.3,4.3,4.0,3.0,1.7,3.6];
						time_book_data.datasets[1].data = [1.2,2.5,1.6,2.3,1.3,4.6,3.4,1.0,3.2];
						time_book_data.datasets[2].data = [3.5,1.5,4.6,1.3,3.3,1.3,1.4,3.6,1.4];
						window.time_book_chart.update();

					}
				}
			}
		} else if (box == 'category') {
			if (type == 'category') {
				if (rate == 'sum') {
					if (time_type == 'day') {

						category_data.datasets[0].data = [75,64,20,40,35];
						window.category_chart.update();

					} else if (time_type == 'week') {

						category_data.datasets[0].data = [86,30,72,33,45];
						window.category_chart.update();

					} else if (time_type == 'month') {

						category_data.datasets[0].data = [67,40,20,39,10];
						window.category_chart.update();

					} else if (time_type == 'season') {

						category_data.datasets[0].data = [58,67,77,49,30];
						window.category_chart.update();

					} else if (time_type == 'year') {

						category_data.datasets[0].data = [10,50,39,78,68];
						window.category_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						category_data.datasets[0].data = [4.5,3.6,4.7,2.0,3.8];
						window.category_chart.update();

					} else if (time_type == 'week') {

						category_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.category_chart.update();

					} else if (time_type == 'month') {

						category_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.category_chart.update();

					} else if (time_type == 'season') {

						category_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.category_chart.update();

					} else if (time_type == 'year') {

						category_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.category_chart.update();

					}
				} else if (rate == 'percent') {
					changeCategoryChartDoughnut();

					if (time_type == 'day') {

						category_data.datasets[0].data = [5.5,4.4,1.3,4.5,3.1];
						window.category_chart.update();

					} else if (time_type == 'week') {

						category_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.category_chart.update();

					} else if (time_type == 'month') {

						category_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.category_chart.update();

					} else if (time_type == 'season') {

						category_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.category_chart.update();

					} else if (time_type == 'year') {

						category_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.category_chart.update();

					}
				}
			} else if (type == 'time') {
				if (rate == 'sum') {
					if (time_type == 'day') {

						time_category_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_category_data.datasets[0].data = [75,64,20,40,35,67,58];
						time_category_data.datasets[1].data = [35,54,30,50,45,59,77];
						time_category_data.datasets[2].data = [65,44,30,40,35,34,33];
						window.time_category_chart.update();

					} else if (time_type == 'week') {

						time_category_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_category_data.datasets[0].data = [86,30,72,33,45];
						time_category_data.datasets[1].data = [75,44,50,40,35];
						time_category_data.datasets[2].data = [65,64,20,30,55];
						window.time_category_chart.update();

					} else if (time_type == 'month') {

						time_category_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_category_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
						time_category_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
						time_category_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
						window.time_category_chart.update();

					} else if (time_type == 'season') {

						time_category_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_category_data.datasets[0].data = [49,55,86,23];
						time_category_data.datasets[1].data = [60,45,76,13];
						time_category_data.datasets[2].data = [33,65,46,63];
						window.time_category_chart.update();

					} else if (time_type == 'year') {

						time_category_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_category_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
						time_category_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
						time_category_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
						window.time_category_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						time_category_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_category_data.datasets[0].data = [4.2,2.4,4.6,3.8,1.0,3.8,3.0];
						time_category_data.datasets[1].data = [4.2,4.4,4.4,2.4,2.2,2.8,2.6];
						time_category_data.datasets[2].data = [3.2,3.4,4.2,4.5,3.6,4.8,1.0];
						window.time_category_chart.update();

					} else if (time_type == 'week') {

						time_category_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_category_data.datasets[0].data = [4.5,2.4,2.9,2.8,4.0];
						time_category_data.datasets[1].data = [3.5,3.4,4.6,3.8,3.0];
						time_category_data.datasets[2].data = [2.7,2.0,3.6,3.0,2.0];
						window.time_category_chart.update();

					} else if (time_type == 'month') {

						time_category_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_category_data.datasets[0].data = [4.2,4.0,4.3,3.3,2.6,2.8,2.5,4.7,3.6,2.0,4.6,4.5];
						time_category_data.datasets[1].data = [4.0,3.9,3.0,2.9,4.9,2.9,3.7,4.0,4.0,3.9,3.9,2.8];
						time_category_data.datasets[2].data = [4.0,2.4,4.5,2.7,3.5,3.7,3.9,3.0,4.8,4.0,4.8,3.0];
						window.time_category_chart.update();

					} else if (time_type == 'season') {

						time_category_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_category_data.datasets[0].data = [2.0,4.5,1.6,2.3];
						time_category_data.datasets[1].data = [4.5,2.5,4.6,2.0];
						time_category_data.datasets[2].data = [3.3,3.5,2.6,4.3];
						window.time_category_chart.update();

					} else if (time_type == 'year') {

						time_category_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_category_data.datasets[0].data = [4.4,3.5,2.6,1.3,4.3,4.0,3.0,1.7,3.6];
						time_category_data.datasets[1].data = [1.2,2.5,1.6,2.3,1.3,4.6,3.4,1.0,3.2];
						time_category_data.datasets[2].data = [3.5,1.5,4.6,1.3,3.3,1.3,1.4,3.6,1.4];
						window.time_category_chart.update();

					}
				}
			}
		} else if (box == 'user') {
			if (type == 'user') {
				if (rate == 'sum') {
					if (time_type == 'day') {

						user_data.datasets[0].data = [75,64,20,40,35];
						window.user_chart.update();

					} else if (time_type == 'week') {

						user_data.datasets[0].data = [86,30,72,33,45];
						window.user_chart.update();

					} else if (time_type == 'month') {

						user_data.datasets[0].data = [67,40,20,39,10];
						window.user_chart.update();

					} else if (time_type == 'season') {

						user_data.datasets[0].data = [58,67,77,49,30];
						window.user_chart.update();

					} else if (time_type == 'year') {

						user_data.datasets[0].data = [10,50,39,78,68];
						window.user_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						user_data.datasets[0].data = [4.5,3.6,4.7,2.0,3.8];
						window.user_chart.update();

					} else if (time_type == 'week') {

						user_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.user_chart.update();

					} else if (time_type == 'month') {

						user_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.user_chart.update();

					} else if (time_type == 'season') {

						user_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.user_chart.update();

					} else if (time_type == 'year') {

						user_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.user_chart.update();

					}
				} else if (rate == 'percent') {
					changeUserChartDoughnut();

					if (time_type == 'day') {

						user_data.datasets[0].data = [5.5,4.4,1.3,4.5,3.1];
						window.user_chart.update();

					} else if (time_type == 'week') {

						user_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.user_chart.update();

					} else if (time_type == 'month') {

						user_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.user_chart.update();

					} else if (time_type == 'season') {

						user_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.user_chart.update();

					} else if (time_type == 'year') {

						user_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.user_chart.update();

					}
				}
			} else if (type == 'time') {
				if (rate == 'sum') {
					if (time_type == 'day') {

						time_user_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_user_data.datasets[0].data = [75,64,20,40,35,67,58];
						time_user_data.datasets[1].data = [35,54,30,50,45,59,77];
						time_user_data.datasets[2].data = [65,44,30,40,35,34,33];
						window.time_user_chart.update();

					} else if (time_type == 'week') {

						time_user_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_user_data.datasets[0].data = [86,30,72,33,45];
						time_user_data.datasets[1].data = [75,44,50,40,35];
						time_user_data.datasets[2].data = [65,64,20,30,55];
						window.time_user_chart.update();

					} else if (time_type == 'month') {

						time_user_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_user_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
						time_user_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
						time_user_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
						window.time_user_chart.update();

					} else if (time_type == 'season') {

						time_user_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_user_data.datasets[0].data = [49,55,86,23];
						time_user_data.datasets[1].data = [60,45,76,13];
						time_user_data.datasets[2].data = [33,65,46,63];
						window.time_user_chart.update();

					} else if (time_type == 'year') {

						time_user_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_user_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
						time_user_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
						time_user_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
						window.time_user_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						time_user_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_user_data.datasets[0].data = [4.2,2.4,4.6,3.8,1.0,3.8,3.0];
						time_user_data.datasets[1].data = [4.2,4.4,4.4,2.4,2.2,2.8,2.6];
						time_user_data.datasets[2].data = [3.2,3.4,4.2,4.5,3.6,4.8,1.0];
						window.time_user_chart.update();

					} else if (time_type == 'week') {

						time_user_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_user_data.datasets[0].data = [4.5,2.4,2.9,2.8,4.0];
						time_user_data.datasets[1].data = [3.5,3.4,4.6,3.8,3.0];
						time_user_data.datasets[2].data = [2.7,2.0,3.6,3.0,2.0];
						window.time_user_chart.update();

					} else if (time_type == 'month') {

						time_user_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_user_data.datasets[0].data = [4.2,4.0,4.3,3.3,2.6,2.8,2.5,4.7,3.6,2.0,4.6,4.5];
						time_user_data.datasets[1].data = [4.0,3.9,3.0,2.9,4.9,2.9,3.7,4.0,4.0,3.9,3.9,2.8];
						time_user_data.datasets[2].data = [4.0,2.4,4.5,2.7,3.5,3.7,3.9,3.0,4.8,4.0,4.8,3.0];
						window.time_user_chart.update();

					} else if (time_type == 'season') {

						time_user_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_user_data.datasets[0].data = [2.0,4.5,1.6,2.3];
						time_user_data.datasets[1].data = [4.5,2.5,4.6,2.0];
						time_user_data.datasets[2].data = [3.3,3.5,2.6,4.3];
						window.time_user_chart.update();

					} else if (time_type == 'year') {

						time_user_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_user_data.datasets[0].data = [4.4,3.5,2.6,1.3,4.3,4.0,3.0,1.7,3.6];
						time_user_data.datasets[1].data = [1.2,2.5,1.6,2.3,1.3,4.6,3.4,1.0,3.2];
						time_user_data.datasets[2].data = [3.5,1.5,4.6,1.3,3.3,1.3,1.4,3.6,1.4];
						window.time_user_chart.update();

					}
				}
			}
		} else if (box == 'trans') {
			if (type == 'trans') {
				if (rate == 'sum') {
					if (time_type == 'day') {

						trans_data.datasets[0].data = [75,64,20,40,35];
						window.trans_chart.update();

					} else if (time_type == 'week') {

						trans_data.datasets[0].data = [86,30,72,33,45];
						window.trans_chart.update();

					} else if (time_type == 'month') {

						trans_data.datasets[0].data = [67,40,20,39,10];
						window.trans_chart.update();

					} else if (time_type == 'season') {

						trans_data.datasets[0].data = [58,67,77,49,30];
						window.trans_chart.update();

					} else if (time_type == 'year') {

						trans_data.datasets[0].data = [10,50,39,78,68];
						window.trans_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						trans_data.datasets[0].data = [4.5,3.6,4.7,2.0,3.8];
						window.trans_chart.update();

					} else if (time_type == 'week') {

						trans_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.trans_chart.update();

					} else if (time_type == 'month') {

						trans_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.trans_chart.update();

					} else if (time_type == 'season') {

						trans_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.trans_chart.update();

					} else if (time_type == 'year') {

						trans_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.trans_chart.update();

					}
				} else if (rate == 'percent') {
					changeTransChartDoughnut();

					if (time_type == 'day') {

						trans_data.datasets[0].data = [5.5,4.4,1.3,4.5,3.1];
						window.user_chart.update();

					} else if (time_type == 'week') {

						trans_data.datasets[0].data = [4.5,3.4,2.3,4.5,2.1];
						window.user_chart.update();

					} else if (time_type == 'month') {

						trans_data.datasets[0].data = [4.3,3.4,2.3,1.2,3.4];
						window.user_chart.update();

					} else if (time_type == 'season') {

						trans_data.datasets[0].data = [2.1,3.4,4.5,3.4,2.1];
						window.user_chart.update();

					} else if (time_type == 'year') {

						trans_data.datasets[0].data = [4.5,4.6,3.4,3.4,2.3];
						window.user_chart.update();

					}
				}
			} else if (type == 'time') {
				if (rate == 'sum') {
					if (time_type == 'day') {

						time_trans_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_trans_data.datasets[0].data = [75,64,20,40,35,67,58];
						time_trans_data.datasets[1].data = [35,54,30,50,45,59,77];
						time_trans_data.datasets[2].data = [65,44,30,40,35,34,33];
						window.time_trans_chart.update();

					} else if (time_type == 'week') {

						time_trans_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_trans_data.datasets[0].data = [86,30,72,33,45];
						time_trans_data.datasets[1].data = [75,44,50,40,35];
						time_trans_data.datasets[2].data = [65,64,20,30,55];
						window.time_trans_chart.update();

					} else if (time_type == 'month') {

						time_trans_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_trans_data.datasets[0].data = [12,30,23,33,56,78,55,87,30,10,20,35];
						time_trans_data.datasets[1].data = [40,39,20,19,39,49,87,40,50,69,29,18];
						time_trans_data.datasets[2].data = [10,24,55,67,95,39,29,30,68,40,30,20];
						window.time_trans_chart.update();

					} else if (time_type == 'season') {

						time_trans_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_trans_data.datasets[0].data = [49,55,86,23];
						time_trans_data.datasets[1].data = [60,45,76,13];
						time_trans_data.datasets[2].data = [33,65,46,63];
						window.time_trans_chart.update();

					} else if (time_type == 'year') {

						time_trans_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_trans_data.datasets[0].data = [44,35,26,73,43,50,30,77,36];
						time_trans_data.datasets[1].data = [62,25,56,23,63,46,34,60,32];
						time_trans_data.datasets[2].data = [35,15,46,73,33,83,14,36,14];
						window.time_trans_chart.update();

					}
				} else if (rate == 'average') {
					if (time_type == 'day') {

						time_trans_data.labels = ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'];
						time_trans_data.datasets[0].data = [4.2,2.4,4.6,3.8,1.0,3.8,3.0];
						time_trans_data.datasets[1].data = [4.2,4.4,4.4,2.4,2.2,2.8,2.6];
						time_trans_data.datasets[2].data = [3.2,3.4,4.2,4.5,3.6,4.8,1.0];
						window.time_trans_chart.update();

					} else if (time_type == 'week') {

						time_trans_data.labels = ['Tuần 1','Tuần 2','Tuần 3','Tuần 4','Tuần 5'];
						time_trans_data.datasets[0].data = [4.5,2.4,2.9,2.8,4.0];
						time_trans_data.datasets[1].data = [3.5,3.4,4.6,3.8,3.0];
						time_trans_data.datasets[2].data = [2.7,2.0,3.6,3.0,2.0];
						window.time_trans_chart.update();

					} else if (time_type == 'month') {

						time_trans_data.labels = ['tháng 1', 'tháng 2', 'tháng 3', 'tháng 4', 'tháng 5', 'tháng 6', 'tháng 7', 'tháng 8', 'tháng 9', 'tháng 10', 'tháng 11', 'tháng 12'];
						time_trans_data.datasets[0].data = [4.2,4.0,4.3,3.3,2.6,2.8,2.5,4.7,3.6,2.0,4.6,4.5];
						time_trans_data.datasets[1].data = [4.0,3.9,3.0,2.9,4.9,2.9,3.7,4.0,4.0,3.9,3.9,2.8];
						time_trans_data.datasets[2].data = [4.0,2.4,4.5,2.7,3.5,3.7,3.9,3.0,4.8,4.0,4.8,3.0];
						window.time_trans_chart.update();

					} else if (time_type == 'season') {

						time_trans_data.labels = ['mùa xuân', 'mùa hè', 'mùa thu', 'mùa đông'];
						time_trans_data.datasets[0].data = [2.0,4.5,1.6,2.3];
						time_trans_data.datasets[1].data = [4.5,2.5,4.6,2.0];
						time_trans_data.datasets[2].data = [3.3,3.5,2.6,4.3];
						window.time_trans_chart.update();

					} else if (time_type == 'year') {

						time_trans_data.labels = ['2010', '2011', '2012', '2013','2014','2015','2016','2017','2018'];
						time_trans_data.datasets[0].data = [4.4,3.5,2.6,1.3,4.3,4.0,3.0,1.7,3.6];
						time_trans_data.datasets[1].data = [1.2,2.5,1.6,2.3,1.3,4.6,3.4,1.0,3.2];
						time_trans_data.datasets[2].data = [3.5,1.5,4.6,1.3,3.3,1.3,1.4,3.6,1.4];
						window.time_trans_chart.update();

					}
				}
			}
		}
	});
});

/*
=====================
======= BOOK ========
=====================
*/
var all_book_data = {
	labels: ['Chủ Nhật', 'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7'],
	datasets: [
		{
			label: '5 sao',
			backgroundColor: '#3c8dbcaa',
			borderColor: '#3c8dbc',
			borderWidth: 2,
			data: view_day_all,
			fill:false,
		},
		{
			label: '4 sao',
			backgroundColor: '#00a65aaa',
			borderColor: '#00a65a',
			borderWidth: 2,
			data: [],
			fill:false,
		},
		{
			label: '3 sao',
			backgroundColor: '#dd4b39aa',
			borderColor: '#dd4b39',
			borderWidth: 2,
			data: [],
			fill:false,
		},
		{
			label: '2 sao',
			backgroundColor: '#269abcaa',
			borderColor: '#269abc',
			borderWidth: 2,
			data: [],
			fill:false,
		},
		{
			label: '1 sao',
			backgroundColor: '#ec971faa',
			borderColor: '#ec971f',
			borderWidth: 2,
			data: [],
			fill:false,
		}
	]
}
var all_book_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	plugins: {
		labels: {
			render: 'value'
		}
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true,
			}
		}]
	}
}
//book
var book_data = {
	labels: ['Attack On Titan', 'Sword Art Online', 'Date A Live', 'Dragon Ball Super', 'Konosuba'],
	datasets: [
		{
			label: 'Bình luận',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dbc',
			borderWidth: 2,
			data: [57,49,20,50,40],
		}
	]
}
var book_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	plugins: {
		labels: {
			render: 'value'
		}
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true
			}
		}]
	}
}
//book time
var time_book_data = {
	labels: ['Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7','Chủ Nhật'],
	datasets: [
		{
			label: 'Attack on Titan',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dbc',
			borderWidth: 2,
			data: [57,49,20,50,40,30,66],
		},
		{
			label: 'Swort Art Online',
			backgroundColor: '#00a65a',
			borderColor: '#00a65a',
			borderWidth: 2,
			data: [20,30,40,50,10,45,68],
		},
		{
			label: 'Date A Live',
			backgroundColor: '#ff851b',
			borderColor: '#ff851b',
			borderWidth: 2,
			data: [56,40,30,19,60,40,88],
		}
	]
}
var time_book_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	plugins: {
		labels: {
			render: 'value'
		}
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true
			}
		}]
	}
}
//book chap
var book_chap_data = {
	labels: ['chap 1','chap 2','chap 3','chap 4','chap 5'],
	datasets: [
		{
			label: 'Attack on Titan',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dbc',
			borderWidth: 2,
			data: [20,50,40,30,66],
		}
	]
}
var book_chap_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	plugins: {
		labels: {
			render: 'value'
		}
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true,
			}
		}]
	}
}
/*
======================
====== CATEGORY ======
======================
*/
//category
var category_data = {
	labels: ['Action', 'Advanture', 'Comedy', 'Harem', 'Magic'],
	datasets: [
		{
			label: 'Bình luận',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dbc',
			borderWidth: 2,
			data: [67,39,10,40,20],
		}
	]
}
var category_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	plugins: {
		labels: {
			render: 'value'
		}
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true
			}
		}]
	}
}
//category time
var time_category_data = {
	labels: ['Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7','Chủ Nhật'],
	datasets: [
		{
			label: 'Comedy',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dbc',
			borderWidth: 2,
			data: [37,39,50,56,20,50,66],
		},
		{
			label: 'Isekai',
			backgroundColor: '#00a65a',
			borderColor: '#00a65a',
			borderWidth: 2,
			data: [10,30,48,57,18,55,68],
		},
		{
			label: 'Future',
			backgroundColor: '#ff851b',
			borderColor: '#ff851b',
			borderWidth: 2,
			data: [26,50,20,39,78,50,58],
		}
	]
}
var time_category_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	plugins: {
		labels: {
			render: 'value'
		}
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true
			}
		}]
	}
}
/*
======================
======== USER ========
======================
*/
//user
var user_data = {
	labels: ['Nguyễn Văn Nam', 'Lê Thị Hồng', 'Lý Quốc Trung', 'Hoàng Văn Quang', 'Phạm Thị Hoa'],
	datasets: [
		{
			label: 'Bình luận',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dbc',
			borderWidth: 2,
			data: [67,39,10,40,20],
		}
	]
}
var user_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	plugins: {
		labels: {
			render: 'value'
		}
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true
			}
		}]
	}
}
//user time
var time_user_data = {
	labels: ['Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7','Chủ Nhật'],
	datasets: [
		{
			label: 'Nguyễn Văn Nam',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dbc',
			borderWidth: 2,
			data: [37,39,50,56,20,50,66],
		},
		{
			label: 'Lê Thị Hồng',
			backgroundColor: '#00a65a',
			borderColor: '#00a65a',
			borderWidth: 2,
			data: [10,30,48,57,18,55,68],
		},
		{
			label: 'Lý Quốc Trung',
			backgroundColor: '#ff851b',
			borderColor: '#ff851b',
			borderWidth: 2,
			data: [26,50,20,39,78,50,58],
		}
	]
}
var time_user_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	plugins: {
		labels: {
			render: 'value'
		}
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true
			}
		}]
	}
}
/*
======================
====== TRANS =========
======================
*/
//user
var trans_data = {
	labels: ['A3manga', 'MangaVN', 'Dark Angels Group', 'EiShun Team', 'Blog Truyen'],
	datasets: [
		{
			label: 'Bình luận',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dbc',
			borderWidth: 2,
			data: [67,39,10,40,20],
		}
	]
}
var trans_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	plugins: {
		labels: {
			render: 'value'
		}
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true
			}
		}]
	}
}
//user time
var time_trans_data = {
	labels: ['Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7','Chủ Nhật'],
	datasets: [
		{
			label: 'A3manga',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dbc',
			borderWidth: 2,
			data: [37,39,50,56,20,50,66],
		},
		{
			label: 'MangaVN',
			backgroundColor: '#00a65a',
			borderColor: '#00a65a',
			borderWidth: 2,
			data: [10,30,48,57,18,55,68],
		},
		{
			label: 'Dark Angels Group',
			backgroundColor: '#ff851b',
			borderColor: '#ff851b',
			borderWidth: 2,
			data: [26,50,20,39,78,50,58],
		}
	]
}
var time_trans_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		display: false
	},
	plugins: {
		labels: {
			render: 'value'
		}
	},
	scales: {
		yAxes: [{
			ticks: {
				beginAtZero: true
			}
		}]
	}
}
window.onload = function() {
	//==================//
	//====== BOOK ======//
	//==================//
	//Create view all book chart
	var all_book_canvas = document.getElementById('all-book-chart').getContext('2d');
	window.all_book_chart = new Chart(all_book_canvas, {
		type: 'line',
		data: all_book_data,
		options: all_book_option
	});
	//Create view book chart
	var book_canvas = document.getElementById('book-chart').getContext('2d');
	window.book_chart = new Chart(book_canvas, {
		type: 'bar',
		data: book_data,
		options: book_option
	});
	//Create view time book chart
	var time_book_canvas = document.getElementById('time-book-chart').getContext('2d');
	window.time_book_chart = new Chart(time_book_canvas, {
		type: 'bar',
		data: time_book_data,
		options: time_book_option
	});
	//Create view time book chart
	var book_chap_canvas = document.getElementById('book-chap-chart').getContext('2d');
	window.book_chap_chart = new Chart(book_chap_canvas, {
		type: 'bar',
		data: book_chap_data,
		options: book_chap_option
	});
	//==================//
	//==== CATEGORY ====//
	//==================//
	//Create view category chart
	var category_canvas = document.getElementById('category-chart').getContext('2d');
	window.category_chart = new Chart(category_canvas, {
		type: 'bar',
		data: category_data,
		options: category_option
	});
	//Create view time category chart
	var time_category_canvas = document.getElementById('time-category-chart').getContext('2d');
	window.time_category_chart = new Chart(time_category_canvas, {
		type: 'bar',
		data: time_category_data,
		options: time_category_option
	});
	//==================//
	//====== USER ======//
	//==================//
	//Create view user chart
	var user_canvas = document.getElementById('user-chart').getContext('2d');
	window.user_chart = new Chart(user_canvas, {
		type: 'bar',
		data: user_data,
		options: user_option
	});
	//Create view time user chart
	var time_user_canvas = document.getElementById('time-user-chart').getContext('2d');
	window.time_user_chart = new Chart(time_user_canvas, {
		type: 'bar',
		data: time_user_data,
		options: time_user_option
	});
	//==================//
	//=== TRANSLATOR ===//
	//==================//
	//Create view trans chart
	var trans_canvas = document.getElementById('trans-chart').getContext('2d');
	window.trans_chart = new Chart(trans_canvas, {
		type: 'bar',
		data: trans_data,
		options: trans_option
	});
	//Create view time trans chart
	var time_trans_canvas = document.getElementById('time-trans-chart').getContext('2d');
	window.time_trans_chart = new Chart(time_trans_canvas, {
		type: 'bar',
		data: time_trans_data,
		options: time_trans_option
	});
}
function resetData() {
	all_book_data.datasets[0].data = [];
	all_book_data.datasets[1].data = [];
	all_book_data.datasets[2].data = [];
	all_book_data.datasets[3].data = [];
	all_book_data.datasets[4].data = [];
}
function setDataRate() {
	all_book_data.datasets[0].fill = 1;
	all_book_data.datasets[1].fill = 2;
	all_book_data.datasets[2].fill = 3;
	all_book_data.datasets[3].fill = 4;
	all_book_data.datasets[4].fill = true;
}
function setDataRate(chart) {
	chart.options.legend.display = true;
	all_book_data.datasets[0].fill = 1;
	all_book_data.datasets[1].fill = 2;
	all_book_data.datasets[2].fill = 3;
	all_book_data.datasets[3].fill = 4;
	all_book_data.datasets[4].fill = true;
}
function changeBookChartDoughnut() {
	book_data.labels = ['5 sao','4 sao','3 sao','2 sao','1 sao'];
	book_data.datasets[0].backgroundColor = ['#3c8dbc','#00a65a','#ff851b','#269abc','#d58512'];
	book_data.datasets[0].borderColor = [];
	book_option = {
		responsive: true,
		maintainAspectRatio: false,
		legend: {
			position: 'top',
		},
		title: {
			display: true,
			text: 'Sword Art Online'
		},
		animation: {
			animateScale: true,
			animateRotate: true
		}
	}
	window.book_chart.destroy();
	book_canvas = document.getElementById('book-chart').getContext('2d');
	window.book_chart = new Chart(book_canvas, {
		type: 'doughnut',
		data: book_data,
		options: book_option
	});
}
function changeBookChartBar() {
	if (book_chart.config.type == 'bar') return;

	book_data.labels = ['Attack On Titan', 'Sword Art Online', 'Date A Live', 'Dragon Ball Super', 'Konosuba'];
	book_data.datasets[0].backgroundColor = '#3c8dbc';
	book_data.datasets[0].borderColor = '#3c8dbc';
	book_option = {
		responsive: true,
		maintainAspectRatio: false,
		legend: {
			display: false
		},
		plugins: {
			labels: {
				render: 'value'
			}
		},
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero: true
				}
			}]
		}
	}
	window.book_chart.destroy();
	book_canvas = document.getElementById('book-chart').getContext('2d');
	window.book_chart = new Chart(book_canvas, {
		type: 'bar',
		data: book_data,
		options: book_option
	});
}
function changeCategoryChartDoughnut() {
	category_data.labels = ['5 sao','4 sao','3 sao','2 sao','1 sao'];
	category_data.datasets[0].backgroundColor = ['#3c8dbc','#00a65a','#ff851b','#269abc','#d58512'];
	category_data.datasets[0].borderColor = [];
	category_option = {
		responsive: true,
		maintainAspectRatio: false,
		legend: {
			position: 'top',
		},
		title: {
			display: true,
			text: 'Sword Art Online'
		},
		animation: {
			animateScale: true,
			animateRotate: true
		}
	}
	window.category_chart.destroy();
	category_canvas = document.getElementById('category-chart').getContext('2d');
	window.category_chart = new Chart(category_canvas, {
		type: 'doughnut',
		data: category_data,
		options: category_option
	});
}
function changeCategoryChartBar() {
	if (category_chart.config.type == 'bar') return;

	category_data.labels = ['Attack On Titan', 'Sword Art Online', 'Date A Live', 'Dragon Ball Super', 'Konosuba'];
	category_data.datasets[0].backgroundColor = '#3c8dbc';
	category_data.datasets[0].borderColor = '#3c8dbc';
	category_option = {
		responsive: true,
		maintainAspectRatio: false,
		legend: {
			display: false
		},
		plugins: {
			labels: {
				render: 'value'
			}
		},
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero: true
				}
			}]
		}
	}
	window.category_chart.destroy();
	category_canvas = document.getElementById('category-chart').getContext('2d');
	window.category_chart = new Chart(category_canvas, {
		type: 'bar',
		data: category_data,
		options: category_option
	});
}
function changeUserChartDoughnut() {
	user_data.labels = ['5 sao','4 sao','3 sao','2 sao','1 sao'];
	user_data.datasets[0].backgroundColor = ['#3c8dbc','#00a65a','#ff851b','#269abc','#d58512'];
	user_data.datasets[0].borderColor = [];
	user_option = {
		responsive: true,
		maintainAspectRatio: false,
		legend: {
			position: 'top',
		},
		title: {
			display: true,
			text: 'Nguyễn Văn Nam'
		},
		animation: {
			animateScale: true,
			animateRotate: true
		}
	}
	window.user_chart.destroy();
	user_canvas = document.getElementById('user-chart').getContext('2d');
	window.user_chart = new Chart(user_canvas, {
		type: 'doughnut',
		data: user_data,
		options: user_option
	});
}
function changeUserChartBar() {
	if (user_chart.config.type == 'bar') return;

	user_data.labels = ['Nguyễn Văn Nam', 'Lê Thị Hồng', 'Lý Quốc Trung', 'Hoàng Văn Quang', 'Phạm Thị Hoa'];
	user_data.datasets[0].backgroundColor = '#3c8dbc';
	user_data.datasets[0].borderColor = '#3c8dbc';
	user_option = {
		responsive: true,
		maintainAspectRatio: false,
		legend: {
			display: false
		},
		plugins: {
			labels: {
				render: 'value'
			}
		},
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero: true
				}
			}]
		}
	}
	window.user_chart.destroy();
	user_canvas = document.getElementById('user-chart').getContext('2d');
	window.user_chart = new Chart(user_canvas, {
		type: 'bar',
		data: user_data,
		options: user_option
	});
}
function changeTransChartDoughnut() {
	trans_data.labels = ['5 sao','4 sao','3 sao','2 sao','1 sao'];
	trans_data.datasets[0].backgroundColor = ['#3c8dbc','#00a65a','#ff851b','#269abc','#d58512'];
	trans_data.datasets[0].borderColor = [];
	trans_option = {
		responsive: true,
		maintainAspectRatio: false,
		legend: {
			position: 'top',
		},
		title: {
			display: true,
			text: 'Nguyễn Văn Nam'
		},
		animation: {
			animateScale: true,
			animateRotate: true
		}
	}
	window.trans_chart.destroy();
	trans_canvas = document.getElementById('trans-chart').getContext('2d');
	window.trans_chart = new Chart(trans_canvas, {
		type: 'doughnut',
		data: trans_data,
		options: trans_option
	});
}
function changeTransChartBar() {
	if (trans_chart.config.type == 'bar') return;

	trans_data.labels = ['A3manga', 'MangaVN', 'Dark Angels Group', 'EiShun Team', 'Blog Truyen'];
	trans_data.datasets[0].backgroundColor = '#3c8dbc';
	trans_data.datasets[0].borderColor = '#3c8dbc';
	trans_option = {
		responsive: true,
		maintainAspectRatio: false,
		legend: {
			display: false
		},
		plugins: {
			labels: {
				render: 'value'
			}
		},
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero: true
				}
			}]
		}
	}
	window.trans_chart.destroy();
	trans_canvas = document.getElementById('trans-chart').getContext('2d');
	window.trans_chart = new Chart(trans_canvas, {
		type: 'bar',
		data: trans_data,
		options: trans_option
	});
}