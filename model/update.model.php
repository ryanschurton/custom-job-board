<?php

//update company information job_category
function update_company($conn, $companyname, $companydescription) {

	$id = 1;

	$conn->select_db("careerboard");

	$stmt = $conn->prepare("UPDATE company_information SET company_name=?, company_description=? WHERE company_id=?");

	$stmt->bind_param("ssi", $companyname, $companydescription, $id);

	$stmt->execute();
}

?>