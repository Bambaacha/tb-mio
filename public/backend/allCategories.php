<?php
/**
 * Created by PhpStorm.
 * User: mio
 * Date: 20.11.17
 * Time: 11:10
 */
include 'connection.php';

$sql = "SELECT name FROM categories";
$result = startConnection()->query($sql);

$categories= array();

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc())
	{
		$category = (object)[
			'Kategorien' => $row["name"]
		];
		$categories[] = $category;
	}
} else {
    echo "0 results";
}

startConnection()->close();