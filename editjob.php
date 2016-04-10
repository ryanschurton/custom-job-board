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

            <div id="jobviews"></div>

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
	 <script src="js/job_title.js"></script>
  <script src="js/jobrole.js"></script>
  <script src="js/editjobrole.js"></script>
  </body>
</html>