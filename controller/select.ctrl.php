<?php
require('../config/connection.php'); //included this to retrieve database connection infromation
require('../model/select.model.php'); //include select functon to call select queries


//swtich statement to validate which information to return to the view
switch ($_GET['stuff']) {
    case "jobcategories":
        echo json_encode(get_jobcategories($conn)); //Return details about job categories
        break;
    case "company":
        //Return details about the company
        echo json_encode(get_company($conn));
        break;
    case "all":
        //Return details about the company, the job titles and job categories available
    	$all = array();
		$all['company'] = array(get_company($conn));
		$all['jobscat'] = array(get_jobcategories($conn));
		$all['jobtitles'] = array(get_jobtitleandcategory($conn));

		echo json_encode($all);
    	break;
    case "getJobCategory":
        //return details about a particular jobTitle by it's Id 
    	echo json_encode(get_jobTitleByJobCategoryId($conn, $_GET['selectedRole']));
    	break;
    default:
        echo "No match";
}

?>