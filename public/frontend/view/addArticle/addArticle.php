<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="addArticle.css">
	<meta charset="UTF-8">
	<title>Add Article</title>
</head>
<body>
	<div class="menu">
		<?php include '../standardHTML/menuBar.php'; ?>
	</div>
	<div class="container-fluid">
		<div class="form-group">
			<label for="sku">SKU:</label>
			<input type="text" class="form-control" id="sku">
		</div>
		<div class="form-group">
			<label for="ean">EAN:</label>
			<input type="text" class="form-control" id="ean">
		</div>
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name">
		</div>
		<div class="form-group">
			<label for="stockQuantity">Stock quantity:</label>
			<input type="text" class="form-control" id="stockQuantity">
		</div>
		<div class="form-group">
			<label for="price">Price:</label>
			<input type="text" class="form-control" id="price">
		</div>
		<?php
			if("category exist") //@todo
			{
				echo "table";
			}
		?>
	</div>
</body>
</html>