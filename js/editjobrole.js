//This Script is responsible for editing a job title
$(document).ready(function(){

	//When the dropdown menu on editjob.php is changed an ajax GET method is sent
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

		  			//empty the view so when the select field is changed
		  			//previous data is removed and not appended to
		  			$("#jobviews").empty();

		  		//The loop will populate the accociated job titles to the page 
		  		//and create there own modal window
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
					
					////attach all Modals to the div to be ready to be called upon
					$('#jobTitleModal').append(modalHTML1);

					//Display all jobs that belong to the job role in the select box.
		  			var html = '<hr><a data-toggle="modal" id=role'+ data[i].job_title_id +' data-target="#myModal'+(i+1)+'" type="button"><i class="fa fa-pencil-square-o "></i> Edit</a>';
		  				html += '<br><a data-toggle="modal" id=dRole'+ data[i].job_title_id +'  type="button"><i class="fa fa-times" aria-hidden="true"></i> Delete</a>';
		  				html += '<h4><span>Title: </span>'+data[i].job_title+'</h4>';
		  				html += '<span style="text-decoration: underline;">Description </span><p>'+data[i].job_description+'</p>';
					
					//Add each job to the page to be view by user
					$("#jobviews").append(html);

				//Give each job titles delete button a click even to listen for a delete call
				$("#jobviews").on("click", "#dRole" + data[i].job_title_id, function(){
	  			
	  				var modalId = $(this).attr("id");
    				elementId = modalId.charAt(modalId.length-1);
    				//Ajax function will try to delete the accociated job title byId.
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
		  			//If no jobs are found with a particular job choice
		  			$("#jobviews").html("<p>No Jobs</p>");
		  		}
	  		}
		})
	});

	

});