<?php
//insert company_information
//function insert_company($companyName, $companyDescription) {

	// $servername = "localhost";
	// $username = "ry_careerboard";
	// $password = "123456";

	// // Create connection
	// $conn = new mysqli($servername, $username, $password);
	// $conn->select_db("careerboard");


	// $stmt = $conn->prepare("INSERT INTO company_information (company_name, company_description) VALUES (?, ?)");

	// $stmt->bind_param("ss", $companyName, $companyDescription);

	// $stmt->execute();

//}

//insert job_category
function insert_job_type($conn ,$job_category_name, $job_category_description) {

	$conn->select_db("careerboard");


	$stmt = $conn->prepare("INSERT INTO job_category (job_category_name, job_category_description) VALUES (?, ?)");

	$stmt->bind_param("ss", $job_category_name, $job_category_description);

	$stmt->execute();
}


//insert job_title
function insert_job_title() {
	// $servername = "localhost";
	// $username = "ry_careerboard";
	// $password = "123456";

	// // Create connection
	// $conn = new mysqli($servername, $username, $password);
	// $conn->select_db("careerboard");


	$stmt = $conn->prepare("INSERT INTO job_title (job_title, job_category_id, job_description) VALUES (?, ?)");

	$stmt->bind_param("ss", $companyName, $companyDescription);

	$stmt->execute();
}

?>