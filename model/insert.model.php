<?php
$conn->select_db("careerboard");

//insert a new job_category
function insert_job_type($conn, $job_category_name, $job_category_description) {

	$stmt = $conn->prepare("INSERT INTO job_category (job_category_name, job_category_description) VALUES (?, ?)");

	$stmt->bind_param("ss", $job_category_name, $job_category_description);

	$stmt->execute();
}


//insert a new job_title
function insert_job_title($conn, $job_title, $job_category_id, $job_description) {

	$stmt = $conn->prepare("INSERT INTO job_title (job_title, job_category_id, job_description) VALUES (?, ?, ?)");

	$stmt->bind_param("sss", $job_title, $job_category_id, $job_description);

	$stmt->execute();
}

?>