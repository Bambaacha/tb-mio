<?php
/**
 * Created by PhpStorm.
 * User: mio
 * Date: 20.11.17
 * Time: 11:10
 */
if (!isset($_POST['addCategory'])){
	if(is_string($_POST['category'])) {
		$category = $_POST['category'];
	}
}

include 'connection.php';

$sql = "INSERT INTO categories (name)
VALUES ('$category')";

if (startConnection()->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

startConnection()->close();