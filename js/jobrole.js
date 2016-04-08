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
	  		
	  		for(var i = 0; i < data.length; i++) {
	  			var modalHTML = '<div id="myModal'+(i+1)+'" class="modal fade" role="dialog"><div class="modal-dialog">';
					modalHTML += '<div class="modal-content">';
					modalHTML +='<div class="modal-header">';
					modalHTML +='<button type="button" class="close" data-dismiss="modal">&times;</button>';
					modalHTML +='<h4 class="modal-title">Modal Header</h4>';
					modalHTML +='</div>';
					modalHTML +='<div class="modal-body">';
					modalHTML +='<input type=text value='+ data[i].job_category_name +'>';
					modalHTML +='<textarea>' + data[i].job_category_description  + '</textarea>';
					modalHTML +='</div>';
					modalHTML +='<div class="modal-footer">';
					modalHTML +='<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
					modalHTML +='</div>';
					modalHTML +='</div>';
					modalHTML +='</div>';
					modalHTML +='</div>';

				$('#allModal').append(modalHTML);

	  			$("#roledata").append('<hr><button data-toggle="modal" data-target="#myModal'+data[i].job_category_id+'" type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o "></i> Edit</button><h3>'+ data[i].job_category_name +'</h3><p>'+ data[i].job_category_description + '</p>');
	  		}
	  		

	  		// console.log(data[0]);
	  		// console.log(data[0].job_category_id);
	  		// console.log(data[0].job_category_name);	
	  		
	  	}
	})



});