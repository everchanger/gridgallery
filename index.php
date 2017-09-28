<?php
	if(!isset($_GET['view']) || $_GET['view'] == null) {
		$view_file_name = 'home';
	} else {
		$view_file_name = $_GET['view'];
	}

	$directory = 'img';
	$photos = array_diff(scandir($directory), array('..', '.'));

	include "view/_template.php";
?>