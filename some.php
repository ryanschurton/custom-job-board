<?php
if($_POST['name']) {

	//Get Post Values when form is submitted 
	//Read to send off to Insert

	parse_str($_POST['name'], $output);
	// $params = array();
	// parse_str($_POST, $params);

	//$allKeys = array_keys($output);
	//echo $allKeys[0];
	$output = array_values($output);

	touch('test.txt');
	$file = fopen('test.txt', 'w');
	for($i = 0; $i < count($output); $i++){
		fwrite($file, $output[$i]);
	}
	//fwrite($file, $companydescription);
	fclose($file);
}
?>