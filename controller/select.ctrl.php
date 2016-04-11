<?php
require('../config/connection.php');
require('../model/select.model.php');



switch ($_GET['stuff']) {
    case "jobcategories":
        echo json_encode(get_jobcategories($conn)); //Return details about job categories
        break;
    case "company":
        //Return details about the company
        echo json_encode(get_company($conn));
        break;
    case "all":
    		$all = array();

			$all['company'] = array(get_company($conn));
			$all['jobscat'] = array(get_jobcategories($conn));
			$all['jobtitles'] = array(get_jobtitleandcategory($conn));

			echo json_encode($all);
    	break;
    case "getJobCategory":
    		echo json_encode(get_jobTitleByJobCategoryId($conn, $_GET['selectedRole']));
    	break;
    default:
        echo "No match";
}

?>