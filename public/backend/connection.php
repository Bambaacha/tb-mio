<?php
function startConnection(){
	$conn = new mysqli("localhost", "root", "root", "scotchbox");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} else {
		return $conn;
	}
}

function closeConnection(){
	startConnection()->close();
}