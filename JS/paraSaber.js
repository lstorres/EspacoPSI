$(document).ready(function() {

	var position = 0;
	$(".para-saber-box").each(function(){
	    var resto = position % 2;
	    if(resto == 0){
	       $(this).addClass("odd");    
	    }else{
	    	 $(this).addClass("even");
	    }
	    position++;
	});

});