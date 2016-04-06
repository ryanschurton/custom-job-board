//handle the showing and hiding of form elements
$(document).ready(function(){

	$("#jobs").submit( function(event) {
    event.preventDefault();
    //serialize the form data here
    var data = $( this ).serialize();
    console.log(data);
    	$.ajax({
  			method: "POST",
  			url: "controller/insert.ctrl.php",
  			data: { name: data }
    	})  .success(function(data) {

          $("input[name='jobcategory']").val("");
          $("textarea[name='jobcategorydescription']").val("");

       })
      .fail(function(data) {
        console.log( "fail" );
      });
	});

  $("#company").submit( function(event) {
    event.preventDefault();
    //serialize the form data here
    console.log("company update");
    var data = $( this ).serialize();
    console.log(data);
      $.ajax({
        method: "POST",
        url: "controller/update.ctrl.php",
        data: { name: data }
      })  .success(function(data) {
         console.log( "success" );
       })
      .fail(function(data) {
        console.log( "fail" );
      });
  });

});
