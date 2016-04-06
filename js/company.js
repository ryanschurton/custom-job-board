$(document).ready(function(){

	$.ajax({
		type: 'GET',
		data: {stuff: "company"},
		url: "controller/select.ctrl.php",
	  	success: function(result){
	  		console.log(result);
	  		var data = JSON.parse(result);
	  		$( "input[name='companyname']" ).val(data.company_name);
	  		$( "textarea[name='companydescription']" ).html(data.company_description);
	  		
	  	}
	})

});