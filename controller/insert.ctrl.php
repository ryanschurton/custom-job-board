<?php
require('../config/connection.php');
require('../model/insert.model.php');
	if($_POST['name']) {

		//Get Post Values when form is submitted 
		//Read to send off to Insert

		parse_str($_POST['name'], $output);
		// $params = array();
		// parse_str($_POST, $params);

		$output = array_values($output);

		//This function will insert a new job category
		//$output[0] = job category name
		//$output[1] = job title description
		insert_job_type($conn, $output[0],$output[1]);

		//This function will insert a new job title

		//insert_job_title($conn, $output[0], $output[1]);

		//$allKeys = array_keys($output);
		//echo $allKeys[0];
		//$output = array_values($output);

		//touch('insertCTRL.txt');
		// $file = fopen('test.txt', 'w');
		// for($i = 0; $i < count($output); $i++){
		// 	fwrite($file, $output[$i]);
		// }
		//fwrite($file, $companydescription);
		//fclose($file);
		//insert_job_type($output[0],$output[1]);
		//insert_company("ryan","schurton");
	}
?>