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
					modalHTML +='<h4 class="modal-title">Edit Job Role</h4>';
					modalHTML +='</div>';
					modalHTML +='<div class="modal-body">';
					modalHTML +='<form  class="modalForm form-group">';
					modalHTML +='<label for="formGroupExampleInput">Job Role</label>';
					modalHTML += '<input type="hidden" name=roleid'+i+' value='+ data[i].job_category_id +'>';
					modalHTML +='<input type="text" name=rolename'+i+' class="form-control" value="'+ data[i].job_category_name +'"/>';
					modalHTML += '<label for="formGroupExampleInput">Job Role Description</label>';
					modalHTML +='<textarea class="form-control" name=roledesc'+i+' name= cols="50" rows="7">' + data[i].job_category_description  + '</textarea>';
					modalHTML +='<div class="modal-footer">';
					modalHTML += '<button type="submit" class="btn btn-primary ">Save Changes</button>';
					modalHTML +='<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
					modalHTML +='</form></div>';
					modalHTML +='</div>';
					modalHTML +='</div>';
					modalHTML +='</div>';
					modalHTML +='</div>';

			$('#allModal').append(modalHTML);

	  		$("#roledata").append('<hr><a data-toggle="modal" id=role'+data[i].job_category_id+' data-target="#myModal'+data[i].job_category_id+'" type="button"><i class="fa fa-pencil-square-o "></i> Edit</a><h3>'+ data[i].job_category_name +'</h3><p>'+ data[i].job_category_description + '</p>');
	  		
	  		}
	  		
	  	}
	})



});