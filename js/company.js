$(document).ready(function(){
	//Ajax call to return the company name and description
	$.ajax({
		type: 'GET',
		data: {stuff: "company"},
		url: "controller/select.ctrl.php",
	  	success: function(result){
	  		console.log(result);
	  		var data = JSON.parse(result);
	  		$( "input[name='companyname']" ).val(data.company_name); //input the company name into value makes it sticky
	  		$( "textarea[name='companydescription']" ).html(data.company_description); //input the company description in textarea makes it sticky
	  		
	  	}
	})

});