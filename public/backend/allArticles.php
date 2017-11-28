<?php
/**
 * Created by PhpStorm.
 * User: mio
 * Date: 20.11.17
 * Time: 10:34
 */
include 'connection.php';

$sql = "SELECT SKU, EAN, name, stock, price FROM articles";
$result = startConnection()->query($sql);

$articles = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $article = (object) [
			'SKU' => $row["SKU"],
			'EAN' => $row["EAN"],
			'Name' => $row["name"],
			'Stock' => $row["stock"],
			'Price' => $row["price"]
		];
        $articles[] = $article;
    }
} else {
    echo "0 results";
}

startConnection()->close();