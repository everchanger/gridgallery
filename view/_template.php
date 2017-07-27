<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Grid Gallery</title>
		<!-- CSS -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

	<header>
		<a href="#">headerlink</a>
	</header>
 	<nav>
		<ul class="navbar">
			<li>
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">Gallery</a>
			</li>
			<li>
				<a href="#">About me</a>
			</li>
		</ul>
	</nav>
	<div class="content">
		<?php include 'view/'.$view_file_name.'.php';?>
	</div>
	<footer>
		<a href="#">footerlink</a>
	</footer>

		<!-- JAVASCRIPT -->
	<script type="text/javascript" src="js/common.js"></script>
	</body>
</html>