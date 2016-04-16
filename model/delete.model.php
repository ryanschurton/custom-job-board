<?php
$conn->select_db("careerboard");

//
function delete_jobRole($conn, $jobRoleId){
	$sql = "DELETE FROM job_category WHERE job_category_id = '$jobRoleId' LIMIT 1";
	if($result = $conn->query($sql)) {
		return TRUE;
	} else {
		return FALSE;
	}

}

//Will delete job title by category Id, may delete more than one job role
//This function is called in sequence with delete_jobRole, Since removing a JobRole
//Should remove and affiliated job titles
function delete_jobTitleBycategoryId($conn, $jobRoleId){
	$sql = "DELETE FROM job_title WHERE job_category_id = '$jobRoleId'";
	if($result = $conn->query($sql)) {
		return TRUE;
	} else {
		return FALSE;
	}

}

//will delete a jobTitle by its Id, only one job title is removed at a time.
function delete_jobTitle($conn, $jobRoleId){
	$sql = "DELETE FROM job_title WHERE job_title_id = '$jobRoleId' LIMIT 1";
	if($result = $conn->query($sql)) {
		return TRUE;
	} else {
		return $conn->error;
	}

}

?>

