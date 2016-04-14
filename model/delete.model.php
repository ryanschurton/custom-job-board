<?php
$conn->select_db("careerboard");

function delete_jobRole($conn, $jobRoleId){
	$sql = "DELETE FROM job_category WHERE job_category_id = '$jobRoleId' LIMIT 1";
	if($result = $conn->query($sql)) {
		return TRUE;
	} else {
		return FALSE;
	}

}

function delete_jobTitleBycategoryId($conn, $jobRoleId){
	$sql = "DELETE FROM job_title WHERE job_category_id = '$jobRoleId'";
	if($result = $conn->query($sql)) {
		return TRUE;
	} else {
		return FALSE;
	}

}

function delete_jobTitle($conn, $jobRoleId){
	$sql = "DELETE FROM job_title WHERE job_title_id = '$jobRoleId' LIMIT 1";
	if($result = $conn->query($sql)) {
		return TRUE;
	} else {
		return $conn->error;
	}

}

?>

