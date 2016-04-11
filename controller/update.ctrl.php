<?php
require('../config/connection.php');
require('../model/update.model.php');

parse_str($_POST['name'], $output);
$output = array_values($output);

//To use array names instead of index uncomment the following 2 lines under
// $params = array();
// parse_str($_POST, $params);

switch ($_POST['check']) {
	case "company":
		update_company($conn, $output[0], $output[1]);
		break;
	case "jobrole":
		update_jobrole($conn, $output[0], $output[1], $output[2]);
		break;
	case "jobtitle":
		update_jobtitle($conn, $output[1], $output[2], $output[3]);
		break;
	default:
		echo "no match";
		break;
}

?>
	