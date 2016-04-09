<?php
require('../config/connection.php');
require('../model/update.model.php');
	if($_POST['name']) {

		//Get Post Values when form is submitted 
		//Convert to output array and use values as index 
		parse_str($_POST['name'], $output);
		$output = array_values($output);

		//To use array names instead of index uncomment the following 2 lines under
		// $params = array();
		// parse_str($_POST, $params);


		update_company($conn, $output[0], $output[1]);
	}

	//send data to update job role
	if($_POST['uname']){

		parse_str($_POST['uname'], $output);
		$output = array_values($output);

		update_jobrole($conn, $output[0], $output[1], $output[2]);

	}


?>
	