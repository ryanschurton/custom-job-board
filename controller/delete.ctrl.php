<?php
require('../config/connection.php');
require('../model/delete.model.php');

// parse_str($_POST['name'], $output);
// $output = array_values($output);

//To use array names instead of index uncomment the following 2 lines under
// $params = array();
// parse_str($_POST, $params);

switch ($_POST['stuff']) {
	case "removeRole":
		echo delete_jobRole($conn, $_POST['delId']);
		break;

	default:
		echo "no match";
		break;
}

?>
	