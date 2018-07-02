$(document).ready(function(){
	$('.menu li:has(ul)').click(function(e){
		e.preventDefault();

		if($(this).children('ul').css('display') === 'none'){
			
			$(this).children('ul').slideDown();

			$('.menu li a').find($(".up")).removeClass('fa-sort-down').addClass('fa-sort-up');
		
		}
		 
	});

	$('.up').click(function(e){
		

		if($('.menu li').children('ul').css('display') !== 'none'){
			
			$('.menu li').children('ul').slideUp();
			$('.menu li a').find($(".up")).removeClass('fa-sort-up').addClass('fa-sort-down');
		}
		 
	});

	$('.menu li ul li a').click(function(){
		window.location.href=$(this).attr("href");
	});

});