<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../css/edit.css">
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
	<div class="menu">
		<?php
		include 'menuBar.php';
		include '../../../backend/edit.php';
		?>
	</div>
	<form action="edit.php" method="post">
		<div class="container-fluid">
			<div class="col-md-5">
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> <!-- todo -->
			</div>
			<div class="col-md-2">
				<button class="btn btn-inverse" id="mappingArtCat" name="mappingArtCat">Add Category</button>
			</div>
			<div class="col-md-5">
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> <!-- todo -->
			</div>
			<div class="col-md-6">
				<table id="myTable">
					<tr class="header">
						<th>#</th>
						<th style="width:60%;">Articles</th>
					</tr>
					<?php
					foreach (getArticles() as $article) {
						?>
						<tr>
							<td>
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="<?=$article->a_id?>" name="a_id_<?=$article->a_id?>">
									<span class="custom-control-indicator"></span>
								</label>
							</td>
							<td><?=$article->Name?></td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
			<div class="col-md-6">
				<table id="myTable">
					<tr class="header">
						<th>#</th>
						<th style="width:60%;">Categories</th>
					</tr>
					<?php
					foreach (getCat() as $category) {
						?>
						<tr>
							<td>
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="<?=$category->c_id?>" name="c_id_<?=$category->c_id?>">
									<span class="custom-control-indicator"></span>
								</label>
							</td>
							<td><?=$category->Kategorien?></td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
	</form>
<script>
	function myFunction() {
		// Declare variables
		var input, filter, table, tr, td, i;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");

		// Loop through all table rows, and hide those who don't match the search query
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
				if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	}
</script>
</body>
</html>