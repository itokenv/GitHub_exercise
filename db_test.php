<?php
	$link = mysqli_connect('localhost', 'root', '');
	if (!$link) {
		die('Connection Failed!'.mysqli_connect_error());
	} else {
		echo 'Connection Succeed!';
		mysqli_set_charset($link, "utf8");
		echo '文字コードは'.mysqli_character_set_name($link).'です。';
	}
?>