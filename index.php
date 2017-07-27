<?php
	if(!isset($_GET['view']) || $_GET['view'] == null) {
		$view_file_name = 'home';
	} else {
		$view_file_name = $_GET['view'];
	}

	$photos = array();
	$photos[] = 'img/photo_1.jpg';
	$photos[] = 'img/photo_2.jpg';
	$photos[] = 'img/photo_3.jpg';
	$photos[] = 'img/photo_4.jpg';
	$photos[] = 'img/photo_5.jpg';
	$photos[] = 'img/photo_6.jpg';
	$photos[] = 'img/photo_1.jpg';
	$photos[] = 'img/photo_2.jpg';
	$photos[] = 'img/photo_3.jpg';
	$photos[] = 'img/photo_4.jpg';
	$photos[] = 'img/photo_5.jpg';
	$photos[] = 'img/photo_6.jpg';

	include "view/_template.php";
?>