<?php
require('../config/connection.php');
require('../model/insert.model.php');
	if($_POST['name']) {

		//Get Post Values when form is submitted 
		//Convert to output array and use values as index 
		parse_str($_POST['name'], $output);
		$output = array_values($output);

		//To use array names instead of index uncomment the following 2 lines under
		// $params = array();
		// parse_str($_POST, $params);

		if($output[2] === 'jobcategories') {
			insert_job_type($conn, $output[0], $output[1]);
		}

		//This function will insert a new job title 
		if($output[3] === 'job') {
			insert_job_title($conn, $output[0], $output[1], $output[2]);
		}

	}
?>