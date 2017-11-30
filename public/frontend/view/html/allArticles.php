<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../css/allArticles.css">
	<meta charset="UTF-8">
	<title>Artikeln</title>
</head>
<body>
	<?php include 'menuBar.php'; ?>
	<div class="container-fluid">
		<div class="row" id="header">
			<h3>Alle eingetragene Artikel</h3>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>SKU</th>
					<th>EAN</th>
					<th>Name</th>
					<th>Stock</th>
					<th>Price</th>
					<th>Categorie</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include '../../../backend/allArticles.php';
				foreach (getArticles() as $article){
					echo "<tr><td>".$article->SKU."</td>
							<td>".$article->EAN."</td>
							<td>".$article->Name."</td>
							<td>".$article->Stock."</td>
							<td>".$article->Price."</td>
							<td>".$article->Categorie."</td></tr>";
				}
			?>
			</tbody>
		</table>
	</div>
</body>
</html>