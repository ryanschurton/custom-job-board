$(document).ready(function(){

	$.ajax({
		type: 'GET',
		data: {stuff: "jobcategories"},
		url: "controller/select.ctrl.php",
	  	success: function(result) {
	  		var data = JSON.parse(result);
	  		for(var i = 0; i < data.length; i++) {
	  			$("#jobstype").append('<option value='+ data[i].job_category_id +'>' + data[i].job_category_name + '</option>');
	  		}
	  		
	  		// console.log(data[0]);
	  		// console.log(data[0].job_category_id);
	  		// console.log(data[0].job_category_name);	
	  		
	  	}
	})

});