<?php
/**
 * Created by PhpStorm.
 * User: mio
 * Date: 20.11.17
 * Time: 10:34
 */
if (isset($_POST['addArticle']))
{
	if(intval($_POST['sku']) && intval($_POST['ean']) && intval($_POST['stockQuantity']) && intval($_POST['price']))
	{
		$sku = $_POST['sku'];
		$ean = $_POST['ean'];
		$stockQuantity = $_POST['stockQuantity'];
		$price = $_POST['price'];
	}
	else
	{
		echo "<p>Please add only numbers in the inputs SKU, EAN, Stock Quantity and Price</p>";
	}
	if(is_string($_POST['name']))
	{
		$name = $_POST['name'];
	}
	else
	{
		//todo
	}

	include 'connection.php';

	if(startConnection()->connect_error)
	{
		die("Connection failed: ".startConnection()->connect_error);
	}

	$sql = "INSERT INTO articles (SKU, EAN, name, stock, price)
	VALUES ($sku, $ean, '$name', $stockQuantity, $price)";

	if(startConnection()->query($sql) === true)
	{
		echo "<p><h2>New Article has been added.</h2></p>";
	}
	else
	{
		echo "Error: ".$sql."<br>".startConnection()->error;
	}

	if(!function_exists('closeConnection')){
		closeConnection();
	}
}