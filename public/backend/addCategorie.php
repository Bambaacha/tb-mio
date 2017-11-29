<?php
/**
 * Created by PhpStorm.
 * User: mio
 * Date: 20.11.17
 * Time: 11:10
 */
if (isset($_POST['addCategory'])){

	if(is_string($_POST['category']) && !empty($_POST['category'])) {

		$category = $_POST['category'];

		$sql = "INSERT INTO categories (name)
		VALUES ('$category')";

	}

	include 'connection.php';

	if (startConnection()->query($sql) === TRUE) {
		echo "<p><h2>New Category has been added.</h2></p>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	startConnection()->close();
}
