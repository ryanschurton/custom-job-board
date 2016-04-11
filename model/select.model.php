<?php
$conn->select_db("careerboard");
function get_company($conn) {

	//query to return company information
	$sql = "SELECT company_name, company_description FROM company_information";
	$result = $conn->query($sql);
	return mysqli_fetch_assoc($result);

}

function get_jobtitles($conn){

	$sql = "SELECT 	job_title, job_category_id, job_description FROM job_title";
	$result = $conn->query($sql);
	return mysqli_fetch_assoc($result);

}

function get_jobcategories($conn) {

	//query to return job information
	$sql = "SELECT 	job_category_id, job_category_name, job_category_description FROM job_category";
	return runQuery($sql,$conn);	
}

function get_jobTitleByJobCategoryId($conn, $JobCategoryId) {
	$sql = "SELECT 	job_title_id, job_title, job_category_id, job_description FROM job_title WHERE job_category_id = $JobCategoryId";
	return runQuery($sql,$conn);
}

function get_jobtitleandcategory($conn) {

	$sql = "SELECT a.job_title, a.job_category_id, a.job_description, b.job_category_name FROM job_title a LEFT JOIN job_category b ON a.job_category_id = b.job_category_id";	
	return runQuery($sql,$conn);
}

function runQuery($sql, $conn){
	$result = $conn->query($sql);
		while ($row = $result->fetch_assoc()) {
  		$results_array[] = $row;
	}
	return $results_array;
}
?>