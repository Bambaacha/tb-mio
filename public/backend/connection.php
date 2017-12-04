<?php
/**
 * Erstellung einer Verbindung mit der Datenbank
 */
function startConnection(){
	$conn = new mysqli("localhost", "root", "root", "scotchbox");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} else {
		return $conn;
	}
}

/**
 * Schließen der Verbindung mit der Datenbank
 */
function closeConnection(){
	startConnection()->close();
}