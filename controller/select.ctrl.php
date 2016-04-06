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





?>