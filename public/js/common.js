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
