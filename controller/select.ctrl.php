<?php
require('../config/connection.php');
require('../model/select.model.php');

if($_GET['stuff'] == "summary"){
	echo json_encode(get_company($conn));
}

if($_GET['stuff'] == "jobcategories"){
	echo json_encode(get_jobcategories($conn));
}

if($_GET['stuff'] == "company"){
	echo json_encode(get_company($conn));
}

if($_GET['stuff'] == "all") {
	$all = array();

	$all['company'] = array(get_company($conn));
	$all['jobscat'] = array(get_jobcategories($conn));
	$all['jobtitles'] = array(get_jobtitleandcategory($conn));
	//$all = json_encode(get_company($conn));
	//$all2 = json_encode(get_jobcategories($conn));

	echo json_encode($all);
	//echo $all2;
}

if($_GET['stuff'] == "getJobCategory") {
	
	$file = fopen("tttt.txt","w");
	fwrite($file, $_GET['stuff']);
	fwrite($file, $_GET['selectedRole']);
	fclose($file);
	
	$all = array();

	$all['jobtitles'] = array(get_jobTitleByJobCategoryId($conn, $_GET['selectedRole']));

	echo json_encode($all);
}





?>