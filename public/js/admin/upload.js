//Comment Chart
var cmd_chart_data = {
	labels: ['Attack On Titan', 'Sword Art Online', 'Date A Live', 'Dragon Ball Super', 'Konosuba'],
	datasets: [
		{
			label: 'Bình luận',
			backgroundColor: '#00a65a',
			borderColor: '#00b65a',
			borderWidth: 1,
			data: [35,24,56,48,30],
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
				beginAtZero: true
			}
		}]
	}
}

//View Chart
var view_chart_data = {
	labels: ['Attack On Titan', 'Sword Art Online', 'Date A Live', 'Dragon Ball Super', 'Konosuba'],
	datasets: [
		{
			label: 'Lượt xem',
			backgroundColor: '#3c8dbc',
			borderColor: '#3c8dcc',
			borderWidth: 1,
			data: [35,24,56,48,30],
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
	labels: ['Attack On Titan', 'Sword Art Online', 'Date A Live', 'Dragon Ball Super', 'Konosuba'],
	datasets: [
		{
			label: 'Lượt xem',
			backgroundColor: '#dd4b39',
			borderColor: '#dd4b39',
			borderWidth: 1,
			data: [35,24,56,48,30],
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
	labels: ['Attack On Titan', 'Sword Art Online', 'Date A Live', 'Dragon Ball Super', 'Konosuba'],
	datasets: [
		{
			label: 'Theo dõi',
			backgroundColor: '#ef851b',
			borderColor: '#ef851b',
			borderWidth: 1,
			data: [35,24,56,48,30],
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
			data: [35,24,56,48,30],
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