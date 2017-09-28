<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grid Gallery</title>
		<!-- CSS -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

	<header>
		<a href="#">Headerlink2</a>
	</header>
 	<nav>
		<div class="nav-button">
			<a href="#">Home</a>
		</div>
		<div class="nav-button">
			<a href="#">Gallery</a>
		</div>
		<div class="nav-button">
			<a href="#">About me</a>
		</div>
	</nav>
	<div class="content">
		<?php include 'view/'.$view_file_name.'.php';?>
	</div>
	<footer>
		<a href="#">Footerlink</a>
	</footer>

		<!-- JAVASCRIPT -->
	<script type="text/javascript" src="js/common.js"></script>
	</body>
</html>