<?php
/**
 * Created by PhpStorm.
 * User: mio
 * Date: 20.11.17
 * Time: 11:10
 */
if(!function_exists('startConnection')){
	include 'connection.php';
}

function getCat(){

	$sql = "SELECT name, c_id FROM categories";
	$result = startConnection()->query($sql);

	$categories= array();

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc())
		{
			$category = (object)[
				'Kategorien' => $row["name"],
				'c_id' => $row['c_id']
			];
			$categories[] = $category;
		}
	} else {
		echo "0 results";
	}

	return $categories;
}

if(!function_exists('closeConnection')){
	closeConnection();
}