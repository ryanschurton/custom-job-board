//handle the showing and hiding of form elements
$(document).ready(function(){
	$("#jobs").submit( function(event) {
    event.preventDefault();
    //serialize the form data here
    var data = $( this ).serialize();
    console.log(data);
    	$.ajax({
  			method: "POST",
  			url: "some.php",
  			data: { name: data }
    	})  .success(function(data) {
         console.log( "success" );
       })
      .fail(function(data) {
        console.log( "fail" );
      });

	});
});