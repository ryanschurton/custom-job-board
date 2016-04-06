<?php

require('connection.php');

// Check connection
if ($conn->connect_error) {
    die('Connect Error: ' . $conn->connect_error);

}

//Create database - TODO: FIRST CHECK IF DATABASE exist then create it 
$sql = "CREATE DATABASE careerboard CHARACTER SET utf8 COLLATE utf8_general_ci";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {

}
//End of Checking if database Exist

//ONCE database is created select the careerboard to start using it
$conn->select_db("careerboard");

// query to create Company_Information table
$sql_companyinfo = "CREATE TABLE Company_Information ( company_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
										   company_name VARCHAR(50) NOT NULL,
										   company_description LONGTEXT
										    )";

//Create Company_Information table
if ($conn->query($sql_companyinfo) === TRUE) {
	
	$companyName = ""; 
	$companyDescription = "";

	$stmt = $conn->prepare("INSERT INTO company_information (company_name, company_description) VALUES (?, ?)");
	$stmt->bind_param("ss", $companyName, $companyDescription);
	$stmt->execute();

    echo "Table Company_Information created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// query to create sql_jobcategory table
$sql_jobcategory = "CREATE TABLE job_category ( job_category_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
										   job_category_name VARCHAR(50) NOT NULL,
										   job_category_description LONGTEXT NOT NULL
										    )";

//Create sql_jobcategory table
if ($conn->query($sql_jobcategory) === TRUE) {
    echo "Table Company_Information created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// query to create job_title table
$sql_jobtitle = "CREATE TABLE job_title ( job_title_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
											job_title VARCHAR(50) NOT NULL,
											job_category_id INT(6) UNSIGNED NOT NULL,
											job_description LONGTEXT NOT NULL,
											FOREIGN KEY (job_category_id) REFERENCES job_category(job_category_id)
											) ";

//Create job_title table
if ($conn->query($sql_jobtitle) === TRUE) {
    echo "Table Company_Information created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->select_db("careerboard");

//Check if all Tables exist - This will be used to validate which tables to create : TODO
$result = $conn->query("SHOW TABLES FROM careerboard");
	if($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {

    }

}

?>