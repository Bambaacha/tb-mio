<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../css/allCategories.css">
	<meta charset="UTF-8">
	<title>Kategorien</title>
</head>
<body>
	<?php include 'menuBar.php'; ?>
	<div class="container-fluid">
		<div class="row" id="header">
			<h3>Alle eingetragene Kategorien</h3>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Kategorien</th>
					<th>Zugewiesene Artikel</th>
				</tr>
			</thead>
			<tbody>
			<?php //@todo
				include '../../../backend/allCategories.php';
				foreach (getCat() as $category) {
					echo "<tr><td>".$category->Kategorien."</td></tr>";
				}
			?>
			</tbody>
		</table>
	</div>
</body>
</html>