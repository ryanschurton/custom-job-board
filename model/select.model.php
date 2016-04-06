<?php

function get_company($conn) {

	//query to return company information
	$conn->select_db("careerboard");
	$sql = "SELECT company_name, company_description FROM company_information";
	$result = $conn->query($sql);
	return mysqli_fetch_assoc($result);

}

function get_jobcategories($conn) {
	$results_array;

	//query to return job information
	$conn->select_db("careerboard");
	$sql = "SELECT 	job_category_id, job_category_name, job_category_description FROM job_category";
	$result = $conn->query($sql);
	
	while ($row = $result->fetch_assoc()) {
  		$results_array[] = $row;
	}

	return $results_array;
}


// function get_jobtitles($conn){

// 	$conn->select_db("careerboard");
// 	$sql = "SELECT 	job_title, job_category_id, job_description FROM job_title";
// 	$result = $conn->query($sql);
// 	return mysqli_fetch_assoc($result);

// 	//query to return jobtitle information
// }

?>