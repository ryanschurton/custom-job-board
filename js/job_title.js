$(document).ready(function(){

	$.ajax({
		type: 'GET',
		data: {stuff: "getJobCategory"},
		url: "controller/select.ctrl.php",
	  	success: function(result){
	  		
	  		//var data = JSON.parse(result);
	  		console.log(result);
	  	}
	})
});