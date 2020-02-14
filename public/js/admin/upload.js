$(document).ready(function() {
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
	$('.avatar input.image').change(function() {
		if (this.files && this.files[0]) {
			var t = this;
			var reader = new FileReader();

			reader.onload = function(e) {
				$(t).parent().parent().find('img').attr('src',e.target.result);
			}
			reader.readAsDataURL(this.files[0]);
		}
	});
	//selected
	$('.form-group.images .btn').click(function() {
		if ($(this).hasClass('btn-primary'))
			$(this).parent().find('input.select').val('add');
		else if ($(this).hasClass('btn-info'))
			$(this).parent().find('input.select').val('reup');
	});
	//check form create book
	$('form#create-book .box-footer button.btn-primary').click(function() {
		var form = $(this).parents('form#create-book');
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
	// check create chap
	$('form.form-new-chap .box-footer .btn.btn-success').click(function() {
		var form  = $(this).parents('form.form-new-chap');
		var check = true;
		//check enter name
		var name = form.find('.form-group.name input').val();
		if (name == '') {
			form.find('.form-group.name p.error.hide').removeClass('hide');
			check = false;
		} else {
			var p = form.find('.form-group.name p.error');
			if (!p.hasClass('hide'))
				p.addClass('hide');
		}
		//check enter index
		var index = form.find('.form-group.index input').val();
		if (name == '') {
			form.find('.form-group.index p.error.hide').removeClass('hide');
			check = false;
		} else {
			var p = form.find('.form-group.index p.error');
			if (!p.hasClass('hide'))
				p.addClass('hide');
		}

		if (check == true) {
			form.submit();
		}
	});
	$('form#create-author .box-footer button.btn-primary').click(function() {
		var form  = $(this).parents('form#create-author');
		var check = true;
		//check enter name
		var name = form.find('.form-group.name input').val();
		if (name == '') {
			form.find('.form-group.name p.error.hide').removeClass('hide');
			check = false;
		} else {
			var p = form.find('.form-group.name p.error');
			if (!p.hasClass('hide'))
				p.addClass('hide');
		}

		if (check == true) {
			form.submit();
		}
	});
	//submit add keyword
	$('form#add_keyword button.btn-primary').click(function() {
		$(this).parents('.modal').modal('hide');
		$(this).parents('.form#add_keyword').submit();
	});

	//call approved book
	$('table#table-book-approved .btn.btn-primary.call').click(function() {
		var id = $(this).data('id');
		var btn = $(this);
		$.ajax({
			type: 'GET',
			url: '/admin/uploader/ajax/call_approved_book/'+id,
			success:function(data) {
				btn.removeClass('btn-primary');
				btn.addClass('btn-success');
				btn.text('Đã gữi')
			}
		});
	});

	//call approved book
	$('table#table-chap-approved .btn.btn-primary.call').click(function() {
		var id = $(this).data('id');
		var btn = $(this);
		$.ajax({
			type: 'GET',
			url: '/admin/uploader/ajax/call_approved_chap/'+id,
			success:function(data) {
				btn.removeClass('btn-primary');
				btn.addClass('btn-success');
				btn.text('Đã gữi')
			}
		});
	});
});
//Comment Chart
var cmd_chart_data = {
	labels: lb_name,
	datasets: [
		{
			label: 'Bình luận',
			backgroundColor: '#00a65a',
			borderColor: '#00b65a',
			borderWidth: 1,
			data: cmd_data,
		}
	]
};
var cmd_chart_option = {
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
				suggestedMax: 140
			}
		}]
	}
}

//View Chart
var view_chart_data = {
	labels: lb_name,
	datasets: [
		{
			label: 'Lượt xem',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dcc',
			borderWidth: 1,
			data: view_data,
		}
	]
};
var view_chart_option = {
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
//Like Chart
var like_chart_data = {
	labels: lb_name,
	datasets: [
		{
			label: 'Lượt xem',
			backgroundColor: '#dd4b39',
			borderColor: '#dd4b39',
			borderWidth: 1,
			data: like_data,
		}
	]
};
var like_chart_option = {
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
//Follow Chart
var follow_chart_data = {
	labels: lb_name,
	datasets: [
		{
			label: 'Theo dõi',
			backgroundColor: '#ef851b',
			borderColor: '#ef851b',
			borderWidth: 1,
			data: follow_data,
		}
	]
};
var follow_chart_option = {
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
//Rate Chart
var rate_chart_data = {
	labels: ['5 sao', '4 sao', '3 sao', '2 sao', '1 sao'],
	datasets: [
		{
			label: 'Đánh giá',
			backgroundColor: ['#dd4b39','#ef851b','#00b65a','#3c8dbc', '#605ca8'],
			data: rate_data_all[0],
		}
	]
};
var rate_chart_option = {
	responsive: true,
	maintainAspectRatio: false,
	legend: {
		position: 'bottom'
	},
	plugins: {
		labels: {
			render: 'percentage',
			fontColor: '#fff',
		}
	},
	tooltips: {
      callbacks: {
        label: function(tooltipItem, data) {
          var dataset = data.datasets[tooltipItem.datasetIndex];
          var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
            return previousValue + currentValue;
          });
          var currentValue = dataset.data[tooltipItem.index];
          var percentage = Math.floor(((currentValue/total) * 100)+0.5);         
          return percentage + "%";
        }
      }
    }
}

window.onload = function() {
	//Create comment chart
	var cmd_canvas = document.getElementById('cmd-chart').getContext('2d');
	window.cmd_chart = new Chart(cmd_canvas, {
		type: 'bar',
		data: cmd_chart_data,
		options: cmd_chart_option
	});
	//Create view chart
	var view_canvas = document.getElementById('view-chart').getContext('2d');
	window.view_chart = new Chart(view_canvas, {
		type: 'bar',
		data: view_chart_data,
		options: view_chart_option
	});
	//Create like chart
	var like_canvas = document.getElementById('like-chart').getContext('2d');
	window.like_chart = new Chart(like_canvas, {
		type: 'bar',
		data: like_chart_data,
		options: like_chart_option
	});
	//Create follow chart
	var follow_canvas = document.getElementById('follow-chart').getContext('2d');
	window.follow_chart = new Chart(follow_canvas, {
		type: 'bar',
		data: follow_chart_data,
		options: follow_chart_option
	});
	//Create rate chart
	var rate_canvas = document.getElementById('rate-chart').getContext('2d');
	window.rate_chart = new Chart(rate_canvas, {
		type: 'doughnut',
		data: rate_chart_data,
		options: rate_chart_option
	});
}

$(document).ready(function() {
	var array_index_chart = [0,1,2,3,4];
	for (i = 5; i < lb_name_all.length; i++) {
		array_index_chart[i] = null;
	}
	function update_array_chart(index) {
		// debugger;
		for (i = 0; i < array_index_chart.length; i++) {
			if (array_index_chart[i] > array_index_chart[index]) {
				array_index_chart[i]--;
				if (array_index_chart[i] < 0) array_index_chart[i] = 0;
			}
		}
		array_index_chart[index] = null;
	}
	$(document).on('click', '#table-statistic-button-small .btn-success', function() {
		if (cmd_chart_data.datasets.length > 0) {
			var index = parseInt($(this).data('index'));
			var name  = lb_name_all[index];
			var cmd_data  = cmd_data_all[index];
			var view_data = view_data_all[index];
			var like_data = like_data_all[index];

			cmd_chart_data.labels.push(name);
			cmd_chart_data.datasets[0].data.push(cmd_data);
			view_chart_data.datasets[0].data.push(view_data);
			like_chart_data.datasets[0].data.push(like_data);
			follow_chart_data.datasets[0].data.push(like_data);

			array_index_chart[index] = cmd_chart_data.labels.length - 1;

			$(this).removeClass('btn-success');
			$(this).addClass('btn-danger');
			$(this).text('Xóa');

			console.log(array_index_chart);

			window.cmd_chart.update();
			window.view_chart.update();
			window.like_chart.update();
			window.follow_chart.update();
		}
	});

	$(document).on('click', '#table-statistic-button-small .btn-danger', function() {
		// set data-index not working
		// then create array index
		var index = parseInt($(this).data('index'));
		cmd_chart_data.labels.splice(array_index_chart[index], 1);
		cmd_chart_data.datasets[0].data.splice(array_index_chart[index], 1);
		view_chart_data.datasets[0].data.splice(array_index_chart[index], 1);
		like_chart_data.datasets[0].data.splice(array_index_chart[index], 1);
		follow_chart_data.datasets[0].data.splice(array_index_chart[index], 1);

		update_array_chart(index);

		$(this).removeClass('btn-danger');
		$(this).addClass('btn-success');
		$(this).text('Thêm');

		console.log(array_index_chart);

		window.cmd_chart.update();
		window.view_chart.update();
		window.like_chart.update();
		window.follow_chart.update();
	});
	$('#table-statistic-small tr.link').click(function() {
		var index = parseInt($(this).data('index'));
		var data  = rate_data_all[index];
		rate_chart_data.datasets[0].data = data;

		window.rate_chart.update();
	});
});