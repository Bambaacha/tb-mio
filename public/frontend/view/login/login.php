<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>Login</title>
</head>
<body>
	<div class="menu">
		<?php include '../menuBar/menuBar.php'; ?>
	</div>
	<div class="container-fluid">
		<div class="form-group">
			<div class="row">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><a href="#"><span class="glyphicon glyphicon-user"></span></a></span>
					<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><a href="#"><span class="glyphicon glyphicon-pencil"></span></a></span>
					<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
				</div>
			</div>
		</div>
		<div class="row">
			<button class="btn btn-success" id="login">Login</button>
			<button class="btn btn-danger" id="decline">Decline</button>
		</div>
	</div>
</body>
</html>