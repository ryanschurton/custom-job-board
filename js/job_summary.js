$(document).ready(function(){
	
	$.ajax({
		type: 'GET',
		data: {stuff:"all"},
		url: "controller/select.ctrl.php",
	  	success: function(result){
	  		var data = JSON.parse(result);
	  		console.log(data);

	  		$("#company").html(data.company[0].company_name);
	  		$("#companydesc").html(data.company[0].company_description);

	  		for(var i = 0; i < data.jobscat[0].length; i++) {
	  			var html = "<div class='panel panel-default'>";
	  				html += "<div class='panel-heading'>";
	  				html += "<h4 class='panel-title'>";
	  				html += "<a data-toggle='collapse' data-parent='#accordion' href='#collapse"+(i+1)+"'>" + data.jobscat[0][i].job_category_name + "</a>";
	  				html += "</h4>";
	  				html += "<div>";
	  				html += "<div id='collapse"+(i+1)+"' class='panel-collapse collapse'>";
	  				html += "</div></div>";
	  			$('#accordion').append(html);

	  		}



	  		for(var i = 0; i < data.jobtitles[0].length; i++) {

	  			var html = "<div class='panel-body'>";
	  				html += data.jobtitles[0][i].job_title;
	  				html += "</div>";
	  			$('#collapse'+data.jobtitles[0][i].job_category_id).append(html);
	  		}
	  		
	  	}
	});

});