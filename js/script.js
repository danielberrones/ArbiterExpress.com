$(function(){

	$('a[href="#contact"]').on('click', function(e){
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("footer").offset().top
	    }, 2000);
	});

	$('a[href="#about"], a[href="#services"]').on('click', function(e){
		e.preventDefault();
	    $('html, body').animate({
	        scrollTop: $("main").offset().top
	    }, 2000);
	});

	$('#contact button').on('click', function(){

		this.innerText = 'Processing...';

		$.ajax({
			method: 'post',
			url: 'brain.php',
			data: {
				what: "contact",
				name: $('#name').val(),
				phone: $('#phone').val(),
				email: $('#email').val(),
				message: $('#message').val()
			},
			dataType: 'text',
			success: function(results){

				$('form').fadeOut();
				$('#ty').fadeIn();

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

				$('form').fadeOut();
				$('#ty').fadeIn();
		
			}
		});

	});

});