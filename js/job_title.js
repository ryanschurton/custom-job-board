$(document).ready(function(){

	$.ajax({
		type: 'GET',
		data: {stuff: "jobs"},
		url: "controller/select.ctrl.php",
	  	success: function(result){
	  		
	  	}
	})
});