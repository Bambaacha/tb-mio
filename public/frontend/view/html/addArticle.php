<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../css/addArticle.css">
	<meta charset="UTF-8">
	<title>Add Article</title>
</head>
<body>
	<?php include 'menuBar.php'; ?>
	<div class="container-fluid">
		<form action="addArticle.php" method="post">
			<div class="form-group">
				<label for="sku">SKU:</label>
				<input type="number" class="form-control" id="sku" name="sku">
			</div>
			<div class="form-group">
				<label for="ean">EAN:</label>
				<input type="number" class="form-control" id="ean" name="ean">
			</div>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="stockQuantity">Stock quantity:</label>
				<input type="number" class="form-control" id="stockQuantity" name="stockQuantity">
			</div>
			<div class="form-group">
				<label for="price">Price:</label>
				<input type="text" class="form-control" id="price" name="price">
			</div>
			<button class="btn btn-inverse" id="addArticle" name="addArticle">Add Article</button>
		</form>
		<?php
			include '../../../backend/addArticle.php';
			if("category exist") //@todo
			{
				//echo "table";
			}
		?>
	</div>
</body>
</html>