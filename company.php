<?php require('header.php'); ?>
    <div class="col-sm-9">
      <h3><i class="glyphicon glyphicon-dashboard"></i> Careers Dashboard</h3>    
            
       <hr>
      
	   <div class="row  col-lg-12">

      <div class="panel panel-default ">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4>Company Information</h4>
          </div>
        </div>

        <div class="panel-body">
          
          <form class="form form-vertical" id="jobs" >

            <div class="control-group">
              <label>Company Name</label>
              <div class="controls">
                <input type="text" class="form-control" placeholder="Enter Name" name="companyname">
              </div>
            </div> 

            <div class="control-group">
              <label>Company Description</label>
              <div class="controls">
                <textarea class="form-control" name="companydescription"></textarea>
              </div>
            </div>

            <div class="control-group">
              <label></label>
              <div class="controls">
                <button type="submit" class="btn btn-primary">
                  Save Changes
                </button>
              </div>
            </div>
               
          </form>  
          </div><!--/panel content-->
        </div><!--/panel-->
      </div><!--/row-->

  	</div><!--/col-span-9-->
  </div><!--/row-->
</div><!--/container-->

<?php require('footer.php') ?>
<footer class="text-center">This Bootstrap 3 dashboard layout is compliments of <a href="http://www.bootply.com/85861"><strong>Bootply.com</strong></a></footer>
  
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>