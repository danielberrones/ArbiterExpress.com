'use strict';

$(function(){

	$('a[href="#contact"]').on('click', function(e){
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("footer").offset().top
	    }, 2000);
	});


	$('#contact button').on('click', function(){

		this.innerText = 'Processing...';

		$.ajax({
			method: 'post',
			url: 'brain.php',
			data: {
				what: "contact",
				name: $('#fullname').val(),
				phone: $('#phone').val(),
				email: $('#email').val(),
				message: $('#message').val()
			},
			dataType: 'text',
			success: function(results){

				$('#contact').fadeOut();
				$('#contact-bar #thank-you').fadeIn();

			}
		});

	});

	$('#apply button').on('click', function(){

		this.innerText = 'Processing...';

		var myData = $('#apply').serializeArray(); 
		myData.push({name: 'what', value: "apply"});

		$.ajax({
			method: 'post',
			url: 'brain.php',
			data: myData,
			dataType: 'text',
			success: function(results){

				$('#apply').fadeOut();
				$('.apply #thank-you').fadeIn();
		
			}
		});

	});

	$('.qr button').on('click', function(){

		let theForm = $(this).parent();

		$.ajax({
			method: 'post',
			url: 'brain.php',
			data: theForm.serializeArray(),
			dataType: 'text',
			success: function(results){

				if (results === 'green') {

					theForm.fadeOut();
					
					$('.view').fadeIn();

				};

				if (results === 'red') {

					resetForm();
					$('form button').text('Try Again');
					// make timestamp of who and when they failed to log

				};
		
			}
		});	

	});

	$('.tiles button').on('click', function(){
		$('.tiles button').css({'background':'#eee','color':'black'});
		$(this).css({'background':'black','color':'white'});

		$('.selection h2 span').text($(this).text());

		$('.selection').fadeIn();
	});

});

function resetForm() {
	$('form').trigger('reset');
}