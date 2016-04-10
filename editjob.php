<?php require('header.php'); ?>

<style>
.active{
    background-color:white
}
</style>

    <div class="col-sm-9">
      	
      <!-- column 2 -->	
       <h3><i class="glyphicon glyphicon-dashboard"></i> Careers Dashboard</h3>  
            
       <hr>
      
	   <div class="row  col-lg-12">

      <div class="panel panel-default ">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4>Job Titles</h4>
          </div>
        </div>
        <div class="panel-body">

        <ul class="nav nav-tabs">
          <li ><a href="jobtitles.php">Add</a></li>
          <li class="active"><a href="editjob.php">Edit</a></li>
        </ul>
          
          <form class="form form-vertical" id="jobs">

            <div class="form-group">
              <label for="sel1">Job Category</label>
                <select class="form-control" id="jobstype" name="jobcategory"> <!-- get data form sticky-->
                  <option value="">Please Select a Job Category</option>
                </select>
            </div>
            
          </form> 

          <div id="jobviews" class="pre-scrollable"></div>
          <div id="jobTitleModal"></div>
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
		    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>
	 <script src="js/job_title.js"></script>
  <script src="js/editjobrole.js"></script>
  <script src="js/visibility.js"></script>
  <script src="js/jobrole.js"></script>
  </body>
</html>