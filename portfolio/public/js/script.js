$(document).ready(function(){

	// MODAL FUNCTION USED BY ADMIN PART

	// ON CLICK ON TRASH BUTTON IN THE FORMS	
	// Store some value before to show the modal
	$('.validsup').click(function(e) {
		
		//Stop the run of form action
		e.preventDefault();

		//Store in the Modal button the url initially send by the form button
		$('#btdel').attr('href',$(this).parent().attr('href'));

		// Show the Modal
		$("#MyModal").modal("show");

	});

	// ON CLICK ON THE YES BUTTON IN THE MODAL
    // Run action and Hide the Modal
    $("#btdel").click(function(){

    	// Run the url action previously stored
		$(location).attr('href', $('#btdel').attr('href'));

		// Hide the Modal
        $("#MyModal").modal("hide");
    });


    // UNKNOWN FUNCTION TO ISOLATE !!!
	$('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
	    e.preventDefault();
	    var $form=$(this);
	    $('#confirm').modal({ backdrop: 'static', keyboard: false })
	        .on('click', '#delete-btn', function(){
	            $form.submit();
	        });
	});

});




