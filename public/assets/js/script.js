$ = jQuery;

$(document).ready(function(){

	$(document).on('click', '#minimize_sidebar', function(){

		$('.dash-sidebar').toggleClass('sidebar-minimized');
		$('.minimize').fadeToggle(0);
		$('.sidebar-margin').toggleClass('margin-reduce');



	})
	$(document).on('click', '#dropdown-trigger', function(){

		$(this).toggleClass('active')

		$(this).next('.options').slideToggle(200);

	})

	$(document).on('click', '.sub-trigger', function(event){

		$(this).find('.sub-item').slideToggle();

	})

	$(document).on('click', '.d-toggle', function(event){
		var id = $(this).attr('data-attr');
		$('.login-wrap').fadeOut(0);
		$('#'+id).slideDown();
	})

	$(document).on('click', '.sidebar-list', function(event){
		event.stopPropagation();
	})

})