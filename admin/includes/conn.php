<?php
	$conn = new mysqli('localhost', 'karim', 'Karim@01', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
