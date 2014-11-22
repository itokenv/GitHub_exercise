<?php
	$link = mysqli_connect('localhost', 'root', '');
	if (!$link) {
		die('Connection Failed!'.mysqli_connect_error());
	} else {
		echo 'Connection Succeed!';
		mysqli_set_charset($link, "utf8");
	}
?>