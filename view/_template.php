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
		<a href="#">navlink</a>
	</nav>
	<div class="sidebar">
		<a href="#">sidelink</a>
	</div>
  <div class="content">
		<?php include 'view/'.$view_file_name.'.html';?>
	</div>
  <footer>
		<a href="#">footerlink</a>
	</footer>

		<!-- JAVASCRIPT -->
	<script type="text/javascript" src="js/common.js"></script>
	</body>
</html>