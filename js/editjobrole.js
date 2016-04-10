$(document).ready(function(){

	$( "#jobstype" ).change(function() {
		
		var currole = $('#jobstype :selected').val();
  		console.log(currole);
		$.ajax({
			type: 'GET',
			data: {stuff: "getJobCategory", selectedRole: currole},
			url: "controller/select.ctrl.php",
	  		success: function(result){
	  		
	  		var data = JSON.parse(result);
	  		//console.log(data.jobtitles[0]);
		  		if(data.jobtitles[0]) {
		  			$("#jobviews").html("<p>Jobs found in this category</p>");
		  		} else {
		  			$("#jobviews").html("<p>No Jobs</p>");
		  		}
	  		}
		})

	});

});