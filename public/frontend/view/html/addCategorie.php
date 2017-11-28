<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../css/addCategorie.css">
	<meta charset="UTF-8">
	<title>Add Categorie</title>
</head>
<body>
	<div class="menu">
		<?php include 'menuBar.php'; ?>
	</div>
	<div class="container-fluid">
		<form action="addCategorie.php" method="post">
			<div class="form-group">
				<label for="category">Kategorie:</label>
				<input type="text" class="form-control" id="category" name="category">
			</div>
			<button class="btn btn-inverse" id="addCategory" name="addCategory">Add Category</button>
		</form>
		<?php
			include '../../../backend/addCategorie.php';
		?>
	</div>
</body>
</html>