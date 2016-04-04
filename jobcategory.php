<?php require('header.php'); ?>
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
       <h3><i class="glyphicon glyphicon-dashboard"></i> Careers Dashboard</h3>  
            
       <hr>
      
	   <div class="row  col-lg-12">

      <div class="panel panel-default ">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4>Job Category</h4>
          </div>
        </div>
        <div class="panel-body">
          
          <form class="form form-vertical" id="jobs">

            <div class="control-group">
              <label>Job Category Name</label>
              <div class="controls">
                <input type="text" class="form-control" placeholder="Enter Name" name="jobcategory">
              </div>
            </div>
                  
            <div class="control-group">
              <label>Job Category Description</label>
              <div class="controls">
                <textarea class="form-control" name="jobcategorydescription"></textarea>
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