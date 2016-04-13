<?php
$conn->select_db("careerboard");
function delete_jobRole($conn, $jobRoleId){
	$sql = "DELETE FROM job_category WHERE job_category_id = '$jobRoleId' LIMIT 1";
	$result = $conn->query($sql);
	if($result1 = $conn->query($sql)) {
		$sql2 = "DELETE FROM job_title WHERE job_category_id = '$jobRoleId'";
		if($result2 = $conn->query($sql2)) {
			return "Delete Successful";
		} else {
			return "Something went wrong, could not delete job titles associated with this title";
		}
	} else {
		return "Somethig went wrong, please try again"
	}

}

?>