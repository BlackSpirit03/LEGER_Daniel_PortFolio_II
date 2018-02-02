$(document).ready(function(){

	// ON FORMS FIELDS
	//$('[data-toggle="tooltip"]').tooltip();

	// ON FORMS INPUT FILE PREVIEW
	$('#logo').change(function(e) {

		var fileSelected = $('#logo').val('url');
		alert(fileSelected);
		$('#logoselect').attr('value',fileSelected);
		$('#test').attr('src',fileSelected);
		//alert(fileSelected);
		// var html = "<img src=" + fileSelected + ">"
		//	$('#logoprevious').html(html);			
		//alert($('#logoprevious').attr('src'));
		//alert( $_FILES['logo']['name'] );
		//alert ( $_FILES['mon_fichier']['name'] );

	});



	// MODAL FUNCTION USED BY ADMIN PART

	// ON CLICK ON TRASH BUTTON IN THE FORMS	
	// Store some value before to show the modal
	$('.validsup').click(function(e) {
		
		//Stop the run of form action
		e.preventDefault();

		//Control display
		//alert($(this).parent().attr('href'));

		//Store in the Modal button the url initially send by the form button
		$('#btdel').attr('href',$(this).parent().attr('href'));

		// Show the Modal
		$('#MyModal').modal("show");

	});

	// ON CLICK ON THE YES BUTTON IN THE MODAL
	// Run action and Hide the Modal
	$('#btdel').click(function(){

		// Run the url action previously stored
		$(location).attr('href', $('#btdel').attr('href'));

		// Hide the Modal
		$('#MyModal').modal("hide");
	});


});




