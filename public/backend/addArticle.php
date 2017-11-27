<?php
/**
 * Created by PhpStorm.
 * User: mio
 * Date: 20.11.17
 * Time: 10:34
 */
if (!isset($_POST['addArticle'])) {
	if(intval($_POST['sku'] && intval($_POST['ean']) && intval($_POST['stockQuantity'] && intval($_POST['price'])))) {
		$sku = $_POST['sku'];
		$ean = $_POST['ean'];
		$stockQuantity = $_POST['stockQuantity'];
		$price = $_POST['price'];
	} else {
		//todo
	}
	if(is_string($_POST['name'])) {
		$name = $_POST['name'];
	} else {
		//todo
	}

	$conn = new mysqli("localhost", "root", "root", "scotchbox");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO articles (SKU, EAN, name, stock, price)
	VALUES ($sku, $ean, '$name', $stockQuantity, $price)";

	if ($conn->query($sql) === TRUE) {
		echo "<p>New record created successfully</p>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}