$(document).ready(function(){

	$.ajax({
		type: 'GET',
		data: {type:"summary"},
		url: "controller/select.ctrl.php",
	  	success: function(result){
	  		console.log(result);
	  		// var data = JSON.parse(result);
	  		// console.log(data);
	  		// $('.compy-name').html(data.company_name);
	  		// $('.compy-desc').html(data.company_description);
	  		
	  	}
	});

});