<?php
$conn->select_db("careerboard");

//update company information job_category
function update_company($conn, $companyname, $companydescription) {

	$id = 1;
	$stmt = $conn->prepare("UPDATE company_information SET company_name=?, company_description=? WHERE company_id=?");
	$stmt->bind_param("ssi", $companyname, $companydescription, $id);
	$stmt->execute();
}

//function to update job role
function update_jobrole($conn, $roleid, $rolename, $roledesc) {

	$stmt = $conn->prepare("UPDATE 	job_category SET job_category_name=?, job_category_description=? WHERE job_category_id=?");
	$stmt->bind_param("ssi", $rolename, $roledesc, $roleid);
	$stmt->execute();
}

function update_jobtitle($conn, $jobid, $jobtitle, $jobdesc) {

	$stmt = $conn->prepare("UPDATE 	job_title SET job_title=?, job_description=? WHERE job_title_id=?");
	$stmt->bind_param("ssi", $jobtitle, $jobdesc, $jobid);
	$stmt->execute();
}

?>