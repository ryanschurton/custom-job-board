$(document).ready(function(){



	$( "#jobstype" ).change(function() {
		var currole = $('#jobstype :selected').val();
		$.ajax({
			type: 'GET',
			data: {stuff: "getJobCategory", selectedRole: currole},
			url: "controller/select.ctrl.php",
	  		success: function(result){

	  		var data = JSON.parse(result);
	  		//console.log(data[0].job_title);
		  		if(data) {
		  			$("#jobviews").empty();
		  			for(var i = 0; i < data.length; i++) {

		  		//Modal to edit a job title
	  			var modalHTML1 = '<div id="myModal'+(i+1)+'" class="modal fade" role="dialog"><div class="modal-dialog">';
					modalHTML1 += '<div class="modal-content">';
					modalHTML1 +='<div class="modal-header">';
					modalHTML1 +='<h4 class="modal-title">Edit Job Title</h4>';
					modalHTML1 +='</div>';
					modalHTML1 +='<div class="modal-body">';
					modalHTML1 +='<form  class="modalForm form-group">';
					modalHTML1 +='<label for="formGroupExampleInput">Job Role</label>';
					modalHTML1 += '<input type="hidden" name=roleid'+i+' value='+ (i+1) +'>';
					modalHTML1 += '<input type="hidden" name="titleid" value='+ data[i].job_title_id +'>';
					modalHTML1 +='<input type="text" name=rolename'+i+' class="form-control" value="'+ data[i].job_title +'"/>';
					modalHTML1 += '<label for="formGroupExampleInput">Job Role Description</label>';
					modalHTML1 +='<textarea class="form-control" name=roledesc'+i+' name= cols="50" rows="7">' + data[i].job_description  + '</textarea>';
					modalHTML1 +='<div class="modal-footer">';
					modalHTML1 += '<button type="submit" class="btn btn-primary ">Save Changes</button>';
					modalHTML1 +='<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
					modalHTML1 +='</form></div>';
					modalHTML1 +='</div>';
					modalHTML1 +='</div>';
					modalHTML1 +='</div>';
					modalHTML1 +='</div>';
					
					$('#jobTitleModal').append(modalHTML1);	  		
		  			var html = '<hr><a data-toggle="modal" id=role'+ data[i].job_title_id +' data-target="#myModal'+(i+1)+'" type="button"><i class="fa fa-pencil-square-o "></i> Edit</a>';
		  				html += '<br><a data-toggle="modal" id=dRole'+ data[i].job_title_id +'  type="button"><i class="fa fa-times" aria-hidden="true"></i> Delete</a>';
		  				html += '<h4><span>Title: </span>'+data[i].job_title+'</h4>';
		  				html += '<span style="text-decoration: underline;">Description </span><p>'+data[i].job_description+'</p>';
					$("#jobviews").append(html);

				$("#jobviews").on("click", "#dRole" + data[i].job_title_id, function(){
	  			//console.log($(this).attr('id'));
	  			
	  			var modalId = $(this).attr("id");
    			elementId = modalId.charAt(modalId.length-1);
	  			$.ajax({
	  				type: 'POST',
	  				data: {delId: elementId, stuff: "removeJob"},
	  				url: "controller/delete.ctrl.php",
	  				success:function(result) {
	  					console.log(result);
	  				}
	  			})
	  		});
		  		}
		  			
		  		} else {
		  			$("#jobviews").html("<p>No Jobs</p>");
		  		}
	  		}
		})
	});

	

});