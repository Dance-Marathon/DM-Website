<?php
	// Define connection parameters
	
	define("DB_SERVER", "localhost");
	define("DB_USER", "dmtech");
	define("DB_PASS", "FTechK@DM15");
	define("DB_NAME", "dm");


	// Create a database connection
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	// Test if connection succeeded
	if(mysqli_connect_errno()) {
	die("Database connection failed: " . 
	     mysqli_connect_error() . 
	     " (" . mysqli_connect_errno() . ")"
	);
	}

	function sendResponse($status = 200, $body = '', $content_type = 'text/html'){
	$status_header = 'HTTP/1.1 ' . $status;
	header($status_header);
	header('Content-type: ' . $content_type);
	echo $body;
	}

	// Define and execute query
	$query = "SELECT * FROM announcement";
	$events = mysqli_query($connection, $query);
	$result_array = array();
	while ($result = mysqli_fetch_assoc($events)){
		array_push($result_array, $result);
	}

	sendResponse(200, json_encode($result_array));
	// Echo returned data in body

	// Free results
	mysqli_free_result($result);
	// Close connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>