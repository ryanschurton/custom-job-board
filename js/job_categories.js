$(document).ready(function(){

	$.ajax({
		type: 'GET',
		data: {stuff:"jobcategories"},
		url: "controller/select.ctrl.php",
	  	success: function(result){
	  		console.log(result);
	  		// $('.compy-name').html(data.company_name);
	  		// $('.compy-desc').html(data.company_description);
	  		
	  	}
	})

});