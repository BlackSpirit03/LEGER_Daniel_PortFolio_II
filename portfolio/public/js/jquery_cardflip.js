$(document).ready(function(){
  
		$('.flipcard').click(function(){
      if ($(this).hasClass( 'flip' )) {
        $(this).removeClass('flip');
      }else{
        $(this).addClass('flip');
      }  
		});
  
});