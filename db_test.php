<?php
	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
		die('Connection Failed!'.mysql_error());
	} else {
		echo 'Connection Succeed!';
	}
?>