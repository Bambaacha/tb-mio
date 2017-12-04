<?php
/**
 * Created by PhpStorm.
 * User: mio
 * Date: 20.11.17
 * Time: 10:34
 */

if(!function_exists('startConnection')){
	include 'connection.php';
}

function getArticles(){

	$sql = "SELECT SKU, EAN, name, stock, price, a_id, categorie FROM articles";
	$result = startConnection()->query($sql);

	$articles = array();

	if ($result->num_rows > 0)
	{
		// output data of each row

		while($row = $result->fetch_assoc())
		{
			if(!empty($row['categorie']))
			{
				$article = (object)[
					'SKU' => $row["SKU"],
					'EAN' => $row["EAN"],
					'Name' => $row["name"],
					'Stock' => $row["stock"],
					'Price' => $row["price"],
					'Categorie' => $row['categorie'],
					'a_id' => $row['a_id']
				];
				$articles[] = $article;
			} else {
				$article = (object)[
					'SKU' => $row["SKU"],
					'EAN' => $row["EAN"],
					'Name' => $row["name"],
					'Stock' => $row["stock"],
					'Price' => $row["price"],
					'Categorie' => ' ',
					'a_id' => $row['a_id']
				];
				$articles[] = $article;
			}
		}
	} else {
		echo "0 results";
	}

	return $articles;
}

if(!function_exists('closeConnection')){
		closeConnection();
}