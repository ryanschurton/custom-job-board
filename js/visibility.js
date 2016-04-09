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

          //Empty fields in Job Category 
          $("input[name='jobcategory']").val("");
          $("textarea[name='jobcategorydescription']").val("");

          //Empty fields in Job Titles
          $("input[name='jobtitle']").val("");
          $("select[name='jobcategory']").val("");
          $("textarea[name='jobdescription']").val("");


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

  $("#roledata").on("click","a", function(event){

    var modalId = $(this).attr("id");
    elementId = modalId.charAt(modalId.length-1);

  $("#allModal").on("submit", "#myModal"+elementId + " .modalForm" , function(event){
      //event.preventDefault();
      var data = $(this).serialize();
      $.ajax({
        method: "POST",
        url: "controller/update.ctrl.php",
        data: { uname: data }
      })  .success(function(data) {
         console.log( "success" );
       })
      .fail(function(data) {
        console.log( "fail" );
      });
  })

  });



  //$("#allModal").on("submit",".btn",function(event){
    //event.preventDefault();
    //console.log("aaa");
    //console.log(".modalForm");
    // var id = $(this).attr("id");
    // console.log($("#"+id).siblings("h3"));
    //console.log($(this).children("#role1"));
    //console.log($(this).children("#role1 h3").text());
    //var id = $(this).children().eq(2);;
    //console.log(id);
    //console.log($(this).children("#myModal1"));
    //$("#allModal").modal("hide");

    //location.reload();
  //});

});
