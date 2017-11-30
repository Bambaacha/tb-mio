<?php
/**
 * Created by PhpStorm.
 * User: mio
 * Date: 20.11.17
 * Time: 10:34
 */

include 'connection.php';

function getArticles(){

	$sql = "SELECT SKU, EAN, name, stock, price, a_id FROM articles";
	$result = startConnection()->query($sql);

	$articles = array();

	if ($result->num_rows > 0) {
		// output data of each row

		if(!empty($row['Category'])) {

			while($row = $result->fetch_assoc())
			{
				$article = (object)[
					'SKU' => $row["SKU"],
					'EAN' => $row["EAN"],
					'Name' => $row["name"],
					'Stock' => $row["stock"],
					'Price' => $row["price"],
					'Categorie' => [$row['categorie']],
					'a_id' => $row['a_id']
				];
				$articles[] = $article;
			}
		} else {
			while($row = $result->fetch_assoc())
			{
				$article = (object)[
					'SKU' => $row["SKU"],
					'EAN' => $row["EAN"],
					'Name' => $row["name"],
					'Stock' => $row["stock"],
					'Price' => $row["price"],
					'Categorie' => 'None',
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